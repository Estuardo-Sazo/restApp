<?php
session_start();

$json[]= $_SESSION['User'];
//$json_string =json_encode($json);


$idM=$_GET['idM'];
$idR=$json[0]['Id_rest'];

require 'daoFactura.php';
$ob=new DaoFactura();
$est='';
$idNew=0;

$r2=$ob->EstadoMesa($idM);
    $a2=array();
    if($row=mysqli_fetch_array($r2)){
       $est=$row['mesa_estado'];
        
    } 
    
    if($est!='1'){
        $r1=$ob->BuscarUltF($idR);
        $a1=array();
        if($row=mysqli_fetch_array($r1)){
            $idNew=$row['fac_id'];
            
            
        }    
        if ($idNew==0) {
            $idNew=1001;
        }else{
            $idNew=1 + $idNew;
        }
        
         
        //echo('IdN: '.$idNew); 

        /*$ob->ReservarMesa($idNew,$id_mesa);

        header("Location:../Facturas/ver-factura.php?fac=$idNew");*/


     ?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Selecione Mesero</title>
         <link rel="stylesheet" href="../../../include/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../include/css/estilosGLobal.css">
    <link rel="stylesheet" href="../css/estilos.css">
     </head>
     <body>
     <nav class="navbar  navbar-expand-lg navbar-light bg-light ">
                <a href="../../Inicio/" class="btn  btn-danger ml-2"><i class="fas fa-arrow-left"></i> Volver</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                
                    <h2 class="titulo">Seleccione un mesero </h2>
                    
                </div>
            </nav>
     <h1>Debes seleccionar un mesero</h1>






     <!-- Librerias script que se utilizaran -->
    <script src="../../../include/js/jquery3.5.min.js"></script>
    <script src="../../../include/js/bootstrap.min.js"></script>    
     </body>
     </html>




     <?php  



    }else{
       /* header('Location:../'); */
    }   




?>