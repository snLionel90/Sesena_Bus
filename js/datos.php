<?php
    
    $hostname='localhost';
    $database='comentarios';
    $username='root';
    $password='';

    $conexion=new mysqli($hostname,$username,$password,$database)or die ("No es posible conectarse al servidor de Base de datos");

    $db = mysqli_select_db( $conexion, $database ) or die ( "Upps! Parece ser que no es posible conectarse a la base de datos" );

    //recovert tejklbsdlbjkñsdbj
    if (isset($_POST["nombre"],
    $_POST["apellido"],
    $_POST["comentario"])and
    $_POST["nombre"]!="" and
    $_POST["apellido"]!="" and
    $_POST["comentario"]!="" ){

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $comentario = $_POST["comentario"];
    
    //sentence sql
    $sql = "INSERT INTO usuarios (id,nombre,apellido,comentario) VALUES ('0','$nombre','$apellido','$comentario')";

    }else{
        echo '<p>Porfabor completa el formulario</p>';
    }

    if(mysql_query($sql)){
        echo "<p>Comentario enviado correctamente</p>";
    }else{
        echo "<p>Error al enviar el comentario..</p>";
    }
    
?>