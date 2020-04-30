<?php

        require '../../../include/php/Conexion.php';

        class DaoUser extends Conexion
        {
            function __construct()
            {
                parent::__construct();
                
            }

            function Login($user,$pwd){
                $res=$this->con->query("SELECT * from tbl_usuarios where usu_user='$user' AND usu_pwd='$pwd'");
            
                return $res;  
            }

        }
       
   ?>        