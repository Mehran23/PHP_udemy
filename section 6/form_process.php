<?php

if(isset($_POST['submit'])){

    $name = ["Mehran", "Edwin", "Peter", "James", "Yahudi", "Jane", "Thomas"];
    $minimun = 5;
    $maximum = 10; 

$username = $_POST['username'];
$password = $_POST['password'];

if(strlen($username) < $minimun) {

    echo "Username has to be longer than 5";
}   



if(strlen($username) > $maximum) {

        echo "Username cannot to be longer than 10. ";
} 




if(!in_array($username, $name)) {

    echo " Sorry you are not allowed ";


} else {

    echo "Welcome " . $username;
}


//echo "Hello " . $username;
//echo " Your password = " . $password;

}

?>