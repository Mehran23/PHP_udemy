<?php include "db.php";?>
<?php include "login_functions.php";?>


<?php createRows();?>





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
    <h1 class= "text-center">Create</h1>
    <form action="login_create.php" method="POST">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="CREATE">


    </form>

</div>   




</body>
</html>