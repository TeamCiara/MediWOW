$(document).ready(function(){
			$("#chat").keydown(function(e){
				if (e.keyCode == 13)
				{
					//if (e.shiftKey) {
						//$(this).val( $(this).val() + "\n" );
						$("#bbody").val($("#bbody").val() + $(this).val());
						//console.log($("#bbody").val() + "\n");
						$(this).val("");
					//}
					//console.log($(this).val());
				}
			});
    
    $("#header").click(function(){
            console.log("YEYE");
            $("#maximize").css("display","none");
		});
		
		$("#minimize2").click(function(){
			$("#maximize").css("display","block");
		});
		

    });
		
		
		 function myMap() {
            var pos = {lat: 51.508742, lng: -0.120850};
            var infoWindow = new google.maps.InfoWindow;
            var map = new google.maps.Map(document.getElementById("googleMap"),{
                center: pos,
                zoom: 9
            });

            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(function(position) {
                    pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };

                    //infoWindow.setPosition(pos);
                    //infoWindow.setContent("Location found");
                    //infoWindow.open(map);
                    map.setCenter(pos);

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map
                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }	