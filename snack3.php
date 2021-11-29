<?php 
$numbers[] = rand(0, 100);
var_dump($numbers);


for($i = 0; $i <= 14; $i++){
    $singleNumber = rand(0, 100);
    $doppione = in_array($singleNumber, $numbers);
    
    if($doppione){
        //se $single number è già contenuto all'interno dell'array allora ferma tutto (per niente efficace)
        exit;
    }else{
        $numbers[] = $singleNumber;
    }


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
        for ($k=0; $k < count($numbers); $k++) { 
            echo "<p> numero $k | " . $numbers[$k] . "</p>";
        }
    ?>
    
</body>
</html>