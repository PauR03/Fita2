<?php

    $quantity = $_POST['quantitat'];

    for ($i = 0; $i < $quantity; $i++){
        echo "<a href='ex11pagina3.php?number=".$i."'>Comanda ".$i."</a><br>";
    }
?>