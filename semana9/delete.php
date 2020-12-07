<!DOCTYPE html>
<html>
<head>
  <title>Delete JGM</title>
  <?php echo '<p>Bienvenido</p>'; ?>
  <link rel="stylesheet" href="tienda.css">
  <script src="carrito.js" language="javascript" type="text/javascript">
  </script>
</head>

<body>
 <div class="container"></div>
 <div class="colums"></div>
 <div class="colums is-4"></div>
 <h1 class="title is-1">Borrar</h1>
 <a href="index.php">snacks</a>
 <form action='delete.php' method='GET'>
     <?php include 'view.php'; 
     ?>
     <button type='submit' class='button is-primary'>Borrar</button>
 </form>

 <?php
 $id_Producto = $_GET["id_Producto"];
 $borrar = new SQLite3("tienda.db");
 $borrar->exec("DELETE FROM Productos where id_Producto='$id_Producto';");
 header("Location: index.php");
 ?>
</body>
</html>