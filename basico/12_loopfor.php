<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada do 5 </title>
</head>

<body>

    <h1>Tabuada do 5</h1>

    <hr>
    <br>

    <?php

        $tabuada = 5;

        for($i = 1; $i <= 10; $i++)
        {    
            $result = $i * $tabuada;
            echo"$i X $tabuada = $result <br>";
        }
     ?>
</body>
</html>