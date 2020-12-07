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

<form action="ticket.php" method="GET">

~Seleccione sus productos <br>
<div class="select is-rounded" name="snacks"> 
      <select id="snacks">
        <option id="Frasco de mermelada" value = "25">Frasco de mermelada $25.00</option>
        <option id="Carton de leche" value = "15">Carton de leche $15.00</option>
        <option id="Paquete de galletas" value = "18">Paquete de galletas $18.00</option>
        <option id="Bolsa de papas" value = "10">Bolsa de papas $10.00</option>
        <option id="Barra de chocolate" value = "10">Barra de chocolate $10.00</option>
        <option id="Paleta" value = "3">Paleta $3.00</option>
        <option id="Bolsa de malvaviscos" value = "17">Bolsa de malvaviscos $17.00</option>
        <option id="Pay de nuez" value = "22">Pay de nuez $22.00</option>
      </select>
    </div>
  </div>
</div>                      

<br>
<div>
<input class="input is-rounded" type="number" placeholder="Ingrese la cantidad" id="cantidad" name="cantidad" min="0" max="10">
</div>
<br>

<br>
<div>
<input class="input is-rounded" type="number" placeholder="Ingrese dinero" id="pago" name="pago">
</div>
<br>

<div>
<button onclick="enElCarrito(form)" id="agregarCarrito" value="agregarCarrito" class="button is-info is-rounded">Agregar al carrito</button>
</div> 
<br>

<div class="field">
  <div class="control">
    <textarea class="textarea is-info" name="carrito" placeholder="Carrito de compras" id="carrito" ></textarea>
  </div>
</div>

<div class="control">
  <input class="input" type="text" id="totalapagar" value="Total a pagar" name="total" readonly>
</div>
<br>
<div>
<button class="button is-info is-rounded" id="nuevaCompra" value="nuevaCompra" onclick="location.reload()">Nueva compra</button>
</div>
<br>
<div>
<button type="submit" onclick="ticket.php" name="enviar" value="enviar" class="button is-info is-rounded">Pague aqui</button>
</div> 
<br> 
  
</form>
<script type="text/javascript">
  var totalInicial=0;
  function enElCarrito(form){
    var productoSeleccionado = document.getElementById('snacks');
		var valor1 = productoSeleccionado.options[productoSeleccionado.selectedIndex].text;
		var valor2 = productoSeleccionado.options[productoSeleccionado.selectedIndex].value;
		var productos = document.getElementById('cantidad').value;
		var valor3 = parseFloat(productos);
		var valor4 = parseFloat(valor2);
		var cuentatotal = valor3*valor4;
		total = totalInicial + cuentatotal; 
		document.getElementById('carrito').value += "Numero de snacks: "+ productos +"\tSnack: "+valor1+"\tTotal: "+ " $"+ total + "\n";
    document.getElementById('totalapagar').value=total;
    
  }
</script>
</div>
</body>
</html>