<?php
include "business/suscriptiorBussiness.php";
include "entity/db.php";
include "entity/suscription.php";

$suscriptionBusiness=new SuscriptorBussiness();

echo "holii";

$data=[ 
	'system'=>$_POST['system'],
	 'initdate'=>$_POST['initdate'],
	 'enddate'=> $_POST['enddate'],
	 'user_id'=> $_POST['user_id']
];

$suscriptionBusiness->register($data);
echo "Registro correcto <a href='suscription_list.php'>Show suscriptions</a>";
?>