<?php

        require '../../../include/php/Conexion.php';/// Incluinos la calse de conexion

        class DaoAreas extends Conexion
        {
            function __construct()
            {
                parent::__construct();
                
            }

            //Buscar la list de areas
            function buscarAreas($idR){
                $res=$this->con->query("SELECT * from tbl_areas tus,tbl_rest tr where tr.rest_id='$idR' ");
                
                return $res;  
            }

            // Ingresar Nueva area 
            function addArea($Nombre,$idR){
                $res=$this->con->query("INSERT INTO tbl_areas(are_nombre,rest_id) VALUES('$Nombre',$idR)" );
                
                return $res;  
            }

        }
       
   ?>