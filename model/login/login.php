<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .abs-center {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                }
               
    </style>
</head>
<body>
    <div class="container">
    <div class="row abs-center">
        <div class="col-md-4">
        <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center">Inicio de Sesión</h5>
                <form class="form-signin" id="frmLogin">
                <div class="form-label-group">
                    <input type="text" id="txtUser" class="form-control" placeholder="Ingrese tu usuario" required autofocus>
                    <label for="txtUser">Ingrese tu usuario</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="txtPass" class="form-control" placeholder="Password" required>
                    <label for="txtPass">Contraseña</label>
                </div>

                <hr>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
                <hr class="my-4">
                
                </form>
            </div>
            </div>
            
        </div>
        <div class="col-md-6">
            <h1 align="center" class="text-white">Bienvenido a RestAPP</h1>
            <h1 align="center" class="text-white" id="Nombre"></h1>
        </div>
    </div>
    </div>

    <!-- Librerias script que se utilizaran -->
    <script src="../../include/js/jquery3.5.min.js"></script>
    <script src="../../include/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>