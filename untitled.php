<?php
class Add_Class
{
    public var $a,$b,$c;
 
    public function Do_sum()
    {
        $c = $a+$b;
    }
 
    public function Display_sum()
    {
        echo $this->c
    }
}
 
$obj = new Add_Class();
$obj->a = 1;
$obj->b = 2;
$obj->Do_sum()
$obj->Display_sum()
 
?>