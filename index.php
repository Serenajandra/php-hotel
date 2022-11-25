<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
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

    <h3>Lista Hotels:</h3>

    <?php
    // $i = 0;
    // while ($i < count($hotels)) {
    //     $this_hotel = $hotels[$i];
    //     $i++;
    //     var_dump($this_hotel["name"]);
    //     echo "<li><h3>" . $this_hotel["name"];
    //     "</h3></li>";
    // }

    for ($i = 0; $i < count($hotels); $i++) {
        $this_hotel = $hotels[$i];
        echo "<ul>
                     <li><h4>Nome: " . $this_hotel["name"] . "</h4></li>
                     <li>Descrizione: " . $this_hotel["description"] . "</li>
                     <li>Parcheggio: " . $this_hotel["parking"] . "</li>
                     <li>Voto: " . $this_hotel["vote"] . "</li>
                     <li>Distanza dal centro città: " . $this_hotel["distance_to_center"] . "</li>
                     </ul>";
    }
    ?>

</body>

</html>