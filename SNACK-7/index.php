<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php


$studenti = [
    [
        'first_name' => 'nicolas',
        'second_name' => 'de palma',
        'vote' => [
            'matematica' => 6,
            'storia' => 7,
            'italiano' => 4,
            'fisica' => 9,
            'sistemi' => 5
        ]
    ],

    [
        'first_name' => 'marco',
        'second_name' => 'pinolo',
        'vote' => [
            'matematica' => 5,
            'storia' => 3,
            'italiano' => 8,
            'fisica' => 4,
            'sistemi' => 9
        ]
    ],

    [
        'first_name' => 'franco',
        'second_name' => 'staco',
        'vote' => [
            'matematica' => 5,
            'storia' => 3,
            'italiano' => 6,
            'fisica' => 7,
            'sistemi' => 8
        ]
    ],

    [
        'first_name' => 'array',
        'second_name' => 'potter',
        'vote' => [
            'matematica' => 3,
            'storia' => 3,
            'italiano' => 5,
            'fisica' => 6,
            'sistemi' => 4
        ]
    ],

];

//var_dump($studenti);


/* for ($i = 0; $i < count($studenti); $i++) {
    //var_dump($studenti[$i]['first_name']);
    $media = 0;
    $vote = $studenti[$i]['vote'];
    //var_dump($vote);
    foreach ($vote as $valore) {
        $media += $valore / count($vote);
    }
    echo "La media degli elementi dell'array è: " . $media;
} */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK - 7</title>
</head>

<body>

    <h1>Quadri studenti</h1>

    <?php for ($i = 0; $i < count($studenti); $i++) { 
            $studente = $studenti[$i];  ?>
        <div>Studente: <?php echo ucwords($studente['first_name']).' '.ucwords($studente['second_name']); ?></div>
    <?php 
        $media = 0;
        $vote = $studenti[$i]['vote'];
        foreach ($vote as $valore) {
            $media += $valore / count($vote);
        } ?>
        <span>La media scolastica è: <?php echo $media; ?></span>
        <?php if ($media < 6) { ?>
            <h4>Rischi la bocciatura caprone!!</h4>
       <?php } else { ?>
            <h4>Continua così bel bambino</h4>
       <?php } ?>       
<?php } ?>

</body>

</html>