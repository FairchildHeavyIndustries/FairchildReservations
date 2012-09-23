$(document).ready(function(){
		$(".calendar_input").datepicker();
		$("#tabs").tabs();
		
		var c=document.getElementById("map_canvas");
		var ctx=c.getContext("2d");
			var div = document.getElementById("coords");
		
		$("#FlightsDepartureAirport option:first-child").mouseenter(function() {
			alert("howdy, sf");
		});

		function fadeInCity () {
			var Opac = 0
			var interval = setInterval(function() {
				
				drawCity(Opac/100);
				Opac = Opac + 8;
				if (Opac >= 101) clearInterval(interval);
			}, 1);
		}
		
		function drawCity (opacity) {
			ctx.clearRect(0,0,650,400);
			ctx.beginPath();
			ctx.fillStyle = "rgba(0,255,0," + opacity + ")";
			ctx.strokeStyle = "rgba(0,0,255," + opacity + ")";
			ctx.arc(47, 131, opacity * 20, 0, 2 * Math.PI, true);
			ctx.fill();
			ctx.stroke();
			div.innerHTML = "opacity: " + opacity  ;
			
		}
		
		
		fadeInCity(ctx);
		
		/*ctx.beginPath();
		ctx.lineWidth = 3;
		ctx.lineCap="round";
		ctx.moveTo(47,131);
		ctx.quadraticCurveTo(200,50,475,105);
		ctx.stroke();
		$("#map_canvas").hide().fadeIn("slow");
		*/
		c.onmousemove = function (e) {
		var x = e.pageX - this.offsetLeft;
		var y = e.pageY - this.offsetTop;
	
		div.innerHTML = "x: " + x + " y: " + y;
		};
		
			
})