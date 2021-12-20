<?php
include 'conn.php';
$id = $_POST['id'];
$name = $_POST['name'];
$msg = $_POST['msg'];
$img = $_POST['img'];
if($name != "" && $msg != ""){
	$sql = $conn->query("INSERT INTO discussion (parent_comment, student, post, image)
			VALUES ('$id', '$name', '$msg', '$img')");
	echo json_encode(array("statusCode"=>200));
}
else{
	echo json_encode(array("statusCode"=>201));
}
$conn = null;

?>