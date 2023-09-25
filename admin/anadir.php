<?php 


$basededatos = new  mysqli ('localhost','root','','proto1' );
$basededatos ->set_charset("utf8");
$resultado = $basededatos -> query("INSERT INTO articulos VALUES(
    NULL,
'".$_FILES['titulo']['name']."',
'".$_POST['autor']."',
'".$_POST['texto']."',
'".$_FILES['img']['name']."',
'".$_POST['categoria']."'
)");


move_uploaded_file($_FILES['img']['tmp_name'],"../photo/".
$_FILES['img']['name']);
move_uploaded_file($_FILES['titulo']['tmp_name'],"../archivos/".
$_FILES['titulo']['name']);

echo '<meta http-equiv="refresh" content="0;
url=index.php" />';

  ?>
 
