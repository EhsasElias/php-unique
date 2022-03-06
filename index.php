<?php

$array = array(1,1,2,3,4,4,5,6,5);

foreach($array as $key => $arr){

    echo '<br>'.$key." => ".$arr."<br>";
}


print_r(array_unique($array));

?>