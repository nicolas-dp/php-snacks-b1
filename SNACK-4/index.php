<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php


$arrayRandom = [];   

for ($i = 0; $i < 15; $i++) { 
   
    $elementoArray[$i] = random_int(1, 100);
    if (!in_array($elementoArray[$i], $arrayRandom)) {
        
        array_push($arrayRandom, $elementoArray[$i]);
    }
        
    
}



var_dump($arrayRandom);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK - 4</title>
</head>

<body>


</body>

</html>