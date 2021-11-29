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

$elementoUno = $arraykeys[0];
// var_dump($posts[$elementoUno])


for($i = 0; $i < count($posts); $i++){
    //recupero il singolo elemento dell'array di oggetti $post che ha come key $arraykeys[$i] 
    $singlePost = $posts[$arraykeys[$i]];

    var_dump($singlePost);

    /* for($j = 0; $j < count($singlePost); $j++){

    } */
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
    ?>
    
</body>
</html>