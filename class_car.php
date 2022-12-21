<?php
  class Car{
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;


    function ShowProperty($wheels){
         echo $this -> hood;
    }

  }

  $obj = new Car();

//   echo $obj -> engine;
  

  class Semi extends Car {
    function ShowProperty($wheels){
        echo $this -> engine;
   }
  }
  $semi = new Semi();

?>