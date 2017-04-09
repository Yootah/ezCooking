function myMap() {
	if ($("#googleMap").length == 0) {
	        setTimeout(onMapLoad, 500);
	        return;
	    }
	var mapProp= {
	    center:new google.maps.LatLng(51.508742,-0.120850),
	    zoom:5,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}