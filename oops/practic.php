<?php
class Cars {
  
    function value(int $v)
    {
        echo $v+1;
    }

}
$car = new Cars();

$car->value("19");


?>