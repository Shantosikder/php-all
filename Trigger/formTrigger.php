<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwad50croud";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=="POST"){


    
    if($_POST['email'] == '' && $_POST['name'] == '' && $_POST['birthDate'] == ''){
        echo "<h1>Email and password must be filled</h1>";
    } else {
        $fname = $_POST['name'];
        $femail = $_POST['email'];
        $fcontact = $_POST['birthDate'];
        $errors = array();

        if(filter_var($femail, FILTER_VALIDATE_EMAIL) == false){
            $errors[] = "Valid email must be required";
        }
        
        if(empty($errors)){

            $stmt = $conn->prepare("INSERT INTO members ( name ,email, birthDate) VALUES ( ?, ?,?)");
            $stmt->bind_param("sss", $name, $email, $fcontact);
           
            $name = $fname;
            $email = $femail;
            $contact = $fcontact;
            $stmt->execute();
            
            
            echo "New records created successfully";
            
            $stmt->close();
            $conn->close();


        } else {
            foreach($errors as $err){
                echo "<h1 class='invalid'>$err</h1>";
            }
        }
    }
}





?>


<form  action="" method="post">
		<table>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" required="required" /> </td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="email" required="required" /></td>
			</tr>
			<tr>
				<td>Birt Date :</td>
				<td><input type="date" name="birthDate" required="required" /></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="SUBMIT" /></td>
			</tr>
		</table>
		</form>