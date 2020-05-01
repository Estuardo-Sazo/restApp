

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
            <div class="container">
                <h1>No hay datos ingresados</h1>
            </div>




        </div>
</div>  
    


    <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>
    <script>
        $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>