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
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
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

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
header('Cache-Control:no-cache, must-revalidate');
?>
    <main>
        <nav>
            <a href="./admindashboard.php"><img src="logo/admin.png" alt=""></a>
            <h1>Admin</h1>
        </nav>
        <div class="container">
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <?php
                if (isset($_POST["point"])) {
                    echo <<<print
                <input class="btn1" type="submit" name="ins" value="Insert into Point table"><br>
            <input class="btn1" type="submit" name="up" value="Update Point table">
            print;
                }
                if (isset($_POST["player"])) {
                    echo <<<print
                <input class="btn1" type="submit" name="ins1" value="Insert players"><br>

            <input class="btn1" type="submit" name="up1" value="Update Players">
            print;
                }
                if (isset($_POST["group"])) {
                    echo <<<print
        
                    <a href="groupform.php?" class="btn1 btn2">Insert Team Into Group</a>
                    <a href="viewgroup.php?" class="btn1 btn2">Update Teams from group</a>
        print;
                }
                if (isset($_POST["fixtures"])) {
                    echo <<<print

                    <input class="btn1" type="submit" name="ins2" value="Insert Match Information">
                    <input class="btn1" type="submit" name="up2" value="Update Match Information">
        print;
                }
                ?>
            </form>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
