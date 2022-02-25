<?php 	

//print_r($_POST); //super global array

//echo $_POST['fullname'];

//echo $_GET['fullname'];

echo $_REQUEST['fullname'];

 ?>

<form method="post">

	<input type="text" name="fullname">
	<input type="submit" name="submit" value="SUBMIT">

</form>