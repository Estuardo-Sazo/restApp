<?php

        require '../../../include/php/Conexion.php';/// Incluinos la calse de conexion

        class DaoInicio extends Conexion
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

            // Bucasr Mesas de las areas
            function buscarMesas($idR,$idA){
                $res=$this->con->query("SELECT * FROM tbl_mesas WHERE rest_id=$idR AND area_id=$idA ");
                
                return $res;  
            }
        }
        
        
 ?>       
