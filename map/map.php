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
                  <li class="ml-auto"><a href="#"><i data-feather="circle"></i></a></li>                 
                </ol>                   
              </nav>
              <!-- /Navbar -->
    <div id="map"><script src="map.js"></script></div>
    <div id="content"><div class="card mb-3">
        <div class="card-body">
        <?php    
        error_reporting(0);
      $api_url = '/api/v1/employees' ;
      $json_data = file_get_contents($api_url);
      $arr = json_decode($json_data,true);
      foreach($arr as $item) { 
        $name = $item['name']; 
        $band = $item['band'];
        echo ('
          <div class="row">
            <div class="col-sm-3" align="center">
              <h4 class="mb-0">'.$band.'</h4>
            </div>
            <div class="col-sm-6 text-secondary" align="center">
            '.$name.'
            </div>
            <div class="col-sm-1 text-secondary" align="center">
                <a class="btn btn-info btn-lg " href="../reassign/reassign.php?band='.$band.'&name='.$name.'">Edit</a>
            </div>
            <div class="col-sm-1 text-secondary" align="center">
                <a class="btn btn-danger btn-lg " href="band='.$band.'&name='.$name.'">delete</a>
            </div>
          </div>
          <hr>
        ');
    }
    ?>
    <div class="row">
            <div class="col-sm-3" align="center">
              <h4 class="mb-0">band1</h4>
            </div>
            <div class="col-sm-6 text-secondary" align="center">
            guard1
            </div>
            <div class="col-sm-1 text-secondary" align="center">
                <a class="btn btn-info btn-lg " href="../reassign/reassign.php?band=band1&name=gaurd2">Edit</a>
            </div>
            <div class="col-sm-1 text-secondary" align="center">
                <a class="btn btn-danger btn-lg " href="band=band1&name=gaurd1">delete</a>
            </div>
          </div>
          <hr>

          <div class="row" align="center">
            <div class="col-sm-12">
              <a class="btn btn-info btn-lg " href="../insert/insert.php">+ Insert a new row</a>              
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>
</div>

</body>
  <script> 
        $('.btn-danger').click(function() {
          var params = $(this).attr("href");
              $.get("api.php", {functionName:"delete", params:params}, function(data){
                 window.location.href = "../map/map.php";      
              });
          });
      </script>
</html>