$(document).ready(function(){
	
	// global vars
	var backend = 'php/middleware.php';

	// init tasks
	initDepCities();
	
	// date controls
	$(".calendar_input").datepicker();
	
	//listeners
	
	$(".slkt_button").click(function(){
		var thisDropdown = $(this).siblings(".slkt_dropdown");
		thisDropdown.fadeIn("1", function(){
			thisDropdown.addClass('slkt_visible').mouseleave(function(){
				    thisDropdown.fadeOut("slow");
			 });;
		});
	})
	
	$('select[name="arrival_city"]').change(function(){
		$(this).find(".select_instruction").remove();
	})
	
	// functions
	function initDepCities () {
		$.getJSON(
			backend, 
			{func: 'getInitDepCities'},
			function(initDepCities) {
				$("#AirportGrid").tmpl(initDepCities).appendTo("#depr_airp_drodwn");
				
				$(initDepCities).each(function(i){
					var airport_icon_id = "airport_icon_"+ initDepCities[i].airport;
					$("#map_background").append("<div id='" + airport_icon_id +"' class='map_image airport_icon' style='display: none;'></div>");
					$("#" + airport_icon_id).css({"left": initDepCities[i].position_x, "bottom": initDepCities[i].position_y });
					
				})
				initSlktPanel($("#depr_airp_drodwn .slkt_item"), function(slkt_item_airport){
					setArrCities(slkt_item_airport);
				});
			}
		)
	}
	
	function setArrCities (deprAirportIn) {
		$.getJSON(
			backend, 
			{
				func: 'getValidArrCities', 
				deprAirport: deprAirportIn
			},
			function(servicedCities) {
				var servicedAirports = [];
				$(servicedCities).each(function(i){
					servicedAirports.push(servicedCities[i].airport);
				})
				var currArrvAirport = $("#arrv_airp_drodwn").find(".slkt_item_selected").attr("data-airport");
				$("#arrv_airp_drodwn table").each(function(){$(this).remove()})
				$("#AirportGrid").tmpl(servicedCities).appendTo("#arrv_airp_drodwn");
				initSlktPanel($("#arrv_airp_drodwn .slkt_item"), function(destAirport){$("#console").text( $("#console").text() + destAirport + " baby")});
				
				if (($.inArray(currArrvAirport, servicedAirports)) < 0) {
					$("#arrival_city_selekt").removeClass("slkt_container_inactive");
					$("#arrv_slkt_button .slkt_text").text("Choose a City:");
				} else {
					$("#arrival_city_selekt table[data-airport='" + currArrvAirport + "']").addClass("slkt_item_selected");
				};
		});
	}
	
	function initSlktPanel (slktItems, callbackFunction) {
		slktItems.each(function(i){
			var currAirport = $(slktItems[i]).attr("data-airport");
			var currCity = $(slktItems[i]).attr("data-city");
			$(this).mouseenter(function(){
				$("#console").text($(this).attr('data-airport') + " tox ")
				$(this).addClass("slkt_item_hover");
				$("#airport_icon_" + currAirport).fadeIn("fast");
			}).mouseleave(function(){
				$(this).removeClass("slkt_item_hover");
				$("#airport_icon_" + currAirport).fadeOut();
			}).mousedown(function(){
				$(this).removeClass("slkt_item_hover");
				$(this).addClass("slkt_item_clicked");
			}).mouseup(	function(){
				$(this).addClass("slkt_item_hover");
				$(this).removeClass("slkt_item_clicked");
				callbackFunction(currAirport);
				$(slktItems).parents(".slkt_dropdown").hide().siblings(".slkt_button").children(".slkt_text").text(currCity);
				slktItems.each(function(){$(this).removeClass("slkt_item_selected")});
				$(".airport_icon").each(function(){$(this).hide()})
				$(slktItems[i]).addClass("slkt_item_selected");
				$(this).unbind();
				$(this).removeClass("slkt_item_hover");
				$("#airport_icon_" + currAirport).show();
			})
		})
	}
	

})