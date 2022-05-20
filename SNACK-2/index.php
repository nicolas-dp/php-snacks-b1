<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
$name = $_GET['name'];
$mail = $_GET['mail'];
/* Int mi permette di convertire direttamente una stringa in un numero intero. Se non riesce mi restituisce 0 */
$age = (int) $_GET['age'];


//var_dump($name, $mail, $age);

/* || str_contains($mail, '.') || str_contains($mail, '@') || is_int($age); */
//var_dump(strlen($name));

/* if (strlen($name) < 3 || !str_contains($mail, '.') || !str_contains($mail, '@') || $age == 0) {
    echo "Accesso negato";
} else {
    echo "Accesso CONSENTITO";
} */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK - 2</title>
</head>
<body>
    <h1>Controllo inserimento dati nell'URL in questo modo:</h1>
    <small>?name='inserisci nome'&mail='mail@mail.ex'&age=00</small>

   <?php if (strlen($name) < 3 || !str_contains($mail, '.') || !str_contains($mail, '@') || $age == 0) { ?>
    <h3>Accesso negato</h3> 
<?php } else { ?>
    <h3>Accesso CONSENTITO</h3> 
    <ul>
        <li><?php echo $name; ?> </li>
        <li><?php echo $mail; ?> </li>
        <li><?php echo $age; ?> </li>
    </ul>
<?php } ?>


</body>
</html>