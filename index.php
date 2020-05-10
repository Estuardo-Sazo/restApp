<?php
       session_start();

       if(isset($_SESSION['User'])){
        $json[]= $_SESSION['User'];
        //$json_string =json_encode($json);
       }
       
       
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest APP</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/css/animate.css">

    <style>
        .abs-center {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                }
       body {
          background: #007bff;
          background: linear-gradient(to right, #0062E6, #33AEFF);
        }
               
    </style>
</head>
<body>


<div class="container">
  <div class="abs-center">
    <h1 class=" animated pulse  delay-2s text-white   ">RestAPP</h1>
  </div>
</div>
<input type="hidden"  id="idR" name="idR" value="<?=$json[0]['Id_rest'] ?>">

    <!-- Librerias script que se utilizaran -->
    <script src="include/js/jquery3.5.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script>
     $(document).ready(function() {
        setInterval(() => {
          var url = "";    

          if($('#idR').val()>0){
            url = "model/Inicio";  
          }else{
            url = "model/login/login.php";  
          }
          $(location).attr('href',url)
        }, 3000);
      });
    </script>
</body>
</html>