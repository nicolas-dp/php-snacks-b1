<!-- ## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


/* foreach ($db as $key => $scuola) {
    //var_dump($scuola);
    foreach ($scuola as $componente) {
        if ($scuola == "teachers") {
            var_dump($componente['name'] . ' ' . $componente['lastname']);
        } else {
            var_dump($componente['name'] . ' ' . $componente['lastname']);
        }
    }
} */






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuola</title>
</head>

<body>

    <?php foreach ($db as $key => $scuola) :
        foreach ($scuola as $componente) :
            if ($key == "teachers") : ?>
                <div style="background-color: gray;">
                    <?= $componente['name'] . ' ' . $componente['lastname']; ?>
                </div>

            <?php else : ?>
                <div style="background-color: green;">
                    <?= $componente['name'] . ' ' . $componente['lastname']; ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>

</body>

</html>