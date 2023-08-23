<?php

    $len = $_GET ['lenght'];

    function SafePW($len){
        
        $randNum = rand(0,9);
        
        return $randNum;
    };

    // nota a me stesso, una volta che capisci come generare random anche lettere e simboli poi dovrai solo concatenare....credo
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strong password generator</title>
</head>
<body>
    
    <form action="#" method="get">
        <input type="text" name="lenght">
        <label>inserisci qui la lunghezza desiderata per la password da generare.</label>
    </form>

    <p>
        <?php
            for($i = 0; $i < $len; $i++){
                echo SafePW($len);
            }
        ?>
    </p>

</body>
</html>