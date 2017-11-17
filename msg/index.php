<?php 

include('connection.php');

$query ="SELECT * FROM contact";
$result =mysqli_query( $conn, $query);



?>
<!DOCTYPE html>
<html>
<head>
    <title>MySQL SELECT</title>
<link type="text/css" rel="stylesheet" href="bootstrap.min.css">
</head>
    <body>
    <div class="container">
        
        <h1>MySQL Select</h1>
        
        <?php 
              
            if (mysqli_num_rows($result)>0)
            {
              //we have data
              //output the data
             echo "<table class='table table-bordered'><tr><th>ID</th><th>Name</th><th>email</th><th>Contact</th><th>Message</th><th>msgtime</th></tr>";


            while( $row = mysqli_fetch_assoc($result) )
             {   $createdAt = $row["msgtime"];
$dateFrom = new DateTime($createdAt, new DateTimeZone('UTC'));
$dateFrom->setTimezone(new DateTimeZone('+12:30'));

                 echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["message"]."</td><td>".$IST = $dateFrom->format('Y-m-d H:i:s')."</td></tr>";
             }
        echo "</table>";
            }
else {"Whoops! No Results";}
mysqli_close($conn);
        
        ?>
        
    </div>
    
    
    </body>
</html>