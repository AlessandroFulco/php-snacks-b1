<?php

// array delle partite
$array_partite = [
    [
        // partita 1
        [
            'nome'      => 'Olimpia Milano',
            'di_casa'   => 'true',
            'punteggio' => '55' 
        ],
        [
            'nome'      => 'Cantù',
            'di_casa'   => 'false',
            'punteggio' => '60' 
        ],
    ],
    [
        // partita 2
        [
            'nome'      => 'Bologna',
            'di_casa'   => 'false',
            'punteggio' => '30' 
        ],
        [
            'nome'      => 'San Marino',
            'di_casa'   => 'true',
            'punteggio' => '75' 
        ],
    ],
    [
        // partita 3
        [
            'nome'      => 'Roma',
            'di_casa'   => 'true',
            'punteggio' => '55' 
        ],
        [
            'nome'      => 'Firenze',
            'di_casa'   => 'false',
            'punteggio' => '80' 
        ]
    ]
];

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 1</title>
</head>
<body><?php
    $arr_length = count($array_partite);
    for ($i = 0; $i < $arr_length; $i++){
        $partita = $array_partite[$i];
        ?>
       <div>
			<span class="<?= $partita[0]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[0]['nome'] ?></span>
            <span> - </span>
			<span class="<?= $partita[1]['di_casa'] ? 'casa' : 'ospite' ?>"><?= $partita[1]['nome'] ?></span>
			<?= " | {$partita[0]['punteggio']}-{$partita[1]['punteggio']}" ?>
		</div><?php

    }

    ?>
</body>
</html>