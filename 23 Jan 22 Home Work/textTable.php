<?php 

$datas = file('textTable.txt');

?>

<table border="2">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    </tr>


<?php 

foreach($datas as $data){
    list($name,$email,$phone) = explode(' ',$data); ?>



<tr>
    <td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $phone ?></td>
</tr>


<?php } ?>

</table>



