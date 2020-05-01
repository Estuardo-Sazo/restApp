<?php

        require '../../../include/php/Conexion.php';/// Incluinos la calse de conexion

        class DaoUser extends Conexion
        {
            function __construct()
            {
                parent::__construct();
                
            }

            //Funcion en cargada de evaluar los datos de inicio de sesion
            function Login($user,$pwd){
                $res=$this->con->query("SELECT tus.rest_id, tr.rest_nombre ,tus.usu_id,tus.usu_nombre,tus.usu_apellido from tbl_usuarios tus,tbl_rest tr where tr.rest_id=tus.rest_id AND tus.usu_user='$user' AND tus.usu_pwd='$pwd'");
                
                return $res;  
            }

        }
       
   ?>