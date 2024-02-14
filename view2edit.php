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
            padding-top: 120px;
        }

        .container_main {
            position: absolute;
            left: 50%;
            top: 30%;
            width: 100vh;
            transform: translate(-50%, -30%);
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
            margin: 10px;
            font-size: 14px;
            font-weight: 500;
            padding: 20px;
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
        $query = "SELECT * FROM `groupc` WHERE id=$_GET[id]";
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
            <img src="$fetchsrc$fetch[flag]">
            <br>
            <label for="flag">Flag </label>
            <input type="file" name="flag" value="$fetchsrc$fetch[flag]" class="form-control" accept=".jpg,.png,.svg">
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" value="$fetch[team]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" value="$fetch[mp]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" value=" $fetch[L]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" value=" $fetch[D]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" value="$fetch[W]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" value=" $fetch[Pts]" class="form-control" required>
</div>
<br>
<div class="form-group">
            <input type="hidden" name="id" value="$fetch[id]" class="form-control" required>
</div>
<input type="submit" name="update2" Value="Update" class="btn1">
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
