<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pp2</title>
</head>
<body>
<h1>Pairprogram 2 </h1>
<?php
    echo "“PHP Array Practice";
    $numbers=array(7,9,8,9,8,8,6);
    function printArray($array){
        foreach ($array as $items){
            echo $items . "</br>";
        }
    }
    printArray($numbers);
?>
</body>
</html>
