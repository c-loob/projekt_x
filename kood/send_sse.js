
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("send_sse.php");
			source.onmessage = function(event) {
			document.getElementById("send_sse").innerHTML = event.data;
			};
			} else {
			document.getElementById("send_sse").innerHTML = "thiz be ballz";
			}
