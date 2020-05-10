<?php
    require '../../../include/php/Conexion.php';

    class DaoFactura extends Conexion
    {
         function __construct()
         {
             parent::__construct();
         }

         function BuscarUltF($idR)
         {
            $res=$this->con->query("SELECT fac_id  FROM tbl_facturas WHERE rest_id='$idR' ORDER BY fac_id DESC LIMIT 1");
            
            return $res;  
         }
         function EstadoMesa($idM)
         {
            $para=$this->con->query("SELECT mesa_estado from tbl_mesas where mesa_id='$idM'");
           
            return $para;  
         }
 
         function ReservarMesa($id,$mesa)
         {
             
         }

         
        }    


   ?>