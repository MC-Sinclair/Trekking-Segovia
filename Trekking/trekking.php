<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <form action="" method="post">
        <h2>TREKKING SEGOVIA</h2>
            <label for="">Trayecto</label>
            <input type="text" name="trayecto" placeholder="La Granja-Segovia" class="more" required>
            <label for="">Duracion</label>
            <input type="number" name="duracion" class="more" placeholder="2" min=0 required>
            <label for="">Fecha de salida</label>
            <input type="datetime-local" name="fecha" id="" class="more" required>
        <input type="submit" value="enviar" name="enviar" id="enviar">
    </form>
    <?php
        $destinos_array = file_exists("destinos.txt") ? file("destinos.txt") : [];
        if (isset($_POST['enviar'])) {
            $trayecto=$_POST['trayecto'];
            $duracion = $_POST['duracion'];
            $fecha= $_POST['fecha'];
            $cadena=$trayecto."/".$duracion."/".$fecha."\n";
            $fichero=fopen("destinos.txt",'a');
            fwrite($fichero,$cadena);
            fclose($fichero);
            $destinos_array = file("destinos.txt");
        }
    ?>
    <table>
        <tr>
            <th>Trayecto</th>
            <th>Duracion</th>
            <th>fecha de salida</th>
        </tr>
        <?php
            if ($destinos_array) {
                foreach ($destinos_array as $linea) {
                    // La función explode() divide la línea en un array usando el separador '/'
                    $datos = explode('/', trim($linea));
                    if (count($datos) === 3) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($datos[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($datos[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($datos[2]) . "</td>";
                        echo "</tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='3'>No hay destinos registrados.</td></tr>";
            }
            ?>
    </table>
</body>
</html>