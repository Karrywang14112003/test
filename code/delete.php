<?php
include "connect.php";
$id = $_GET["id"];
$sql1 = "DELETE FROM tongketnamhoc WHERE id = '$id'";
$stmt = $conn->prepare($sql1);
$query = $stmt->execute();
header("location:index.php");
?>