<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<?php
        $matches =  [
            [
                'casa' => 'Olimpia Milano',
                'ospite' => 'Cantù',
                'punticasa' => 55,
                'puntiospite' => 60
            ],
            [
                'casa' => 'Reggiana',
                'ospite' => 'Varese',
                'punticasa' => 95,
                'puntiospite' => 77
                
            ],
            [
                'casa' => 'Venezia',
                'ospite' => 'Brescia',
                'punticasa' => 94,
                'puntiospite' => 87
                
            ]
            ];
        
        
        for ($i=0; $i < count($matches); $i++) { 
            echo '<pre>' .$matches[$i]["casa"] .' - ' .$matches[$i]["ospite"] .' | ' .$matches[$i]["punticasa"] .' - ' .$matches[$i]["puntiospite"] . PHP_EOL .'</pre>' ;
        }
    ?>


</body>
</html>