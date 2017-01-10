<?php

namespace NormalAddition;

interface displayResult
{
	public function dispThis();
}

 
class AddClass implements displayResult
{
    private $var1;
    private $var2;
    private $var3;

    function __construct($num1,$num2)
    {   
        echo "coming here to the constructor";
    	$this->var1 = $num1;
    	$this->var2 = $num2;
        echo "the first number assigned to var1 is: ".$this->var1."<br>";
        echo "the second number assigned is: ".$this->var2."<br>";
        $this->var3 = $this->var1 + $this->var2;
    }
    public function dispThis()
	{
		echo "the result is: ".$this->var3."<br>";
	}

}

/*class SubtClass implements displayResult
{
    private $var1;
    private $var2;
    private $var3;

    function __construct($num1,$num2)
    {   
    	$this->var1 = $num1;
    	$this->var2 = $num2;
        echo "the first number assigned to var1 is: ".$this->var1."<br>";
        echo "the second number assigned is: ".$this->var2."<br>";
        $this->var3 = $this->var1 - $this->var2;
    }
    public function dispThis()
	{
		echo "the result is: ".$this->var3."<br>";
	}

}*/
$objAdd = new AddClass(1,2);
$objAdd->dispThis();
//$objSub = new SubtClass(21,10);
//$objSub->dispThis();

?>