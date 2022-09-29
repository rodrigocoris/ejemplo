<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="formularioejemplo";


$con =mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$con){
    die("Error " . mysqli_connect_error());
}else{
    echo "conectado..";
}


//Usuario
//iformacion

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];

//Consulta

$inser = "INSERT INTO usuario(id, nombre, email, telefono, sexo)
    values ('0', '$nombre','$email','$telefono','$sexo')";

    $ir=mysqli_query($con,$inser);

    if($ir){
        echo "se ha registrado con exito";

    }else{

        echo "hay un error";
    }



    mysqli_close($con)
?>