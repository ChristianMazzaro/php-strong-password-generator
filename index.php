
<?php
    // $len = $_GET ['lenght'];
    
    // function SafePW($len)
    // {
    //     $alphanumeric_characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz&!?£$€-_#';
    
    //     return substr(str_shuffle($alphanumeric_characters),0, $len);
    // }

    include 'functions.php';
 
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
        password generata: 
        <?php
            echo SafePW($len);
        ?>
    </p>

</body>
</html>