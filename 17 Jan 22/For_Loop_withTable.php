<?php 

$name = array("Shanto","Rana","Waliul","Al Amin","Abhi");

for($i=0; $i<count($name); $i++){    //php te length ar jonno Count use kora hoy

	echo "Name: ".$name[$i]."<br>";
}


 ?>



 <h1>Table With For Loop</h1>



 <?php 

$name = array("Shanto","Rana","Waliul","Al Amin","Abhi","Momin","Sojol","Rasidul","Fehor");

echo("<table><tr><th>Serial No</th><th>Name</th></tr>");

for($i=0; $i<count($name); $i++){    //php te length ar jonno Count use kora hoy

	echo("<tr>");
	echo("<td>" . ($i+1) . "</td>");	
	echo("<td>" . $name[$i] . "</td>");	
	echo("</tr>");

	// echo "Name: ".$name[$i]."<br>";
}
echo("</table>");


  ?>

  <h2>Table with PHP</h2>

  <?php 

  $cars = array("shanto","Rana","Abhi");

   ?>

   <table border="1" style="border-collapse: collapse;">
   	<tr>
   		<td>ID</td>
   		<td>Name</td>
   	</tr>

   	<?php 


   	$sn = 1;
   	for($i=0; $i<count($cars); $i++){ ?>


   		<tr>
   			<td><?php echo $sn++; ?></td>
   			<td><?php echo $cars[$i]; ?></td>
   			
   		</tr>
   		<?php 	

   	}

   		 ?>
   </table>