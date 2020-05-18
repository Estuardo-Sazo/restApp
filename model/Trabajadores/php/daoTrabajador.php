<?php
    require '../../../include/php/Conexion.php';

    class DaoTrabajador extends Conexion
    {
         function __construct()
         {
             parent::__construct();
         }

         function tipoTra($idR)
         {
            $res=$this->con->query("SELECT *  FROM tbl_tipo_tra WHERE rest_id='$idR' ");
            
            return $res;  
         }

         function addTra($nombre,$pago,$idT)
         {
            $res=$this->con->query("INSERT INTO tbl_trabajadores(trab_nombre,trab_pago,tptra_id) VALUES ('$nombre',$pago,$idT)");
            
            return $res;  
         }

         function actualizarTrab($id,$nombre,$pago,$idT)
         {
            $res=$this->con->query("UPDATE tbl_trabajadores SET trab_nombre='$nombre',trab_pago=$pago,tptra_id=$idT WHERE trab_id=$id");
            
            return $res;  
         }

         function buscarTrab($idR)
         {
            $res=$this->con->query("SELECT tb.trab_id,tb.trab_nombre,tb.trab_pago,tp.tb_trabajo FROM tbl_trabajadores tb ,tbl_tipo_tra tp WHERE tp.rest_id='$idR' AND  tp.tb_id=tb.tptra_id");
            
            return $res;  
         }

         function buscarTrab2($idT)
         {
            $res=$this->con->query("SELECT * FROM tbl_trabajadores  WHERE trab_id=$idT");
            
            return $res;  
         }

         function elimiTrab($idT)
         {
            $res=$this->con->query("DELETE FROM tbl_trabajadores  WHERE trab_id=$idT ");
            
            return $res;  
         }
         

    }       


   ?>