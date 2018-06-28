<?php 
	
	include "business/suscriptionbusiness.php";
	include "entity/db.php";
	include "entity/suscription.php";

	$suscriptionBusiness = new SuscriptionBusiness();
	$list = $suscriptionBusiness->list();

 ?>

 <a href="suscription_form.php">Register New Suscription </a>


 <table>
 		<tr><td>ID</td> <td>User</td> <td>System</td> <td>Init</td> <td>End</td></tr>
 		
 		<?php foreach ($list as $item) { ?>
 		
 			<tr>
 				<td><?php echo $item['id'] ?></td>
 				<td><?php echo $item['user_id'] ?></td>
 				<td><?php echo $item['system'] ?></td>
 				<td><?php echo $item['initdate'] ?></td>
 				<td><?php echo $item['endate'] ?></td>
 			</tr>

 		<?php } ?>
</table> 		