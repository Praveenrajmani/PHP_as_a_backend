
<?php

$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%d\n", $count);

$numbers = explode(" ", trim(fgets($_fp)));

foreach ($numbers as &$number)
{
    $number = intval($number);
    echo $number
}


?>