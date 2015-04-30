// activates the map using Google API
function activateMap()
{
    // location of dalhousie university in a variable
    var dal = new google.maps.LatLng(44.634814, -63.592964);

    // sets up the maps variables
    var mapOptions = {
        center: dal,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // draws the map in the div 'map-canvas'
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // string for the info window
    var string = '<b>Dalhousie University</b><br>';
        string += '6299 South St<br>';
        string += 'Halifax, NS B3H 4R2';

    // info window for the marker
    var infowindow = new google.maps.InfoWindow({
        content: string
    });

    // create a marker in the center
    var marker = new google.maps.Marker({
        position: dal,
        map: map,
        title: 'Dalhousie University'
    });

    // info window event listener
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', activateMap);
