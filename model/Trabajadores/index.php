<!DOCTYPE html>
     <html lang="es">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Trabajadores</title>
         <link rel="stylesheet" href="../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../include/css/estilosGLobal.css">
    <link rel="stylesheet" href="../../include/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
     </head>
     <body>

     <?php
       session_start();

       $json[]= $_SESSION['User'];
       //$json_string =json_encode($json);
       
    ?>
<input type="hidden"  id="idR" name="idR" value="<?=$json[0]['Id_rest'] ?>">
        <!-- Modal -->
        <div class="modal fade" id="ModalT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Nuevo Trabajador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="frmTrab">
                    <div class="form-group">
                        <label for="txtNombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="txtNombre" required>
                    </div>
                    <div class="form-group">
                        <label for="txtNombre">Sueldo Trabajador</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Q</span>
                            </div>
                            <input type="number" class="form-control" id="txtSueldo">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtTipo">Tipo de Trabajador</label>
                        <select class="form-control" id="txtTipo">                    
                        
                        </select>
                    </div>
                
                    <button class="btn btn-block btn-outline-dark" type="submit" data-toggle="modal" data-target="#ModalT"><i class="far fa-save"></i> Guardar </button>
                </form>
            </div>
            
            </div>
        </div>
        </div>
        <!-- Modal -->



     <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <a href="../Inicio/" class="btn  btn-danger ml-2"><i class="fas fa-arrow-left"></i> Volver</a>
                <a  class="btn Nuevo  btn-info ml-2" data-toggle="modal" data-target="#ModalT"><i class="fas fa-arrow-left" ></i> Nuevo Trabajador</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h2 class="titulo">Trabajadores</h2>
                    
                </div>
            </nav>
     <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card card-signin my-3 ">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Sueldo</th>
                                <th scope="col">Area</th>
                                <th scope="col">Operaciones</th>

                                </tr>
                            </thead>
                            <tbody id="Trab">
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            
        </div>
     </div>






     <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>   
    <script src="../../include/js/all.js"></script>
    <script src="js/main.js"></script>  
     </body>
     </html>


