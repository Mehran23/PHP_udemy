<?php 


 $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
 
 
    if(!$connection) {
    die("Database connection failed");

}

$query = "SELECT * FROM users";



$result = mysqli_query($connection, $query);


if(!$result) {
    die('query FAILED');
}


    

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

    <div class="col-sm-6"></div>
   

    <?php 
    
    while($row = mysqli_fetch_assoc($result)) {
        ?>


        <pre>
        <?php 
        print_r($row);
        ?>
        </pre>

        <?php
    }
    
    
    ?>





</div>   




</body>
</html>