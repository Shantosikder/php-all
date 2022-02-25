<?php 

$datas = file('namedUsers.txt'); ?>

<table border="1">
<tr>
	<th>Name</th>
	<th>Email</th>
</tr>

<?php 
foreach($datas as $user){
	
	list($name, $email) = explode(' ', $user); ?>

	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
	</tr>

<?php } ?>
 
 </table>