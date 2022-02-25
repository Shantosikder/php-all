<?php 

class testStatic 

{
	public static $x = 0;

	 static public function counter(){
		self::$x++;
		echo "<hr>".self::$x;
	}
}

echo testStatic::$x;

testStatic::counter();
testStatic::counter();
testStatic::counter();


 ?>