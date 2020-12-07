<!DOCTYPE html>
<html>
<head>
  <title>View JGM</title>
  <?php echo '<p>Bienvenido</p>'; ?>
  <link rel="stylesheet" href="tienda.css">
  <script src="carrito.js" language="javascript" type="text/javascript">
  </script>
</head>

<body>
 <?php
    $id_Producto = $_GET["id_Producto"];
    $view = new SQLite3("tienda.db");
    $total = $view->query("SELECT * from Productos where id_Producto='$id_Producto';");
    while ($row = $total->fetchArray()) {
        $id_Producto = $row["id_Producto"];
        $Producto = $row["Producto"];
        $Precio = $row["Precio"];
        $Existencias = $row['Existencias'];
    }
    $form ="
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>ID</label>
                    <div class='control'>
                        <input type='text' readonly class='input is-primary' id='id_producto' name='id_producto' aria-describedby='Id producto' value='$id_Producto'>
                    </div>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Producto</label>
                    <input type='text' class='input is-primary' id='producto' name='producto' aria-describedby='producto' value='$Producto'>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Precio</label>
                    <input type='text' class='input is-primary' id='precio' name='precio' aria-describedby='precio' value='$precio'>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='colums'>
                <div class='colums is-4'>
                    <label class='label'>Existencias</label>
                    <input type='text' class='input is-primary' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
                </div>
            </div>
        </div>
    ";
    print($form);
 ?>
    <div class="container">
        <div class="colums">
            <div class="colums is-4">
                <h1 class="title is-1">View</h1>
                <a href="index.php">Productos</a>
                <form>
                    <?php include 'view.php'; ?>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>