	<?php 
	class grandFather

	{
		public $name = "Shanto Sikder";

		public function getName(){
			return $this->name;

		}
	}


	class daday extends grandFather

	{

	public function GetFatherName()

	{
	return $this->name;
	}

}

//$obj = new grandFather;
// echo $obj->name;
//echo $obj->getName();

$obj2 = new daday;
echo $obj2->GetFatherName();









 ?>