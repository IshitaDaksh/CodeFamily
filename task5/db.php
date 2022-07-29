<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];


 $conn= new mysqli($servername,$username,$password,$dbname);
 if ($conn->connect_error) {
   die('Connection Failed');}
  $sql="INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$Name', '$Email', '$Subject', '$Message')";
 // }else{
 if($conn->query($sql)==true){
   echo "new record added";
 }
 else{
   echo "Error";
 }
 $conn->close();
 //   $stmt=$conn->prepare("INSERT Into contact(Name,Email,Subject,Message)values(?,?,?,?)");
 //   $stmt->bind_param("ssss",$Name,$Email,$Subject,$Message);
 //   $stmt->execute();
 //   echo "Registartion successfull";
 //   $stmt->close();
 //   $conn->close();
 // }
 ?>
