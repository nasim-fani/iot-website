<!DOCTYPE html>
<html lang="en">
    <head>      
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
        <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="../login/login.css">
      </head>
<body>
    <div id="main-wrapper" class="container">
                  <!-- Navbar -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">insert data</li>
                </ol>
              </nav>
              <!-- /Navbar -->

              <br>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Insert new data</h3>
                                    </div>
                                    <p class="text-muted mt-2 mb-5">Enter band and gaurd name.</p>  
                                    <form>
                                        <div class="form-group">
                                            <label for="bandId">Band ID</label>
                                            <input type="text" class="form-control" id="bandId">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="gaurdId">Gaurd's name</label>
                                            <input type="text" class="form-control" id="gaurdId">
                                        </div>
                                        <button type="reset" id="insert" class="btn btn-theme">Submit</button>
                                        <button type="reset" id="back" class="btn btn-theme">Back</button>
                                    </form>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <!-- end card-body -->
                </div>
    
            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>
</body>
    <script> 
        $('#insert').click(function() {
                var bandId = document.getElementById("bandId").value;
                var gaurdId = document.getElementById("gaurdId").value;
                $.get("../api.php", {functionName:"reassign", bandId:bandId, gaurdId:gaurdId }, function(data){
                    if(data!=="edited"){
                    data = "try again!"
                }
                alert(data);
                });
            });

            $('#back').click(function() {
            window.location.href = "../map/map.php";
        });
        </script>
</html>


