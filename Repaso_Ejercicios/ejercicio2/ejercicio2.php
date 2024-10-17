<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2. Juego del dado más alto</title>
</head>
<body>
    <?php 
        $jugador1= mt_rand(1,6);
        echo "JUGADOR 1:";
        echo "<br>";
        echo '<img src="../img/'.$jugador1.'.svg" alt="">';
        echo "<br><br>";
        echo "JUGADOR 2:";
        echo "<br>";
        $jugador2 = mt_rand(1, 6);
        echo '<img src="../img/'.$jugador2.'.svg" alt="">';
        echo "<br>";

        if ($jugador1 > $jugador2){
            echo "Gana jugador 1.";
        }else if ($jugador1 < $jugador2){
            echo "Gana jugador 2.";
        }else{
            echo "Los jugadores han quedado empate.";
        }

    ?>
</body>
</html>