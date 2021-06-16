<?php include "db.php";?>
<?php include "login_functions.php";?>

<?php deleteRows();?>



<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
     <form action="login_delete.php" method="post">
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
            
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
            
        </form>
    
     
    </div>


