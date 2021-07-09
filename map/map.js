var map = L.map('map').setView([ 36.315846, 59.530222], 14);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = new Array();

getMarker();
setInterval(getMarker,30000);

function getMarker(){
    markerDelAgain();
    $.get("../api.php", {functionName:"map" }, function(data){
        var json = JSON.parse(data).guards;
        for(var i = 0; i < json.length; i++) {
            var obj = json[i];  
            var last = obj.last;
            if(last !== null) {
            var name = obj.name;
            var id = obj.staff_id;       
                var lat = last.lat;
                var lang = last.lang;
                var mark = L.marker([lat,lang])
                marker.push(mark);
                mark.addTo(map).on('click', function(){
                    window.location.href = "../profile/profile.php?id="+id;
                })
                    .bindPopup(name)
                    .openPopup();
            }
        }
    })}
function markerDelAgain() {
    for(i=0;i<marker.length;i++) {
        map.removeLayer(marker[i]);
        }  
    }




      