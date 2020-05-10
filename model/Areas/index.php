

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
   
    <link rel="stylesheet" href="../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../include/css/estilosGlobal.css">
    <link rel="stylesheet" href="../../include/css/all.min.css">
   
    
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
        <div class="sidebar-heading">
            <p>Usuario:  <?=$json[0]['Nombre'] ?></p>
        </div>
        <div class="list-group list-group-flush">
            <a href="../Inicio/" class="list-group-item list-group-item-action bg-light">Inicio</a>
            <a href="../Areas/" class="list-group-item list-group-item-action bg-light">Areas y mesas</a>
            
        </div>
        </div>
        <input type="hidden"  id="idR" name="idR" value="<?=$json[0]['Id_rest'] ?>">
        <!-- Contenido de la pagina -->
        <div id="page-content-wrapper">
            <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <button class="btn btn-primary" id="menu-toggle">Ver Menu</button>
                <a href="../Inicio/" class="btn  btn-danger ml-2"><i class="fas fa-arrow-left"></i> Volver</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h2 class="titulo">  Areas y Mesas</h2>
                    
                </div>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="NuevaAreaM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nueva Area</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" id="frmArea">
                                    <div class="modal-body p-3">
                                        
                                        <div class="form-group">
                                            <label for="txtNombre">Nombre del Area</label>
                                            <input type="text" class="form-control" id="txtNombre" placeholder="Area" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="far fa-times-circle"></i> Cancelar</button>
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#NuevaAreaM" ><i class="far fa-save"></i> Guardar</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                                 <!-- Modal -->
            <!-- CONTAINER -->
            <div class="container pt-2">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn  btn-light" data-toggle="modal" data-target="#NuevaAreaM">
                                    Agregar nueva area
                                </button>
                    <div class="row justify-content-center" id="Areas">
                       <!-- <div class="col-lg-3 col-md-4">
                            <div class="card card-signin my-3">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">Salon</h5>
                                    <button class="btn btn1 btn-sm btn-primary btn-block text-uppercase" >Agregar Mesa</button>
                                    <button class="btn btn1 btn-sm btn-danger btn-block text-uppercase" >Eliminar Mesa</button>
                                    </div>
                            </div>
                                
                        </div> -->

                       
                        
                    </div>


            </div>
              <!-- CONTAINER -->




        </div>
</div>  
    


    <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>
    <script src="../../include/js/all.min.js"></script>
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