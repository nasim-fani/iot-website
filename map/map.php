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
    <link rel="stylesheet" href="map.css">
</head>
<body>      
    <div class="container">
        <div class="main-body">      
              <!-- Navbar -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">map</li>   
                  <div class=" ml-auto btn-group blocks">
                  <div class="dropdown" style="padding-right: 10px;">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      + Insert item
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" id="newBand" href="#">New Wristband</a>
                      <a class="dropdown-item" id="newGaurd" href="#">New Gaurd</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      - Delete item
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" id="deleteBand" href="#">Delete Wristband</a>
                      <a class="dropdown-item" id="deleteGuard" href="#">Delete Guard</a>
                    </div>
                  </div>  
                  </div>              
                </ol>                   
              </nav>
              <!-- /Navbar -->
    <div id="map"><script src="map.js"></script></div>
    <div id="content"><div class="card mb-3">
        <div class="card-body">
        <div class="row">
                    <div class="col-sm-3" align="center">
                      <h4 class="mb-0">BAND ID</h4>
                    </div>
                    <div class="col-sm-6" align="center">
                    <h4 class="mb-0">GUARD ID</h4>
                    </div>
                    <div hidden class="col-sm-1 text-secondary" align="center">
                        <a class="btn btn-info btn-lg " href="../reassign/reassign.php?band='.$band.'&username='.$username.'">Edit</a>
                    </div>
                    <div hidden class="col-sm-1 text-secondary" align="center">
                        <a class="btn btn-danger btn-lg " href="band='.$band.'&username='.$username.'">delete</a>
                    </div>
                  </div>
                  <hr>
          <?php    
            $api_url = 'http://185.211.58.230/api/active_guards/';
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/json\r\n",
                    'method'  => 'GET'
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($api_url, false, $context);
            $arr = json_decode($result,TRUE)['guards'];
            foreach($arr as $item) { 
                $username = $item['staff_id']; 
                $band = $item['band__band_id'];
                echo ('
                  <div class="row">
                    <div class="col-sm-3" align="center">
                      '.$band.'
                    </div>
                    <div class="col-sm-6 " align="center">
                    '.$username.'
                    </div>
                    <div class="col-sm-3 text-secondary" align="center">
                        <a class="btn btn-info btn-lg " href="../reassign/reassign.php?band='.$band.'&username='.$username.'">Edit</a>
                    </div>
                  </div>
                  <hr>
                ');
            }       
          ?>  
          <div class="row" align="center">
            <div class="col-sm-12">
              <a class="btn btn-info btn-lg" href="../insert/insert.php">+ Insert a new row</a>              
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
</body>
  <script>     
    $('#newGaurd').click(function() {
      window.location.href = "../new/newGuard.php"; 
    });

    $('#newBand').click(function() {
      window.location.href = "../new/newBand.php"; 
    });

    $('#deleteBand').click(function() {
      window.location.href = "../delete/deleteBand.php"; 
    });

    $('#deleteGuard').click(function() {
      window.location.href = "../delete/deleteGuard.php"; 
    });
  </script>
</html>