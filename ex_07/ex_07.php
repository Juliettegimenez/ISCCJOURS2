<?php
function get_angry_dog(int $nbr)
{
    $var = "";
    for ($i=0;$i < $nbr; $i ++) {
     $var = $var."woof";   
    }
    return $var;
}
?>