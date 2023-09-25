<?php 


$basededatos = new  mysqli ('localhost','root','','proto1' );
$basededatos ->set_charset("utf8");
$resultado = $basededatos -> query("DELETE FROM articulos WHERE id='".$_GET['id']."'

");




echo '<meta http-equiv="refresh" content="0;
url=index.php" />';

  ?>