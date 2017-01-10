<?php
class AddClass
{
    $arrobj = array();
    $count = 0;
    $i=0;
    $sum = 0;  
    function add(){
        foreach($arr as $n) {
            $arrobj[$count++] = $n;
        }
    }
    
    function GetResult()
	{
	   for($i=0;$i<$count;$i++)
       {
            $sum = $sum+$arrobj[$i];
       }
       return $sum;
    }

}

$obj = new AddClass();
//$obj->var1 = 1;
//$obj->var2 = 2;

$obj->add(1, 2, 5, 8); 
echo $obj->GetResult();

?>