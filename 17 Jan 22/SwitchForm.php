<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Switch Form</title>
</head>
<body>


	<?php 

	$cat = $_GET['cat'];

	switch ($cat) {
		case 'News': echo "You have selected news category";
			break;
		case 'Weather': echo "You have selected Weather category";
			break;
		case 'Sports': echo "You have selected Sports category";
			break;		
		default: echo "You have selected other Category";
			
			break;
	}


	?>

<form action="" name="myForm">

	<select name="cat" id="">
		
		<option value="">Select One</option>
		<option value="News">News</option>
		<option value="Weather">Weather</option>
		<option value="Sports">Sports</option>
		

	</select>

	<input type="submit" name="submit" value="GO">


</form>


	
</body>
</html>

