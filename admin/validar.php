<?php
include('db.php');

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","proto1");

$consulta="SELECT*FROM usuario where username='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.php");

}else{
    ?>
    <?php
    include("l1.php");

  ?>
  <h1 class="bad">Error de autentificación</h1>
  <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);