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
        <h1>Insert</h1>
        <a href="index.php">Lista de personas</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="producto">Productos</label>
                <input type="text" class="form-control" id="producto" name="producto" aria-describedby="producto" placeholder="Ingresa el producto">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio" placeholder="Ingresa el primer precio">
            </div>
            <div class="form-group">
                <label for="existencias">Existencias</label>
                <input type="number" class="form-control" id="existencias" name="existencias" aria-describedby="existencias" placeholder="Ingresa la existencia">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>
</html>