<?php

Class Restclass {
	
	private $items = array(
		1 => 'rest item 1',  
		2 => 'rest item 2',  
		3 => 'rest item 3',  			
		4 => 'rest item 4'
		);
	public function getall(){
		return $this->items;
	}
	
	public function getbynumber($num){
		return $this->items[$num];
	}	
}
/*$obj = new Restclass();
print_r($obj->getall());
//echo '<br';
echo '<br>';
echo $obj->getbynumber(2);
*/

?>