<?php
$firstname=$_POST['firstname'];

$conn=new mysqli('localhost','root','','task2');
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
  }
else{
  $stmt=$conn->prepare("insert into registration(firstname) values(?)");
  $stmt->bind_param("s",$firstname);
  $stmt->execute();
  echo "regstration success";
  $stmt->close();
  $conn->close();
}
?>