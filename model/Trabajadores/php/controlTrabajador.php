<?php
session_start();
    date_default_timezone_set('America/Guatemala');
    $fecha=date('Y-m-d');

    //Creamos variables para almacenar los datos 
    $json= array();
    $json_string = 'ERROR';

    if(!empty($_POST['Valor']))// Evalumos el valor en POST que si exista para poder continuar
    {
        $valor=$_POST['Valor'];
        require 'daoTrabajador.php';//Elazamos nuestro controlador
        $ob=new DaoTrabajador();

        if($valor=="Tipo")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $idR=$_POST['idR'];                 
            $r1=$ob->tipoTra($idR);/// Llamamos  la funcion encargada
            while($row=mysqli_fetch_array($r1)){
                $json[]=$row;             
            }            
            $json_string =json_encode($json);//Covertimos los datos obtenidos en un JSON
            
        }

        if($valor=="Add")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $idT=$_POST['txtTipo'];       
            $nombre=$_POST['txtNombre'];   
            $sueldo=$_POST['txtSueldo'];             
            $r1=$ob->addTra($nombre,$sueldo,$idT);/// Llamamos  la funcion encargada
                      
            $json_string ='Correcto';
            //Covertimos los datos obtenidos en un JSON
            
        }

        if($valor=="Buscar")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $idR=$_POST['idR'];                 
            $r1=$ob->buscarTrab($idR);/// Llamamos  la funcion encargada
            while($row=mysqli_fetch_array($r1)){
                $json[]=$row;             
            }            
            $json_string =json_encode($json);//Covertimos los datos obtenidos en un JSON
            
        }

        

        if($valor=="Eliminar")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $idT=$_POST['idT'];                 
           $ob->elimiTrab($idT);/// Llamamos  la funcion encargada
                       
            $json_string ='Eliminar';//Covertimos los datos obtenidos en un JSON
            //Covertimos los datos obtenidos en un JSON
            
        }
    } 
    echo $json_string;  //Respondemos los datos obtenidos 
?>
