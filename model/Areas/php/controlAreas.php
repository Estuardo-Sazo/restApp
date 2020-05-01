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
        require 'daoAreas.php';//Elazamos nuestro controlador
        $ob=new DaoAreas();

        if($valor=="Areas")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $idR=$_POST['idR'];                 
            $r1=$ob->buscarAreas($idR);/// Llamamos  la funcion encargada
            while($row=mysqli_fetch_array($r1)){
                $json[]=$row;             
            }            
            $json_string =json_encode($json);//Covertimos los datos obtenidos en un JSON
            
        }

        /// Funcion para poser resgistrar un Area
        if($valor=="Add")
        {
            /// Agregamos las demas variables que vien
            $idR=$_POST['idR']; 
            $nombre=$_POST['Nombre']  ;              
            $r1=$ob->addArea($nombre,$idR);/// Llamamos  la funcion encargada
            while($row=mysqli_fetch_array($r1)){
                $json[]=$row;             
            }            
            $json_string =json_encode($json);//Covertimos los datos obtenidos en un JSON
            
        }
        
    } 
    echo $json_string;  //Respondemos los datos obtenidos 
?>