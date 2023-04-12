<?php
    include_once 'medel/function.php';
    $obj_name = new  mobile ();
    $rs2 = $obj_name-> getting ();
    foreach($rs2 as $rs){
        include "./view/show.php";
    }
    
?>