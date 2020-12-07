<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>producto</th>
                <th>Precio</th>
                <th>Existencias</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_producto = $row['id_producto'];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $existencias = $row['existencias'];

        $table = "
            <tr>
                <td>$id_producto</td>
                <td>$producto</td>
                <td>$precio</td>
                <td>$existencias</td>
                <td><a href='view.php?id_producto=$id_producto'>View</a></td>
                <td><a href='update.php?id_producto=$id_producto'>Update</a></td>
                <td><a href='delete.php?id_producto=$id_producto'>Delete</a></td>
            </tr>
        ";

        print($table);


/*
        //Forma 2 para mostrar los datos
        print("<tr>");
        print("<td>".$row['id_producto']."</td>");
        print("<td>".$row['producto']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='view.php?id_producto=".$row['id_producto']."'>View</a></td>");
        print("<td><a href='update.php?id_producto=".$row['id_producto']."'>Update</a></td>");
        print("<td><a href='delete.php?id_producto=".$row['id_producto']."'>Delete</a></td>");
        print("</tr>");
        */
    }
 
    print("</table>");
?>