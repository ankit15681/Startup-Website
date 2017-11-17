<?php 
$server     ="localhost";
$username   ="salmain";
$password   ="Prajval27$";
$db         ="main";

//create a connection
$conn  =mysqli_connect( $server, $username, $password, $db);

//check connection

if (!$conn){
    die( "Connection failed ".mysqli_connect_error() );
}
//echo "Connected Successfully!";
    
?>