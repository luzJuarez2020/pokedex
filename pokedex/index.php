<?php
require("headerIndex.php");
$servername = "localhost";
$username = "root";
$password = "";
$database = "pokemones";
$port = "3307";
$conectar = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from pokemon order by numero ";
$resultado = $conectar->query($sql);
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:40px">


    <div class="w3-container">
        <form action="mostrarPokemon.php" method="post">
            <input class="w3-input w3-border" type="text" name="busqueda" id="busqueda"
                   placeholder="Ingrese el nombre, tipo o numero de pokemon" size=100 maxlength=80>
            <button type="submit" class="button">Quien es este pokemon</button>
        </form>
    </div>

    <?php /*
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pokemones";
    $port = "3307";
    $conectar = new mysqli($servername, $username, $password, $database, $port);
   $sql = "select * from pokemon";

   $result = $conectar->query($sql);
   if ($result->num_rows > 0) {
       while($fila = $result->fetch_assoc()) {
           echo "Numero: " . $fila["numero"]. " - Nombre: " . $fila["nombre"]. " - Tipo: " . $fila["tipo"]. "<br>";
           $link=$fila["imagenLink"];
           echo "<img src='$link'>";
       }
   }
   $conectar->close();*/
    ?>


    <table class="w3-table  w3-centered w3-border-red" style="margin-top: 15px">
        <thead>
        <tr>
            <th class=" w3-border w3-border-red">Imagen</th>
            <th class=" w3-border w3-border-red">Tipo</th>
            <th class=" w3-border w3-border-red">Numero</th>
            <th class=" w3-border w3-border-red">Nombre</th>
            <th class=" w3-border w3-border-red">Habilidad</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($filas = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <td class=" w3-border w3-border-red">
                    <?php
                    $link = $filas['imagenLink'];
                    $nombre=$filas['nombre'];
                    echo "<a style='text-decoration: none' href='cadaPokemon.php?nombre=$nombre'><img src='$link' style='width: 65px'></a>";?>
                </td>
                <td class=" w3-border w3-border-red">
                    <?php
                    $dir = "./logos";
                    if (is_dir($dir)) {
                        $log = scandir($dir);
                        for ($i = 0; $i < count($log); $i++) {
                            $nombreLog = $filas['tipo'] . ".png";
                            if ($nombreLog == $log[$i]) {
                                echo "<img src='$dir/$nombreLog' style='width: 65px'>";
                            }
                        }
                    } ?>
                </td>
                <td class=" w3-border w3-border-red" style="font-size: 30px; font-weight: bold">
                    <?php
                    $numero=$filas['numero'];
                    $nombre=$filas['nombre'];
                    echo "<a style='text-decoration: none' href='cadaPokemon.php?nombre=$nombre'>$numero</a>"; ?>
                </td>
                <td class=" w3-border w3-border-red" style="font-size: 30px; font-weight: bold ">
                    <?php
                    $var=$filas['nombre'];
                    echo "<a style='text-decoration: none' href='cadaPokemon.php?nombre=$var'>$var</a>";

                    ?>
                </td>
                <td class=" w3-border w3-border-red" style="font-size: 20px; font-weight: bold ">
                    <?php
                    $habilidad=$filas['habilidad'];
                    $nombre=$filas['nombre'];
                    echo "<a style='text-decoration: none' href='cadaPokemon.php?nombre=$nombre'>$habilidad</a>";?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <br><br>
    <!-- Footer -->
    <?php
    require("footer.php");
    ?>








