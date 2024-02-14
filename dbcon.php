<?php

 $con = mysqli_connect("localhost","root","","fifa");


 if(mysqli_connect_errno()){
    die("Cannot Connect to Database");

 }


   define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/projectfifa/images/");

   define("FETCH_SRC","http://127.0.0.1/projectfifa/images/");


?>