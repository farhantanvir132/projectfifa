<?php
session_start();
require('dbcon.php');

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM `loginadmin` WHERE username='$username' and password='$password'";
     $result= mysqli_query($con,$query);
       $row=mysqli_num_rows($result);
         if($row==1){
            $_SESSION['username']=$username;
            header("location: admindashboard.php?alert=Login Successful");
       
       }
       else{
        echo<<<print
        <script>
        alert("Username and Password are Incorrect!");
        window.location.href="index.php?";
        </script>
        print;
       }
}
?>
