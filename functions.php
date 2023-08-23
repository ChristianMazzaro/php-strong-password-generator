<?php
    $len = $_GET ['lenght'];
    
    function SafePW($len)
    {
        $alphanumeric_characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz&!?£$€-_#';
    
        return substr(str_shuffle($alphanumeric_characters),0, $len);
    }
 
?>