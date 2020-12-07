<!DOCTYPE html>
<html>
<head>
  <title>Index JGM</title>
  <?php echo '<p>Bienvenido</p>'; ?>
  <link rel="stylesheet" href="tienda.css">
  <script src="carrito.js" language="javascript" type="text/javascript">
  </script>
</head>

<body>
  <div class="container is-fullhd"></div>
  <div class="notification is-primary"></div>
  <div class="is-family-sans-serif"></div>
  ~Hola, bienvenido a la tienda de Joel! 
  <div class="container"></div>
  <div class="colums"></div>
  <div class="colums is-4"></div>
  <h1 class="title is-1">Productos</h1>
  <a href="index.php">Regresar</a>
  <a href="insert.php">Insertar</a>
  <?php 
  include 'index_view.php'; 
  ?>
  <?php
$idx = new SQLite3("tienda.db");
$total = $idx->query("SELECT * from Productos;");
$table ="
<table class='table'>
<thead>
  <tr>
  <th>id_Producto</th>
  <th>Producto</th>
  <th>Precio</th>
  <th>Existencias</th>
  <th>View</th>
  <th>Update</th>
  <th>Delete</th>
  </tr>
</thead>
          ";
  print($table);
  while ($row = $total->fetchArray()) { 
  $id_Producto = $row['id_Producto'];
  $Producto = $row['Producto'];
  $Precio = $row['Precio'];
  $Existencias = $row ['Existencias'];
  $table ="
<tr>
  <td>$id_Producto</td>
  <td>$Producto</td>
  <td>$Precio</td>
  <td>$Existencias</td>
  <td><a$id_Producto>View</a></td>
  <td><a$id_Producto>Update</a></td>
  <td><a$id_Producto>Delete</a></td>
</tr>
        ";
print($table);
    }
print("</table>");
  ?>
</body>
</html>