

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../include/css/estilosGLobal.css">
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
        <div class="sidebar-heading">Usuario:  <?=$json[0]['Nombre'] ?></div>
        <div class="list-group list-group-flush">
            <a href="../Inicio/" class="list-group-item list-group-item-action bg-light">Inicio</a>
            <a href="../Areas/" class="list-group-item list-group-item-action bg-light">Areas y mesas</a>
            
        </div>
        </div>
       
        <!-- Contenido de la pagina -->
        <div id="page-content-wrapper">
            <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <button class="btn btn-primary" id="menu-toggle">Ver Menu</button>
                <a href="index.php" class="btn  btn-danger ml-2"><i class="fas fa-arrow-left"></i> Volver</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h2 class="titulo">Mesas <?=$_GET['name'] ?></h2>
                    
                </div>
            </nav>
            <!-- CONTAINER -->
            <div class="container pt-2">
                     
                    <div class="row justify-content-center" >
                      <div class="col-md-3">
                            <div class="card card-signin my-3">
                                    <div class="card-body">
                                    <h5 class="card-title text-center">Agregar Mesa</h5>
                                    <form class="form-signin" id="frmMesa">
                                        <input type="hidden"  id="Area" name="Area" value="<?=$_GET['a'] ?>">
                                        <input type="hidden"  id="Rest" name="Rest" value="<?=$_GET['r'] ?>">
                                    <div class="form-group ">
                                        <label for="txtUser">Nombre de mesa:</label>
                                        <input type="text" id="txtMesa" class="form-control"  required autofocus>
                                        
                                    </div>
                                    <button type="submit" class="btn btn1 btn-sm btn-primary btn-block text-uppercase" >Agregar Mesa</button>
                                    
                                    </form>
                                    </div>
                            </div>
                                
                        </div> 

                        <div class="col-md-9">
                            <div class="card card-signin my-3">
                                <div class="card-body">
                                <h5 class="card-title text-center">Lista de Mesas</h5>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Codigo</th>
                                            <th scope="col">Nombre mesa</th>
                                            <th scope="col">Opciones</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="Cuerpo" >
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>


            </div>
              <!-- CONTAINER -->

        </div>
</div>  
    

    <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>
    <script src="../../include/js/all.min.js"></script>
    <script src="js/mainMesas.js"></script>
    <script>
        $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    
</body>
</html>