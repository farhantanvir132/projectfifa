<?php

require("dbcon.php");
session_start();
if(!isset($_SESSION['username'])){
  header("location:error.html?");
}
header('Cache-Control:no-cache, must-revalidate');

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
    <style>
        .container_main {
            position: absolute;
            left: 60%;
            top: 40%;
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
            width: 70px;
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
            left: 30%;

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
        if (isset($_POST['group1'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="flag">Flag </label>
                    <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
                </div>
                <br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
        <?php
        if (isset($_POST['group2'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit2" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>

        <?php
        if (isset($_POST['group3'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit3" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
        <?php
        if (isset($_POST['group4'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit4" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
        <?php
        if (isset($_POST['group5'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit5" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
        <?php
        if (isset($_POST['group6'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit6" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
        <?php
        if (isset($_POST['group7'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit7" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }
        ?>
        <?php
        if (isset($_POST['group8'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="flag">Flag </label>
            <input type="file" name="flag" class="form-control" accept=".jpg,.png,.svg" required>
</div>
<br>
<div class="form-group">
            <label for="team">Team Name </label>
            <input type="text" name="team" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="mp">Match Played </label>
            <input type="text" name="mp" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="L">Loss </label>
            <input type="text" name="L" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="D">Draw </label>
            <input type="text" name="D" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="W">Win </label>
            <input type="text" name="W" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="Pts">Points</label>
            <input type="text" name="Pts" class="form-control" required>
</div>
<br>
<input type="submit" name="submit8" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>
