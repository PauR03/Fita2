<?php

    echo "<p>PROCESSA CONTACTES</p>";

    $documentoContactos = file_get_contents("contactes.txt");

    $cadena = "";
    for($i=0;$i<strlen($documentoContactos);$i++){
        $salto = "";
        if($documentoContactos[$i] == "\n"){
            $salto = "<br>";
        }
        $cadena .= $documentoContactos[$i].$salto;
    }
    echo $cadena;

    $contactosb = fopen("contactesb.txt","w")

?>