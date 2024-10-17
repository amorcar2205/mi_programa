<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
        $numeroTiradas = mt_rand(1, 10);
        $numeroPar=0;
        $numeroImpar=0;
        echo "numero de tiradas: $numeroTiradas";
        echo "<br><br>";

        for ($i=0; $i<$numeroTiradas; $i++){
            $numeroDado = mt_rand(1, 6);
            echo '<img src="../img/'.$numeroDado.'.svg" alt="">';

            if ($numeroDado % 2 == 0){
                $numeroPar++;
            }else {
                $numeroImpar++;
            }
        }
        echo "<br><br>";

        echo "Han salido $numeroPar números pares y $numeroImpar número impar."
    ?>
</body>
</html>