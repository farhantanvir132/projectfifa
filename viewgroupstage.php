<?php

require('dbcon.php');
session_start();
if(!isset($_SESSION['username'])){
  header("location:error.html?");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            padding-top: 140px;
        }

        .container_main {
            position: absolute;
            left: 50%;
            top: 60%;
            width: 100vh;
            transform: translate(-50%, -30%);
            padding-top:100px;
        }

        nav {
            display: flex;
            font-size: 1rem;
            background-color: #B9B9B8;
            height: 5rem;
            align-item: center;
        }

        nav img {
            height: 3.5rem;
            margin: 8px 30px;
        }

        nav h1 {
            margin: 20px 0px;
            font-size: 30px;

        }

        .btn1 {
            margin: 3px;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            width: 90px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            background: #ebeef1;
            color: black;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            position: absolute;
            top: 98%;
            left: 45%;

        }

        .btn1:hover {
            transform: scale(1.2);
            z-index: 2;
        }

    </style>
</head>
<body>
    <nav>
        <a href="./admindashboard.php"><img src="logo/admin.png" alt=""></a>
        <h1>Admin</h1>
    </nav>
    <div class="container_main">

        <?php
$query = "SELECT * FROM `groupstage` WHERE id=$_GET[id]";
$result = mysqli_query($con, $query);
$fetch = mysqli_fetch_assoc($result);
$fetchsrc = FETCH_SRC;
?>
        <?php
echo <<<print
<div class="container">
    
        <div class="col-8">
    <form action="fetchupdate.php" method="post" enctype="multipart/form-data">
<div class="form-group">
                    <label for="flagone">Flag1 </label>
                    <input type="file" name="flagone" value="$fetchsrc$fetch[flagone]"class="form-control" accept=".jpg,.png,.svg">
                </div>
                <br>
                <div class="form-group">
                    <label for="flagtwo">Flag2 </label>
                    <input type="file" name="flagtwo" value="$fetchsrc$fetch[flagtwo]" class="form-control" accept=".jpg,.png,.svg">
                </div>
                <br>
                <div class="form-group">
            <label for="groupname">Group Name </label>
            <input type="text" name="groupname" value="$fetch[groupname]" class="form-control">
</div>
<br>
<div class="form-group">
            <label for="teamone">First Team Name </label>
            <input type="text" name="teamone" value="$fetch[teamone]" class="form-control">
</div>
<br>
<div class="form-group">
            <label for="teamtwo">Second Team Name </label>
            <input type="text" name="teamtwo" value="$fetch[teamtwo]" class="form-control">
</div>
<br>
<div class="form-group">
            <label for="scoreone">First Team Score </label>
            <input type="text" name="scoreone" value="$fetch[scoreone]"  class="form-control">
</div>
<br>
<div class="form-group">
            <label for="scoretwo">Second Team Name </label>
            <input type="text" name="scoretwo" value="$fetch[scoretwo]" class="form-control">
</div>
<br>
<div class="form-group">
            <label for="tm">Time </label>
            <input type="text" name="tm" value="$fetch[tm]" class="form-control">
</div>
<br>
<div class="form-group">
            <label for="dt">Date </label>
            <input type="text" name="dt" value="$fetch[dt]" class="form-control">
</div>
<br>
<div class="form-group">
<label for="status">Status</label>
<input type="text" name="status" value="$fetch[status]" class="form-control">
</div>
<br>
<div class="form-group">
<label for="wp1">Wining chance of Team 1</label>
<input type="text" name="wp1" value="$fetch[wp1]" class="form-control">
</div>
<br>
<div class="form-group">
<label for="drw">Draw chance</label>
<input type="text" name="drw" value="$fetch[drw]" class="form-control">
</div>
<br>
<div class="form-group">
<label for="wp2">Wining Chance of Team 2</label>
<input type="text" name="FT" value="$fetch[wp2]" class="form-control">
</div>
<br>
<div class="form-group">
                    <label for="sog1">Shots on Goal of Team 1</label>
                    <input type="text" name="sog1" value="$fetch[sog1]" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 2</label>
                    <input type="text" name="sog2" value="$fetch[sog2]"  class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" value="$fetch[possession1]"  class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" value="$fetch[possession2]"  class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" value="$fetch[pass1]"  class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" value="$fetch[pass2]"  class="form-control">
                    </div>
                    <br>
            
<br>
<input type="hidden" name="id" value="$fetch[id]" class="form-control">
<br>
<input type="submit" name="updategroupstage" Value="Update" class="btn1">
</form>
</div>
</div>
print;
?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
