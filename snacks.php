<?php
/*
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$lists = [
    ['name-home' => 'Reyer Venezia', 
    'name-away' => 'Virtus Bologna', 
    'points-home' => 76,
    'points-away' => 90
    ],

    ['name-home' => 'Virtus Roma', 
    'name-away' => 'Pall. Treviso', 
    'points-home' => 63, 
    'points-away' => 88
    ],
    ['name-home' => 'Pall. Trieste', 
    'name-away' => 'Napoli Basket', 
    'points-home' => 77,
    'points-away' => 80
    ],
    ['name-home' => 'Pall. Trapani', 
    'name-away' => 'Pall. Messina', 
    'points-home' => 69, 
    'points-away' => 75
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MATCHES</h1>

    <div>
        <ul>
            <?php foreach($lists as $list) :?>
            <li> <?php echo $list['name-home'] ?> - <?php echo $list['name-away'] ?> | <?php echo $list['points-home'] ?> - <?php echo $list['points-away'] ?></li>
            <?php endforeach ?>

        </ul>
    </div>
    
</body>
</html>

