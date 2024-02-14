<?php
require('dbcon.php');
session_start();
if(isset($_POST['submit'])){
    $newpassword=$_POST['newpass'];
    $query="update `loginadmin` set password='$newpassword' where username='$_SESSION[username]'";
  
    if( mysqli_query($con,$query)){
        echo<<<print
        <script>
        alert("Password changed Successfully");
        window.location.href="changepass.php?";
        </script>
        print;
    }
    else{

        header("location: changepass.php?alert=Could not Change the Password");
        exit;
    }
}