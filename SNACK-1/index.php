<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php

$calendario = [

    [
        'casa' => 'milano',
        'ospite' => 'lakers',
        'puntiCasa' => 72,
        'puntiOspite' => 65,

    ],

    [
        'casa' => 'miami',
        'ospite' => 'hooks',
        'puntiCasa' => 110,
        'puntiOspite' => 98,

    ],

    [
        'casa' => 'bulls',
        'ospite' => 'celtics',
        'puntiCasa' => 72,
        'puntiOspite' => 90,

    ],

];

var_dump($calendario);



for ($i=0; $i < count($calendario); $i++) { 
    echo $calendario[$i]['casa'].' - '.$calendario[$i]['ospite'].' | '.$calendario[$i]['puntiCasa'].'-'.$calendario[$i]['puntiOspite'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>

<body>

</body>

</html>