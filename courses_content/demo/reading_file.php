<?php

$file = "demo.txt";

if ($handle = fopen($file, 'r')){

   echo $content = fread($handle, filesize($file)) ; //each by equals a character


    fclose($handle);
}else{
    echo 'Not working, sorry';
}



?>