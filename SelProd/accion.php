<?php
    
    $venta = "";
    foreach(array_keys($_POST) as $a){
        if($a == "user"){
            $venta .= "$_POST[$a]:";
        }else{
            $venta .= "$a,";
        }
        
    }
    echo substr($venta,0,strlen($venta)-1);

    $file = fopen("ventas.txt","a");
    fwrite($file,substr($venta,0,strlen($venta)-1));
    fclose($file);
?>