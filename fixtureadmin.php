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
            top: 75%;
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
            padding:   15px;
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
            top: 97%;
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
        <a href="admindashboard.php"><img src="logo/admin.png" alt=""></a>
        <h1>Admin</h1>
    </nav>
    <div class="container_main">
        <?php
        if (isset($_POST['groupstage'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <label for="flag">Flag1 </label>
                        <input type="file" name="flagone" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Flag2 </label>
                        <input type="file" name="flagtwo" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Group Name </label>
                        <input type="text" name="groupname" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name1 </label>
                        <input type="text" name="teamone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name2 </label>
                        <input type="text" name="teamtwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score1 </label>
                        <input type="text" name="scoreone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score2 </label>
                        <input type="text" name="scoretwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Time </label>
                        <input type="text" name="tm" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Date </label>
                        <input type="text" name="dt" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                  <label for="status">Status</label>
                 <input type="text" name="status" class="form-control">
                 </div>
                   <br>
                   
                    <div class="form-group">
                    <label for="wp1">Wining Prediction of Team 1</label>
                    <input type="text" name="wp1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="drw">Draw Chance</label>
                    <input type="text" name="drw" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="wp2">Wining Prediction of Team 2</label>
                    <input type="text" name="wp2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" class="form-control">
                    </div>
                    <br>
                <br>
                    <br>
                    <br>
                    <input type="submit" name="submitfixture" Value="Add" class="btn1">
                </form>
            </div>
        </div>
    </div>
print;


        }
        ?>
        <?php
        if (isset($_POST['knockoutstage'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
                        <label for="flag">Flag1 </label>
                        <input type="file" name="flagone" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Flag2 </label>
                        <input type="file" name="flagtwo" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name1 </label>
                        <input type="text" name="teamone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name2 </label>
                        <input type="text" name="teamtwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score1 </label>
                        <input type="text" name="scoreone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score2 </label>
                        <input type="text" name="scoretwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Time </label>
                        <input type="text" name="tm" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Date </label>
                        <input type="text" name="dt" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="status">Status</label>
                   <input type="text" name="status" class="form-control">
                   </div>
                     <br>
                    <div class="form-group">
                    <label for="wp1">Wining Prediction of Team 1</label>
                    <input type="text" name="wp1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="drw">Draw Chance</label>
                    <input type="text" name="drw" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="wp2">Wining Prediction of Team 2</label>
                    <input type="text" name="wp2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 1</label>
                    <input type="text" name="sog1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 2</label>
                    <input type="text" name="sog2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="submitfixture1" Value="Add" class="btn1">
                </form>
            </div>
        </div>
    </div>
print;
        }
        ?>
        <?php
        if (isset($_POST['quarterfinal'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
                        <label for="flag">Flag1 </label>
                        <input type="file" name="flagone" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Flag2 </label>
                        <input type="file" name="flagtwo" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name1 </label>
                        <input type="text" name="teamone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name2 </label>
                        <input type="text" name="teamtwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score1 </label>
                        <input type="text" name="scoreone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score2 </label>
                        <input type="text" name="scoretwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Time </label>
                        <input type="text" name="tm" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Date </label>
                        <input type="text" name="dt" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="status">Status</label>
                   <input type="text" name="status" class="form-control">
                   </div>
                     <br>
                    <div class="form-group">
                    <label for="wp1">Wining Prediction of Team 1</label>
                    <input type="text" name="wp1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="drw">Draw Chance</label>
                    <input type="text" name="drw" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="wp2">Wining Prediction of Team 2</label>
                    <input type="text" name="wp2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 1</label>
                    <input type="text" name="sog1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 2</label>
                    <input type="text" name="sog2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="submitfixture2" Value="Add" class="btn1">
                </form>
            </div>
        </div>
    </div>
print;
        }
        ?>
        <?php
        if (isset($_POST['semifinal'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
                        <label for="flag">Flag1 </label>
                        <input type="file" name="flagone" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Flag2 </label>
                        <input type="file" name="flagtwo" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name1 </label>
                        <input type="text" name="teamone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name2 </label>
                        <input type="text" name="teamtwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score1 </label>
                        <input type="text" name="scoreone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score2 </label>
                        <input type="text" name="scoretwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Time </label>
                        <input type="text" name="tm" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Date </label>
                        <input type="text" name="dt" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="status">Status</label>
                   <input type="text" name="status" class="form-control">
                   </div>
                     <br>
                    <div class="form-group">
                    <label for="wp1">Wining Prediction of Team 1</label>
                    <input type="text" name="wp1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="drw">Draw Chance</label>
                    <input type="text" name="drw" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="wp2">Wining Prediction of Team 2</label>
                    <input type="text" name="wp2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 1</label>
                    <input type="text" name="sog1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 2</label>
                    <input type="text" name="sog2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" class="form-control">
                    </div>
                    <br>
                    <br>

                    <br>
                    <input type="submit" name="submitfixture3" Value="Add" class="btn1">
                </form>
            </div>
        </div>
    </div>
print;
        }
        ?>
        <?php
        if (isset($_POST['final'])) {
            echo <<<print
        <div class="container">
            <div class="col-8">
                <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <br>
                    <br>
                    <br>
                    <br>
                        <label for="flag">Flag1 </label>
                        <input type="file" name="flagone" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="flag">Flag2 </label>
                        <input type="file" name="flagtwo" class="form-control" accept=".jpg,.png,.svg">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name1 </label>
                        <input type="text" name="teamone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Team Name2 </label>
                        <input type="text" name="teamtwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score1 </label>
                        <input type="text" name="scoreone" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Score2 </label>
                        <input type="text" name="scoretwo" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Time </label>
                        <input type="text" name="tm" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="team">Date </label>
                        <input type="text" name="dt" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="status">Status</label>
                   <input type="text" name="status" class="form-control">
                   </div>
                     <br>
                    <div class="form-group">
                    <label for="wp1">Wining Prediction of Team 1</label>
                    <input type="text" name="wp1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="drw">Draw Chance</label>
                    <input type="text" name="drw" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="wp2">Wining Prediction of Team 2</label>
                    <input type="text" name="wp2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 1</label>
                    <input type="text" name="sog1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="sog1">Shots on Goal of Team 2</label>
                    <input type="text" name="sog2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession1">Possession of Team 1</label>
                    <input type="text" name="possession1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="possession2">Possession of Team 2</label>
                    <input type="text" name="possession2" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass1">Pass Accuracy of Team 1</label>
                    <input type="text" name="pass1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="pass2">Pass Accuracy of Team 2</label>
                    <input type="text" name="pass2" class="form-control">
                    </div>
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="submitfixture4" Value="Add" class="btn1">
                </form>
            </div>
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