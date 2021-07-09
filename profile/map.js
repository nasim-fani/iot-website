let param = new URLSearchParams(window.location.search);
let gaurdId = searchParams.get('id');
var map = L.map('map').setView([ 36.315846, 59.530222], 14);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = new Array();
getMarker();
setInterval(getMarker, 30000);
function getMarker(){
    markerDelAgain();
    $.get("../api.php", {functionName:"guardLoc",id:gaurdId }, function(data){
        var json = JSON.parse(data);
        var last = json.last;
        var lat = last.lat;
        var lang = last.lang;
        var mark = L.marker([lat,lang])
        mark.addTo(map);
        marker.push(mark);
    })
}

function markerDelAgain() {
    for(i=0;i<marker.length;i++) {
        map.removeLayer(marker[i]);
        }  
    }