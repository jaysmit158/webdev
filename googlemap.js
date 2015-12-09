var myCenter = new google.maps.LatLng(41.186548, -73.195177);

function initialize() {
var mapProp = {
center:myCenter,
 zoom:11,
scrollwheel:false,
draggable:false,
 mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

 marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


