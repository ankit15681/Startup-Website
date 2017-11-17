<?php 
  //create connection
   $conn= new mysqli('127.0.0.1','salmain','Prajval27$','main');

    $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['subject'];
   $phone = $_POST['phone'];

  //check connection 
   if($conn->connect_error)
   {
   	die("connection failed:" . $conn->connect_error);
   }

   $sql= "INSERT INTO contact (id,name,email,message,contact,msgtime) VALUES(NULL,'$name','$email','$message','$phone',CURRENT_TIMESTAMP)";

   if($conn->query($sql)=== TRUE)
   {
   	echo "Success";
   }
   else
   {
   	echo "Error: " . $sql . "<br>" . $conn->error;
   }   

   $conn->close();
 ?>