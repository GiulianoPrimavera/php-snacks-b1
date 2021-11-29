<?php 

//prendo i dati
$age = $_GET["age"];
$name = $_GET["name"];
$mail = $_GET["mail"];

//creo delle variabili per gestire l'accesso dell'utente
$accesso = false;
$messaggioAccesso = "";

//creo una variabile per verificare se l'email è corretta
$mailValida = false;
//verifico se lìemail è corretta
if(strpos($mail, ".") !== false && strpos($mail, "@") !== false){
    $mailValida = true;
}

//verifico se tutti i dati sono corretti
if(strlen($name) > 3 && is_numeric($age) && $mailValida !== false){
    $accesso = true;
}else{
    $accesso = false;
}

//verifico se l'accesso può avvenire o meno
if($accesso === false){
    $messaggioAccesso = "Accesso negato";
}else{
    $messaggioAccesso = "Accesso riuscito";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //stampo a schermo il messaggo di accesso (o meno)
        echo $messaggioAccesso;
?>
</body>
</html>