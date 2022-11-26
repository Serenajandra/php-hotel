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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <h3>Lista Hotels:</h3>

    <?php
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


    <h3>Prima tabella degli hotels:</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php

                foreach ($hotels[0] as $key => $key) {
                    echo "<th scope='col'>" . $key . "</th>";
                }

                ?>
            </tr>
        </thead>
        <!-- Per ogni hotel stampa tutti i suoi valori -->
        <tbody>
            <?php
            for ($i = 0; $i < count($hotels); $i++) {
                $this_hotel = $hotels[$i];
            ?>
                <tr>
                <?php
                // Stampo i valori degli hotel
                foreach ($this_hotel as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
            }
                ?>
                </tr>
        </tbody>
    </table>


    <h3>Seconda tabella degli hotels:</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                foreach ($this_hotel as $key => $key) {
                    echo "<th scope='col'>" . $key . "</th>";
                }
                ?>
            </tr>
        </thead>
        <!-- Per ogni hotel stampa tutti i suoi valori -->
        <tbody>
            <tr>
                <?php
                // Stampo i valori degli hotel
                foreach ($hotels[0] as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                ?>
            </tr>
            <tr>
                <?php
                foreach ($hotels[1] as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                ?>
            </tr>
            <tr>
                <?php
                foreach ($hotels[2] as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                ?>
            </tr>
            <tr>
                <?php
                foreach ($hotels[3] as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                ?>
            </tr>
            <tr>
                <?php
                foreach ($hotels[4] as $key => $value) {
                    echo "<td>" . $value . "</td>";
                };
                ?>
            </tr>
        </tbody>
    </table>