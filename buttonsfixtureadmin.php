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
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        .btn1 {
            margin: 10px;
            font-size: 22px;
            font-weight: 500;
            padding: 20px;
            width: 350px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            background: #ebeef1;
            color: black;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
        }

        .btn1:hover {
            transform: scale(1.2);
            z-index: 2;
        }

        nav {
            display: flex;
            font-size: 1rem;
            background-color: #ffd500;
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

    </style>
</head>
<body>
    <main>
        <div>
            <nav>
                <a href="admindashboard.php"><img src="logo/admin.png" alt=""></a>
                <h1>Admin</h1>
            </nav>
        </div>
        <div class="container">
            <form action="fixtureadmin.php" method="post" enctype="multipart/form-data">
                <input class="btn1" type="submit" name="groupstage" value="Group Stage">
                <input class="btn1" type="submit" name="knockoutstage" value="Knockout Stage">
                <input class="btn1" type="submit" name="quarterfinal" value="Quarter Final">
                <input class="btn1" type="submit" name="semifinal" value="Semifinal">
                <input class="btn1" type="submit" name="final" value="Final">
            </form>
        </div>
    </main>
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
