<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (empty($name)||empty($mail)||empty($age)) {
    $string = 'Mancano dei dati';
}
else {
    
    if (strpos($mail, '@')&& strpos($mail, '.')&&is_numeric($age)&&strlen($name)>3)
        $string = 'Accesso riuscito';
    else 
        $string = 'Accesso negato';
}
?>

<p> <?php echo $string ?></p>
</body>
</html>