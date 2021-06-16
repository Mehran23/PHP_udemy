<?php include "db.php";?>
<?php include "login_functions.php";?>



<?php
if(isset($_POST['submit'])) {


$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE users SET ";
$query .= "username = '$username' ";
$query .= "password = '$password' ";
$query .= "WHERE id = '$id' ";
 
    $result = mysqli_query($connection, $query);

    if(!$result) {
         
        die("QUERY FAILED" . mysqli_error($connection));

    }
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
    <form action="login_create.php" method="POST">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">

        <select name="id" id="">
       
        <?php  
        
        showAllData();
        
        ?>

        
        </select>
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">


    </form>

</div>   




</body>
</html>