<?php 
$numbers = [];
// var_dump($numbers);

while (count($numbers) <= 15) {
    $singleNumber = rand(0, 100);
    if (!in_array($singleNumber, $numbers)) {
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