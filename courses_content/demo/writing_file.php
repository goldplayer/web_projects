<?php

$file = "demo.txt";
$demo = "I love dick";
if ($handle = fopen($file, 'w')){

    fwrite($handle, $demo);


    fclose($handle);
}else{
    echo 'Not working, sorry';
}








?>