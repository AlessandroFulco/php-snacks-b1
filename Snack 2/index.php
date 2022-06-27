<?php
/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/



$success = true;

$nome = $_GET['nome'];
$mail = $_GET['mail'];
$age = $_GET['age'];
var_dump($nome, $mail, $age);

if ( strlen($nome) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)){
    $result = "<h1> Accesso Riuscito</h1>";
} else {
    $result = "<h1> Accesso Negato</h1>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 2</title>
</head>
<body>
    <form action="">
        <input type="text" name="nome" placeholder="Inserisci Nome">
        <input type="text" name="mail" placeholder="Inserisci Mail">
        <input type="text" name="age" placeholder="Inserisci Età">
        <button>Invia Dati</button>
    </form>
    <div
        class ="<?= $success ? 'riuscito' : 'negato' ?>"
    >
        <?= $result ?>
    </div>
</body>
</html>