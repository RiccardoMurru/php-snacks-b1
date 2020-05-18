<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php 
/**
 * PHP Snack 1:
 *  Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
 *  Ogni array della partita avrà una squadra di casa e una squadra ospite, 
 *  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 *  Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60
 */

$matches = [
    [
        'home_team' => 'Milano',
        'guest_team' => 'Bologna',
        'home_points' => 100,
        'guest_points' => 60
    ],
    [
        'home_team' => 'Sassari',
        'guest_team' => 'Verona',
        'home_points' => 80,
        'guest_points' => 50
    ],
    [
        'home_team' => 'Torino',
        'guest_team' => 'Venezia',
        'home_points' => 88,
        'guest_points' => 128
    ],
    [
        'home_team' => 'Roma',
        'guest_team' => 'Palermo',
        'home_points' => 90,
        'guest_points' => 136
    ]
    ];
?>
<ul>
    <?php for ($i = 0; $i < count($matches); $i++) { ?>
        <li>
            <?php
            $match = $matches[$i];
            echo ($match['home_team'] . ' - ' . $match['guest_team'] . ' | ' . $match['home_points']  . ' - ' . $match['guest_points']);
            ?>
        </li>
    <?php } ?>
</ul>
</body>
</html>


