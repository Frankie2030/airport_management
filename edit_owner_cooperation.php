<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM Cooperation where OwnerID = '".$_GET['id']."'")->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_owner_cooperation.php';
?>