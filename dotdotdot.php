
<?php
namespace FunctionalAddition;
include "addition.php";
class AddClass
{

	function sum(...$numbers) {
    	return array_sum($numbers);
	}

}

$obj = new AddClass();

echo $obj->sum("abc", 2, 3, 4)."<br>";
echo $obj->sum(1, 2, 3, 4)."<br>";
echo $obj->sum('1','1',1,'1');

$namespaceobj = new NormalAddition\AddClass(1,2);
//$namespaceobj->dispThis();

?>
