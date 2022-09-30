<?php
$users = [
    0 => ["user"=>"pepe","password"=>"pepe123"],
    1 => ["user"=>"Pau","password"=>"PauR123"],
    2 => ["user"=>"Pau2","password"=>"simplementepau2"]
];
$usuario = $_POST["user"];
$contrasena = $_POST["pswd"];

foreach($users as $user){
    if($usuario == $user["user"] && $contrasena == $user["password"]){
        $salida = "<p>Bienvenido $usuario</p>";
        break;
    }
    else{
        $salida = "<p>El usuario $usuario no esta registrado</p>";
    }

}
echo $salida;
?>