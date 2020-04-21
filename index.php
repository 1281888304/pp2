<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
include("function.php");
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
    echo "</br>";

    printArray($numbers);
    echo largest($numbers);
    $new=removeDups($numbers);
    echo "</br>";
    printArray($new);
    $new2=distribution($numbers);

    print_r($new2);

?>
</body>
</html>
