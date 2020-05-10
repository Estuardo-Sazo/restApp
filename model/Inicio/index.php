

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../include/css/estilosGLobal.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
       session_start();

       $json[]= $_SESSION['User'];
       //$json_string =json_encode($json);
       
    ?>

        
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Usuario:  <?=$json[0]['Nombre'] ?></div>
        <div class="list-group list-group-flush">
            <a href="../Areas/" class="list-group-item list-group-item-action bg-light">Areas y mesas</a>
            <a href="../Trabajadores/" class="list-group-item list-group-item-action bg-light">Trabajadores</a>
            
        </div>
        </div>
        <!-- Contenido de la pagina -->
        <div id="page-content-wrapper">
            <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <button class="btn btn-primary" id="menu-toggle">Ver Menu</button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h3 class="titulo"><?=$json[0]['Rest'] ?></h3>
                    
                </div>
            </nav>
            <br>
                
            <hr>
            <div class="container-fluid">
            <input type="hidden"  id="idR" name="idR" value="<?=$json[0]['Id_rest'] ?>">
                <div class="row">
                    <div class="col-3">
                        <div class="card card-signin my-2">
                            <div class="card-body id="Areas"">
                                <div class="nav flex-column nav-pills" id="Areas" role="tablist" aria-orientation="vertical">
                                    
                                                                     
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-9">    
                                            
                        <div class="tab-content" id="Mesas">
                         
                           <!-- <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="card card-signin my-3 bg-warning">
                                            <div class="card-body">
                                            <h5 class="card-title text-center">Mesa No.1</h5>
                                            <button class="btn btn1 btn-sm btn-primary btn-block text-uppercase" >Ver factura</button>
                                            </div>
                                    </div>                                        
                                </div> 
                                
                            </div> -->
                        
                        
                    </div>
                </div>
            </div>




        </div>
</div>  
    


    <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>