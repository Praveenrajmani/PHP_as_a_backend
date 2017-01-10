
<?php
class Add {
    public $num1 = 1;
    public $num2 = 2;
   
   
    function addFunc() {
        return $num1+$num2
    }
}

$obj = new Add;
$result = $obj->addFunc();
echo $result
?>


  