<?php

class Member {
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
    public function loggedIn(){
        $this->loggedIn = true;
        echo "Long Entry: {$this->name} Logged in <br>";
    }
}

$member1 = new Member;
$member1->name="shanto";
$member1->login();
echo $member1->isloggedIn(); //login  
// $mumber1->logout();
// echo $mumber1->isloggedIn(); //logout

echo "<hr>";

$mumber2 = new Administrator; //login
$mumber2->name= "Fehor";
$mumber2->login();
echo $mumber2->isloggedIn();










?>