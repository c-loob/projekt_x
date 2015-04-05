
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("send_sse.php");
			source.onmessage = function(event) {
			document.getElementById("result").innerHTML = event.data;
			};
			} else {
			document.getElementById("result").innerHTML = "thiz be ballz";
			}
