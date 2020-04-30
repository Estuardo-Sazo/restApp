<?php
    date_default_timezone_set('America/Guatemala');
    $fecha=date('Y-m-d');

    $json= array();
    $json_string = 'ERROR';

    if(!empty($_POST['Valor']))
    {
        $valor=$_POST['Valor'];
        require 'daoUser.php';
        $ob=new DaoUser();

        if($valor=="login")
        {
            $user=$_POST['User'];        
            $pwd=$_POST['PWD']; 
            
            $r1=$ob->login($user,$pwd);
            while($row=mysqli_fetch_array($r1)){
                 
             
                $json[]=$row;
            }
            $json_string =json_encode($json);
          
        }
        
    } 
    echo $json_string;   
?>