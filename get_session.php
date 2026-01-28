<?php
session_start();
if(isset($_SESSION['userName'])){

    echo "username is : ". $_SESSION['userName'];
    echo '<br>';
    echo "userid is : ". $_SESSION['userId'];
    echo '<br>';
    echo 'your data is here !!!';
    }
    else{
        echo "Please login to continue";
    }
echo '<br>';
echo '<br>';
?>