   
var mapboxTiles = L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '<a href="http://www.mapbox.com/about/maps/" target="_blank">Terms &amp; Feedback</a>'
});
        //possible colors 'red', 'darkred', 'orange', 'green', 'darkgreen', 'blue', 'purple', 'darkpuple', 'cadetblue'
        // var icon = L.AwesomeMarkers.icon({
        //     prefix: 'fa', //font awesome rather than bootstrap
        //     markerColor: 'red', // see colors above
        //     icon: 'coffee' //http://fortawesome.github.io/Font-Awesome/icons/
        // });
var map = L.map('map')
    .addLayer(mapboxTiles)
    .setView([42.444508, -76.499491], 12);
setInterval(function(){ 
    var promise = $.getJSON("info.json");//change
    promise.then(function(data) {
        var allbusinesses = L.geoJson(data);
        var gaurds = L.geoJson(data, {
            filter: function(feature, layer) {
                return feature.properties.BusType == "gaurd";
            },
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    //icon: icon
            }).on('mouseover', function() {
                this.bindPopup(feature.properties.Name).openPopup();
                })
                .on('click', function() {
                    document.location.href = "../profile/profile.php?name="+feature.properties.Name;
                });
            }
        });
        map.fitBounds(allbusinesses.getBounds(), {
            padding: [50, 50]
        });
        gaurds.addTo(map) 
        console.log(allbusinesses)     
     });
}, 3000);   