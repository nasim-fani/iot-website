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
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">map</li>
                </ol>
              </nav>
              <!-- /Navbar -->
    <div id="map"><script src="map.js"></script></div>
    <div id="content"><div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3" align="center">
              <h5 class="mb-0">Band 1</h5>
            </div>
            <div class="col-sm-6 text-secondary" align="center">
              John Doe
            </div>
            <div class="col-sm-3 text-secondary" align="center">
                <a class="btn btn-info btn-lg " target="__blank" href="edit.html">Edit</a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3"  align="center">
              <h5 class="mb-0">Band 2</h5>
            </div>
            <div class="col-sm-6 text-secondary" align="center">
                John Doe
              </div>
              <div class="col-sm-3 text-secondary" align="center">
                  <a class="btn btn-info btn-lg " target="__blank" href="edit.html">Edit</a>
              </div>
          </div>
          <hr>
          <div class="row" align="center">
            <div class="col-sm-12">
              <a class="btn btn-info btn-lg " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">+ Insert a new row</a>
              
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

</body>

</html>