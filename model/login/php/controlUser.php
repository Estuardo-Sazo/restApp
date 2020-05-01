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
        require 'daoUser.php';//Elazamos nuestro controlador
        $ob=new DaoUser();

        if($valor=="login")/// Evaluamos el dato que trae la variable $Valor 
        {
            /// Agregamos las demas variables que vien
            $user=$_POST['User'];        
            $pwd=$_POST['PWD']; 
            
            $r1=$ob->login($user,$pwd);/// Llamamos  la funcion encargada
            if($row=mysqli_fetch_array($r1)){
                $json[]=$row;
                $data = array('Id_rest'=>$row['rest_id'],'Rest'=>$row['rest_nombre'], 'Id_user'=>$row['usu_id'],'Nombre'=>$row['usu_nombre'].' '.$row['usu_apellido']);
                
                $_SESSION['User']=$data;
              
            }
            
            $json_string =json_encode($json);//Covertimos los datos obtenidos en un JSON
            
        }
        
    } 
    echo $json_string;  //Respondemos los datos obtenidos 
?>