<?php 

$mail = $_GET["mail"];
$age = $_GET["age"];
$name = $_GET["name"];

$accesso = false;
$messaggioAccesso = "";

if(strlen($name) > 3 && is_numeric($age)){
    $accesso = true;
}else{
    $accesso = false;
}

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
        // echo $mail . " " . $age . " " . $name
        // echo "<p>name : $name</p> <br> <p>mail : $mail</p> <br> <p>age : $age</p> <br>"
        echo $messaggioAccesso;
?>
</body>
</html>