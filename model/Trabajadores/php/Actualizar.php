

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio</title>
    <link rel="stylesheet" href="../../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../include/css/estilosGLobal.css">
    <link rel="stylesheet" href="../../../include/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php
       session_start();

       $json[]= $_SESSION['User'];
       $idT=0;
       //$json_string =json_encode($json);
    $idR=$json[0]['Id_rest'];
    if(isset($_GET['idT'])){
        $idT=$_GET['idT'];}
       require 'daoTrabajador.php';//Elazamos nuestro controlador


       if (isset($_GET['txtId'])) {
            $txtId=$_GET['txtId'];
            $txtNombre=$_GET['txtNombre'];
            $txtSueldo=$_GET['txtSueldo'];
            $txtTipo=$_GET['txtTipo'];

            $ob=new DaoTrabajador();
          $res=  $ob->actualizarTrab($txtId,$txtNombre,$txtSueldo,$txtTipo);
          echo $res;
            header('Location:../');
       }
       

       
    ?>

        
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Usuario:  <?=$json[0]['Nombre'] ?></div>
        <div class="list-group list-group-flush">
            <a href="../../Inicio/" class="list-group-item list-group-item-action bg-light">Inicio</a>
            <a href="../../Areas/" class="list-group-item list-group-item-action bg-light">Areas y mesas</a>
            <a href="../../Trabajadores/" class="list-group-item list-group-item-action bg-light">Trabajadores</a>
            
        </div>
        </div>
       
        <!-- Contenido de la pagina -->
        <div id="page-content-wrapper">
            <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <button class="btn btn-primary" id="menu-toggle">Ver Menu</button>
                <a href="../index.php" class="btn  btn-danger ml-2"><i class="fas fa-arrow-left"></i> Volver</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h2 class="titulo">Actualización de datos de trabajador</h2>
                    
                </div>
            </nav>
            <!-- CONTAINER -->
            <div class="container pt-2">
                     <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card card-signin my-3 ">
                                <div class="card-body">
                                    <form action="">
                                    <?php
                                   

                                        $ob=new DaoTrabajador();
                                        $r1=$ob->tipoTra($idR);/// Llamamos  la funcion encargada
                                        $r2=$ob->buscarTrab2($idT);
                                                $itP=0;
                                                
                                                if($row=mysqli_fetch_array($r2)){
                                                    $itP=$row['tptra_id'];                                                    
                                                    ?>
                                                    <input type="hidden" name="txtId"  value="<?=$row['trab_id'] ?>">
                                        <div class="form-group">
                                            <label for="txtNombre">Nombre Completo</label>
                                            <input type="text" class="form-control" name="txtNombre" value="<?=$row['trab_nombre'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtNombre">Sueldo Trabajador</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Q</span>
                                                </div>
                                                <input type="number" class="form-control" name="txtSueldo" value="<?=$row['trab_pago'] ?>" require>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="txtTipo">Tipo de Trabajador</label>
                                            <select class="form-control" name="txtTipo" >                    
                                            <?php

                                                while($row1=mysqli_fetch_array($r1)){                                                    
                                                    ?>
                                                         <option value="<?=$row1['tb_id'] ?>" <?php if($row1['tb_id']==$idT){echo 'selected';} ?>><?=$row1['tb_trabajo'] ?></option>
                                                    <?php           
                                                } 

                                                ?>
                                            </select>
                                        </div>
                                    
                                        <button class="btn btn-block btn-info" type="submit" data-toggle="modal" data-target="#ModalT"><i class="far fa-save"></i> Actualizar Datos </button>
                                        <?php           
                                                } 

                                                ?>
                                    </form>
                                </div>
                            </div>  
                        </div>
                     </div>
                   

            </div>
              <!-- CONTAINER -->

        </div>
</div>  
    

    <!-- Librerias script que se utilizaran -->
    <script src="../../../include/js/jquery3.5.min.js"></script>
    <script src="../../../include/js/bootstrap.min.js"></script>
    <script src="../../../include/js/all.min.js"></script>
    
    <script>
        $("#wrapper").toggleClass("toggled");
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    
</body>
</html>