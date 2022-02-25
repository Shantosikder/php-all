<?php 

 class Member

{
	public $name = "";
	public $loggedIn = false;

	public function login(){
		$this->loggedIn = true;
	}

	public function logout(){
		$this->loggedIn = false;
	}
	public function isloggedIn(){
		return $this->loggedIn;
	}
}

class Administrator extends Member

{
	public function lagin(){
		$this->loggedIn = true;
		echo "Log entry: $this->name logged in<br>";
	}
}

$mumber1 = new Member;
$mumber1->name= "shanto";
$mumber1->login();
echo $mumber1->isloggedIn();
$mumber1->logout();
echo $mumber1->isloggedIn();

echo "<hr>";

$mumber2 = new Administrator;
$mumber2->name= "Fehor";
$mumber2->login();
echo $mumber2->isloggedIn();

//****Bujte hobe 
 ?>