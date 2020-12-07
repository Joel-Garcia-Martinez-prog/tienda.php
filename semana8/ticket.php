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
    Aqui esta su ticket, vuelva pronto :D! 
  </div>
</div>

<?php
    
    print("<h1>Joel's supermarket ~ <?h1>");
    $time = time();
    echo date("d-m-Y (H:i:s)", $time);
?>
<br>  
<?php
    $carrito= $_GET["carrito"];
    print($carrito);   
?>
<br>
<?php
    $cantidad= $_GET["cantidad"];
    $snacks= $_GET["snacks"];
    $totalS= $cantidad * $snacks;
    $pago= $_GET["pago"];
    $cambio= $pago - $totalS;
    print("Cantidad recibida: ".$pago);
?>
<br>
<?php
    print("Cantidad Devuelta: ".$cambio);   
?>
  </div>