<?php
function printArray($array){
    foreach ($array as $items){
        echo $items . "</br>";
    }
}
function largest($array){
    return max($array);
}
function removeDups($array){
    return array_unique($array);
}
function distribution($array){

    $answer=array_count_values($array);
    ksort($answer);
    return $answer;
}