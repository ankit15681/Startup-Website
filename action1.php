<?php 
  //create connection
   $conn= new mysqli('127.0.0.1','salmain','Prajval27$','salbook');

   $name = $_POST['dname'];
   $email = $_POST['demail'];
   $contact = $_POST['dmobile'];
   $vehicle = $_POST['dvehicle'];
   $kits = $_POST['dkits'];
  
  //check connection
   if($conn->connect_error)
   {
   	die("connection failed:" . $conn->connect_error);
   }

   $sql= "INSERT INTO bookings (id,name,email,contact,vehicle,kits,booktime) VALUES(NULL,'$name','$email','$contact','$vehicle','$kits',CURRENT_TIMESTAMP)";

   if($conn->query($sql)=== TRUE)
   {
   	$message= "Thank you for booking. We will revert to you soon";
       echo "<script type='text/javascript'>alert('$message');</script>";
   }
   else
   {
   	echo "Error: " . $sql . "<br>" . $conn->error;
   }   

   $conn->close();
 ?>