<!DOCTYPE html>
<html>
	<head>
		<title>Tienda JGM</title>
        <?php echo '<p></p>'; ?>
    <link rel="stylesheet" href="tienda.css">
    <script src="carrito.js" language="javascript" type="text/javascript">
    </script>
  </head>
<body>

<div class="container is-fullhd">
  <div class="notification is-primary">
    <div class="is-family-sans-serif">
    Hola, bienvenido a la tienda de Joel! 
    </div>
  </div>
</div>

    <div class="container-fluid">
        <h1>Productos</h1>
        <a href="../index.php">Regresar</a>
        <a href="insert.php">Insert</a>
        
        <?php include 'db/db_list.php'; ?>
    </div>
</body>

</html>