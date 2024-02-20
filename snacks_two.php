<?php
/*
# Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$first_name = $_GET['first_name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['email'] ?? '';

//validazioni
$is_age_valid = is_numeric($age) && $age > 0;
$is_name_valid = mb_strlen(trim($name)) > 3;
$is_email_valid = str_contains($email,'@') && str_contains($email,'.');
$is_form_valid = !$is_age_valid || !$is_email_valid || !$is_name_valid;

$message = $is_form_invalid ? 'accesso negato': 'accesso riuscito';

echo $message;



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

