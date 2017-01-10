<?php
class MyClass
{
    public $var1;
    public $var2;
    public $var3;
    //protected $protected = 'Protected';
    //private $private = 'Private';

    function addThis()
    {
        /*echo $this->public;
        echo $this->protected;
        echo $this->private;
    */
        $this->var3 = $this->var1 + $this->var2;
    }
    function dispThis()
	{
		echo $this->var3;
	}

}

$obj = new MyClass();
$obj->var1 = 1;
$obj->var2 = 2;

$obj->addThis(); // Shows Public, Protected and Private
$obj->dispThis();
?>