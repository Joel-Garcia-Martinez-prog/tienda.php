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
        <h1>View</h1>
        <a href="index.php">Productos</a>

        <form>
            <?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos where id_producto='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row["producto"];
        $precio = $row["precio"];
        $existencias = $row["existencias"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>ID</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='Id persona' value='$id_producto'>
        </div>
        <br>
        <div class='form-group'>
            <label for='producto'>producto</label>
            <input type='text' readonly class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <br>
        <div class='form-group'>
            <label for='precio'>Precio</label>
            <input type='text' readonly  class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <br>
        <div class='form-group'>
            <label for='existencias'>existencias</label>
            <input type='text' readonly class='form-control' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
        </div>
        ";

    print($form);
?>
        </form>

    </div>
</body>

</html>