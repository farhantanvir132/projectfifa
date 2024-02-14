<?php

require('dbcon.php');
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
        if (isset($_POST['gk'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image </label>
            <input type="file" name="image" class="form-control" accept=".jpg,.png" required>
</div>
<br>
<div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="matches">Matches </label>
            <input type="text" name="matches" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="gs">Goal Saved </label>
            <input type="text" name="gs" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="type">Position </label>
            <input type="text" name="type" class="form-control" required>
</div>
<br>
<input type="submit" name="submitBGK" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }
        ?>
        <?php
        if (isset($_POST['defender'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image </label>
            <input type="file" name="image" class="form-control" accept=".jpg,.png" required>
</div>
<br>
<div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="matches">Matches </label>
            <input type="text" name="matches" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="goal">Goals </label>
            <input type="text" name="goal" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="assist">Assists </label>
            <input type="text" name="assist" class="form-control" required>
</div>
<br>

<div class="form-group">
            <label for="type">Position </label>
            <input type="text" name="type" class="form-control" required>
</div>
<br>
<input type="submit" name="submitBDF" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }
        ?>
        <?php
        if (isset($_POST['midfielder'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image </label>
            <input type="file" name="image" class="form-control" accept=".jpg,.png" required>
</div>
<br>
<div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="matches">Matches </label>
            <input type="text" name="matches" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="goal">Goals </label>
            <input type="text" name="goal" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="assist">Assists </label>
            <input type="text" name="assist" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="type">Position </label>
            <input type="text" name="type" class="form-control" required>
</div>
<br>
<input type="submit" name="submitBMD" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }
        ?>
        <?php
        if (isset($_POST['forward'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image </label>
            <input type="file" name="image" class="form-control" accept=".jpg,.png" required>
</div>
<br>
<div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="matches">Matches </label>
            <input type="text" name="matches" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="goal">Goals </label>
            <input type="text" name="goal" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="assist">Assists </label>
            <input type="text" name="assist" class="form-control" required>
</div>
<br>
<br>
<div class="form-group">
            <label for="type">Position </label>
            <input type="text" name="type" class="form-control" required>
</div>
<br>
<input type="submit" name="submitBFD" Value="Add" class="btn1">
</form>
</div>
</div>
print;
        }
        ?>
        <?php
        if (isset($_POST['manager'])) {
            echo <<<print
    <div class="container">
        <div class="col-8">
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Image </label>
            <input type="file" name="image" class="form-control" accept=".jpg,.png" required>
</div>
<br>
<div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="name" class="form-control" required>
</div>
<br>
<div class="form-group">
            <label for="matches">Matches </label>
            <input type="text" name="matches" class="form-control" required>
</div>
<br>
<input type="submit" name="submitMN" Value="Add" class="btn1">
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
</body>
</html>
