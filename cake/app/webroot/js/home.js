$(document).ready(function(){
		$(".calendar_input").datepicker();
		$("#tabs").tabs();

		initSlktPanel("departure", function(airport){
			$("#FlightsDepartureAirport").attr("value", airport);
			//animatePath();
		});
		initSlktPanel("arrival", function(airport){
			$("#FlightsArrivalAirport").attr("value", airport);
			//animatePath();
		});

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

		function initSlktPanel (direction, callbackFunction) {
			$("#" + direction + "_airp_drodwn .slkt_item").each(function(i){
				var currAirport = $(this).attr("data-airport");
				var currCity = $(this).attr("data-city");
				$(this).mouseenter(function(){
					$(this).addClass("slkt_item_hover");
					fadeInCity($(this), direction);
				}).mouseleave(function(){
					$(this).removeClass("slkt_item_hover");
				}).mousedown(function(){
					$(this).removeClass("slkt_item_hover");
					$(this).addClass("slkt_item_clicked");
				}).mouseup(	function(){
					$(this).addClass("slkt_item_hover");
					$(this).removeClass("slkt_item_clicked");
					$(this).parents(".slkt_dropdown").hide().siblings(".slkt_button").children(".slkt_text").text(currCity);;
					$(this).each(function(){$(this).removeClass("slkt_item_selected")});
					callbackFunction(currAirport);
					$(this[i]).addClass("slkt_item_selected");
					//$(this).unbind();
					$(this).removeClass("slkt_item_hover");
					clearCanvas(direction);
				})
			})
		}
	
	
	function fadeInCity (cityDIV, direction) {
		var Opac = 0
		var interval = setInterval(function() {
			animateCity(Opac/100, cityDIV, direction);
			Opac = Opac + 8;
			if (Opac >= 101) clearInterval(interval);
		}, 1);
	}
	
	function animateCity (opacity, city, direction) {
		var c=document.getElementById(direction + "_canvas");
		var ctx=c.getContext("2d");
		
		ctx.clearRect(0,0,650,400);
		ctx.beginPath();
		ctx.fillStyle = "rgba(0,255,0," + opacity + ")";
		ctx.strokeStyle = "rgba(0,0,255," + opacity + ")";
		ctx.arc($(city).attr('data-position_x'), $(city).attr('data-position_y'), opacity * 20, 0, 2 * Math.PI, true);
		ctx.fill();
		ctx.stroke();
		
	}
	
	function clearCanvas (direction) {
		var c=document.getElementById(direction + "_canvas");
		var ctx=c.getContext("2d");
		
		ctx.clearRect(0,0,650,400);
	}
	
	function animatePath () {
		clearCanvas("path");
		var airport1 = $("#FlightsDepartureAirport").attr("value");
		var airport2 = $("#FlightsArrivalAirport").attr("value");
		if (airport1 && airport2) {
			var airport1_pos = [$('#departure_city_selekt table[data-airport="' + airport1 + '"]').attr("data-position_x"), $('#departure_city_selekt table[data-airport="' + airport1 + '"]').attr("data-position_y")  ];
			var airport2_pos = [$('#arrival_city_selekt table[data-airport="' + airport2 + '"]').attr("data-position_x") , $('#arrival_city_selekt table[data-airport="' + airport2 + '"]').attr("data-position_y")];
			
			var bezier_x = 0;
			var bezier_y = 0;
			
			if (airport1_pos[0] > airport2_pos[0] ) {
				bezier_x = parseInt(airport1_pos[0] - airport2_pos[0])/2 + parseInt(airport2_pos[0]);
			} else	{
				bezier_x = parseInt(airport2_pos[0] - airport1_pos[0])/2 + parseInt(airport1_pos[0]);
			};
			if (airport1_pos[1] > airport2_pos[1] ) {
				bezier_y = parseInt(airport2_pos[1]) - 100;
			} else	{
				bezier_y = parseInt(airport1_pos[1]) - 100;
			};
			
			var frames_pos = airport1_pos.slice(0)
			var interval = setInterval(function(i) {
				
				paintPath(airport1_pos, frames_pos, bezier_x, bezier_y);
				frames_pos[0]++; frames_pos[1]++
				if (frames_pos[0] >= airport2_pos[0] && frames_pos[1] >= airport2_pos[1]) clearInterval(interval);
			}, 1);
			
			
			
		};
	}
	
	function paintPath (airport1_pos, airport2_pos, bezier_x, bezier_y) {
		var c=document.getElementById("path_canvas");
		var ctx=c.getContext("2d");
		
		clearCanvas("path");		
		ctx.beginPath();
		ctx.lineWidth = 3;
		ctx.lineCap="round";
		ctx.moveTo(airport1_pos[0],airport1_pos[1]);
		ctx.lineTo(airport2_pos[0],airport2_pos[1])
		//ctx.quadraticCurveTo(bezier_x, bezier_y, airport2_pos[0],airport2_pos[1]);
		ctx.strokeStyle = "rgb(255,0,0)";
		ctx.stroke();
	}
})