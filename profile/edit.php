<!DOCTYPE html>
<html lang="en">
    <head>      
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="../login/login.css">
      </head>
<body>
    <div id="main-wrapper" class="container" \>
                  <!-- Navbar -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../map/map.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit guard's name</li>
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
                                        <h3 class="h4 font-weight-bold text-theme">Edit guard</h3>
                                    </div>
                                    <p class="text-muted mt-2 mb-5">Enter guard name</p>  
                                    <form>
                                        <div class="form-group">
                                            <label for="id">guard id (optional)</label>
                                            <input type="text" class="form-control" id="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">guard name</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <button type="reset" id="edit" class="btn btn-theme">Submit</button>
                                        <button type="reset" id="back" class="btn btn-theme">back</button>
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
        $('#edit').click(function() {
                var name = document.getElementById("name").value;
                var editId = document.getElementById("id").value;
                if(editId==""){                   
                    let params = new URLSearchParams(window.location.search);
                    editId = params.get('id');
                }
                $.get("../api.php", {functionName:"edit", id:editId, name:name }, function(data){
                    alert(data);
                });
           
            });

        $('#back').click(function() {
            let params = new URLSearchParams(window.location.search);
            editId = params.get('id');
            window.location.href = "../profile/profile.php?id="+editId;
        });
    </script>
</html>


