
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1> todos os números pares entre 0 e 100</h1>
</body>
</html>
<?php
//imprimir numeros impares de 0 a 100

for($i = 0; $i <= 100; $i ++){

    if($i % 2 == 0){
        echo "<div>".$i."</div>";
    }

}
?>
