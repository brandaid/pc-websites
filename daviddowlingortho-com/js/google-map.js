// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(36.1587604,-86.7834724),
        disableDefaultUI: true,
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    var contentString = 
    '<div id="content">'+
        '<div id="bodyContent">'+
            '701 Broadway Ave. Ste. 130 <br>'+
            'Nashville, Tn 372013 <br>'+
            '(800) 397-6247'+
        '</div>'+
    '</div>';

    var infowindow = new google.maps.InfoWindow ({
        content: contentString,
        pixelOffset: new google.maps.Size(215,160),
    });

    var image = '.';
  
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(36.1587604,-86.7834724),
        map: map,
        icon: image
    });

    google.maps.event.addListener(marker, 'click', function() {
       infowindow.open(map,marker);
    });
    infowindow.open(map,marker);

}