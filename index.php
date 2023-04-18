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
    <title>Hotel Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main>
        

    <div class="container py-5">

        <form action="index.php" method="GET">
            <select name="parking" id="parking">
                <option value="null">Scegli</option>
                <option value="1">Parcheggio</option>
                <option value="0">Senza Parcheggio</option>
            </select>

            <button type="submit">Cerca</button>
        </form>

        <?php if($_GET['parking'] == 1) {
            foreach($hotels as $key => $hotel) {
                
                

                if(!$hotel['parking']) {
                    
                    \array_splice($hotel, 1, 1);
                    
                }
                Var_dump($hotel['parking']);
            }

            } else if($_GET['parking'] == 0) {
                foreach($hotels as $key => $hotel) {
                
                

                    if($hotel['parking']) {
                        unset($hotel);
                        
                    }
                    Var_dump($hotel['parking']);
                }
            }
            Var_dump($hotels);
        ?>

        <table class="table table-dark table-striped my-5">
            <thead>
                <tr>
                    <?php foreach($hotels[0] as $key => $hotel) {
                    
                        echo "<th scope='col'>" . $key; "</th>";

                    }
                    ?>
                
                </tr>
            </thead>
            <tbody>
                
            <?php foreach($hotels as $hotel) {
                
                

                echo "<tr>";
                
                
                $i = 0;
                foreach($hotel as $key => $value) {
                    
                    if($i == 0) {
                        $i++;

                        echo "<th scope='col'>" . $value; "</th>";

    
                    } else {
                        $i++;
                        echo "<td scope='col'>" . $value; "</td>";
                    }
                    
                }
                
                
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
    </main>
</body>
</html>