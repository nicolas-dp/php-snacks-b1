<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

<?php

$paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quae iste aperiam assumenda ullam esse neque exercitationem. Iure rem aspernatur repellendus distinctio asperiores odio excepturi molestias quo odit mollitia.
 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit incidunt quae iste aperiam assumenda ullam esse neque exercitationem. Iure rem aspernatur repellendus distinctio asperiores odio excepturi molestias quo odit mollitia';

 $arrayDivision = explode(".", $paragrafo);
 /* var_dump(explode(".", $paragrafo)); */
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scomposizione paragrafo</title>
</head>

<body>
    <p><?= $paragrafo; ?></p>

    <h3>Di seguito il paragrafo suddiviso</h3>
<?php foreach ($arrayDivision as $frase) : ?>
    <ul>
        <li><?= $frase; ?></li>
    </ul>
</body>

<?php endforeach; ?>
</html>