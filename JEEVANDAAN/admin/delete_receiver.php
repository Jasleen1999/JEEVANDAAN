<?php
include 'conn.php';
  $r_id = $_GET['id'];
$sql= "DELETE FROM receiver where r_id={$r_id}";
$result=mysqli_query($conn,$sql);

header("Location: receiver_list.php");

mysqli_close($conn);

 ?>