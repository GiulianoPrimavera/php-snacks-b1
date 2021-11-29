<?php 
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
// var_dump($posts);

//creo un array che contiene ogni chiave per ogni elemento dell'array post (così da recuperare i singoli elementi)
$arraykeys = array_keys($posts);
// var_dump($arraykeys);

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
    for($i = 0; $i < count($posts); $i++){
        //recupero il singolo elemento dell'array di oggetti $post che ha come key $arraykeys[$i] 
        $singlePost = $posts[$arraykeys[$i]];
        // var_dump($singlePost);
        $datePost = $arraykeys[$i];
        echo "<h1> in data $datePost sono stati pubblicati questi posts </h1><br>";
    
        for($j = 0; $j < count($singlePost); $j++){
            //stampo a schermo il valore di ogni key contenuta in ogni oggetto all'interno dell'array posts
            echo $singlePost[$j]["title"] . "<br>";
            echo $singlePost[$j]["author"] . "<br>";
            echo $singlePost[$j]["text"] . "<br><br><br><br>";
        }
    }
    ?>
    
</body>
</html>