<script>
function
  var totalInicial=0;
  function enElCarrito(form)
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