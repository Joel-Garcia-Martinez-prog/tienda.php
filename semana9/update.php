<!DOCTYPE html>
<html>
<head>
  <title>Update JGM</title>
  <?php echo '<p>Bienvenido</p>'; ?>
  <link rel="stylesheet" href="tienda.css">
  <script src="carrito.js" language="javascript" type="text/javascript">
  </script>
</head>

<body>
    <div class="container">
        <div class="colums"> 
            <div class="colums is-4">
                <h1 class="title is-1">Update</h1>
                <a href="index.php">Productos</a>
                <form action='update.php' method='GET'>
                    <?php include 'view_datos.php'; ?>
                    <button type='submit' class='button is-primary'>Update</button>
                </form>
            </div>
        </div>
    </div>
<?php

    $id_Producto = $_GET['Producto'];
    $Producto = $_GET['Producto'];
    $Precio = $_GET['Precio'];
    $Existencias = $_GET['Existencias'];
    $Actualizar = new SQLite3('tienda.db');
    $Actualizar->exec("UPDATE Productos SET Precio='$Precio', Producuto='$Producto', Existencias='$Existencias' WHERE id_Producto='$id_Producto';");
    header("Location: index.php");
?>
</body>
</html>