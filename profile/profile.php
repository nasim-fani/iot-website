<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="../map/map.css">
    <link rel="stylesheet" href="profile.css">

    <script>
      let searchParams = new URLSearchParams(window.location.search);
      let id = searchParams.get('id');
      $.get("../api.php", {functionName:"profile", id:id }, function(data){
        var json = JSON.parse(data).guard;
        console.log(json);
        let name = json.name;
        let date = json.date_joined;
        let emergency = json.last.emergency_alert;
        if(emergency==true){
          emergency="emergency situation";
        }
        else{
          emergency="";
        }
        let rate = json.last.heartbeat;
        //left // band id
        $("#gaurd-name").text(name);
        $("#joined").text(date.substring(0, 10));
        $("#rate").text(rate);
        $("#emergency").text(emergency);
        
      });
    </script>   
</head>
<body>
    <div class="container">
        <div class="main-body">
        
              <!-- Navbar -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../map/map.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Navbar -->
              
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4 id="gaurd-name"></h4>                        
                          <p id="joined" class="text-muted font-size-sm"></p>
                          <span class="d-inline iconify" data-icon="uil:heart-rate" data-inline="true"></span><p id="rate" class="d-inline font-size-sm"></p>
                          <p id="emergency" class="text-danger mb-1"></p>
                          <button id="edit" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">                      
                       <!-- Map -->
                    <div id="map"><script src="map.js"></script></div>
                      <!-- /Map -->
                    </div>
                  </div>           
                </div>
              </div>
         
            </div>
        </div>
</body>

<script> 
        $('#edit').click(function() {
          let params = new URLSearchParams(window.location.search);
          let editId = searchParams.get('id');
          window.location.href = "edit.php?id="+editId;
        });
        
    </script>
</html>