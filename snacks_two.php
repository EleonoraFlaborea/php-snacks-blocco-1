<?php
/*
# Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$first_name = $_GET['first_name'];
$age = $_GET['age'];
$email = $_GET['email'];

//name
if (empty($first_name)) {
 die("<p>Non hai inserito il nome</p>\n");
}
if (strlen($first_name) <3) {
   die("<p>Il nome deve avere almeno 3 caratteri</p>\n");
}

//age
if (empty($age)) {
die("<p>Non hai inserito l'età</p>\n");
}

if (!is_numeric($age)) {
die("<p>Non hai inserito un numero<p>\n");
}

//email
if (empty($email)) {
die("<p>Non hai inserito la email</p>\n");
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nome: <?php echo $first_name?></p>
    <p>Età: <?php echo $age?></p>
    <p>Email: <?php echo $email?></p>

    
</body>
</html>

