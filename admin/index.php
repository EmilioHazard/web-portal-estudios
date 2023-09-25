<?php 
session_start();
if(!isset($_SESSION['usuario'])){

   
    echo' <meta http-eqiv="refresh" content="5;
    url=index.php"/>';
    die(" tu no deberias estar aqui");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboar</title>
    <link rel="stylesheet" href="estilos2.css">
</head >
<body id="container">
    <nav class="menu" >
    <ul>
   <li><a href="">Categorias</a></li>
   <li><a href="">Comentarios </a></li>
 
    </ul>        
        
    </nav >
     <main class="ent">
     <table>
        <tr>
       <th>id</th>
       <th>titulo</th>
       <th>autor</th>
       <th>texto</th>
       <th>img</th>
       <th>categoria</th>


        </tr>
    <?php 
   $basededatos = new  mysqli ('localhost','root','','proto1' );
    $basededatos ->set_charset("utf8");
    $resultado = $basededatos -> query ("SELECT articulos.id AS idtotal,titulo,autor,texto,img,categoria FROM articulos 
    
     
"
);
    while($fila =mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    echo '
   
           <tr>
           <td>' .$fila['idtotal'].'</td>
           <td>' .$fila['titulo'].'</td>
           <td>' .$fila['autor'].'</td>
           <td>' .$fila['texto'].'</td>
           <td>' .$fila['img'].'</td>
           <td>' .$fila['categoria'].'</td>
           <td><a href="borrar.php?id='.$fila['idtotal'].'"><button>Borrar</button></a></td>
           </tr>
           
    
    ';
    
    }
    ?>
<tr>
    <form action="anadir.php" method="POST" enctype="multipart/form-data">
    <td></td>  
    
    <td> <input type="file" name ="titulo" required></td>
    <td> <input type="text" name ="autor"required></td>
    <td> <textarea name="texto"> </textarea required></td>
    <td> <input accept="image/*" type="file" name ="img" required></td>
    <td> <input type="text" name="categoria"required></td>
   

    <td><input type="submit" ></td>


    </form>
</tr>
    
    </table>
     </main>    
</body>
</html>