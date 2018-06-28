<?php
include "DB.php";

echo "creando la Bd...";

$db = new BD();
$db ->createBD();
echo "ok";

?>