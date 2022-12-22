<?php

    class Car{
        var $wheels = 10;


        function Wheels_count(){
            $this -> wheels = 11;
        }

    }

    $how = new Car();
    $how -> Wheels_count();
    echo $this -> how;

?>