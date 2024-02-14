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
        .contain{
             padding-left:30px;
             
        }

        body {
            background-size: 100%;
        }

        hr {
            font-weight: bold;
            color: #640127;
            width:100%;
        }
        .foot {
            height: 70px;
            background-color: #4b0082;
        }

        .top {
            padding-top: 17px;
        }

        .top a {
            color: beige;
            background-color: transparent;
            text-decoration: none;
            font-size: larger;
            background-attachment: fixed;
        }

        .top a:hover {
            color: rgb(148, 255, 86);
            background-color: transparent;
            text-decoration: underline;
        }

        .hov {
            box-sizing: border-box;
            box-shadow: 0px 7px 7px black;
            transition: 0.5s ease-in-out;
        }

        .hov:hover {
            transform: translateY(15px);

        }

        table th,
        td {
            font-size: large;
            font-family:times new roman     ;
        }

        .tab {
            background-color: #640127;
            color: snow;
        }
        table{

          

        }

        table th {
            color: snow;
        }

        .tab1 {
            background-color: rgba(238, 231, 231, 0.945);
            border: 0.5px slategrey;
        }

        nav {
            display: flex;
            font-size: 1rem;
            background-color: #ffd500;
            height: 5rem;
            align-item: center;
            width:101%;
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
    <nav>
        <a href="./admindashboard.php"><img src="logo/admin.png" alt=""></a>
        <h1>Admin</h1>
    </nav>
    <div style="margin-top: 40px; margin-bottom: 70px;" class="contain">
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP STAGE
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag1</th>
                    <th>Flag2</th>
                    <th>Group</th>
                    <th>Team1</th>
                    <th>Team2</th>
                    <th>Score1</th>
                    <th>Score2</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>SOG T1</th>
                    <th>SOG T2</th>
                    <th>Possession1</th>
                    <th>Possession2</th>
                    <th>PA 1</th>
                    <th>PA 2</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `groupstage`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flagone]" width="30px" height="20%"></td>
                                <td><img src="$fetchsrc$fetch[flagtwo]" width="30px" height="20%"></td>
                                <td>$fetch[groupname]</td>
                                <td>$fetch[teamone]</td>
                                <td>$fetch[teamtwo]</td>
                                <td>$fetch[scoreone]</td>
                                <td>$fetch[scoretwo]</td>
                                <td>$fetch[tm]</td>
                                <td>$fetch[dt]</td>
                                <td>$fetch[status]</td>
                                <td>$fetch[sog1]</td>
                                <td>$fetch[sog2]</td>
                                <td>$fetch[possession1]</td>
                                <td>$fetch[possession2]</td>
                                <td>$fetch[pass1]</td>
                                <td>$fetch[pass2]</td>
                                <td>
                                <a href="viewgroupstage.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">Knockout Stage
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag1</th>
                    <th>Flag2</th>
                    <th>Team1</th>
                    <th>Team2</th>
                    <th>Score1</th>
                    <th>Score2</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>SOG T1</th>
                    <th>SOG T2</th>
                    <th>Possession1</th>
                    <th>Possession2</th>
                    <th>PA 1</th>
                    <th>PA 2</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `knockoutstage`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flagone]" width="30px" height="20%"></td>
                                <td><img src="$fetchsrc$fetch[flagtwo]" width="30px" height="20%"></td>
                                <td>$fetch[teamone]</td>
                                <td>$fetch[teamtwo]</td>
                                <td>$fetch[scoreone]</td>
                                <td>$fetch[scoretwo]</td>
                                <td>$fetch[tm]</td>
                                <td>$fetch[dt]</td>
                                <td>$fetch[status]</td>
                                <td>$fetch[sog1]</td>
                                <td>$fetch[sog2]</td>
                                <td>$fetch[possession1]</td>
                                <td>$fetch[possession2]</td>
                                <td>$fetch[pass1]</td>
                                <td>$fetch[pass2]</td>
                                <td>
                                <a href="viewknockoutstage.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">Quarter Final
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag1</th>
                    <th>Flag2</th>
                    <th>Team1</th>
                    <th>team2</th>
                    <th>score1</th>
                    <th>score2</th>
                    <th>time</th>
                    <th>date</th>
                    <th>Status</th>
                    <th>SOG T1</th>
                    <th>SOG T2</th>
                    <th>Possession1</th>
                    <th>Possession2</th>
                    <th>PA 1</th>
                    <th>PA 2</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `quarterfinal`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flagone]" width="27px" height="10%"></td>
                                <td><img src="$fetchsrc$fetch[flagtwo]" width="27px" height="10%"></td>
                                <td>$fetch[teamone]</td>
                                <td>$fetch[teamtwo]</td>
                                <td>$fetch[scoreone]</td>
                                <td>$fetch[scoretwo]</td>
                                <td>$fetch[tm]</td>
                                <td>$fetch[dt]</td>
                                <td>$fetch[status]</td>
                                <td>$fetch[sog1]</td>
                                <td>$fetch[sog2]</td>
                                <td>$fetch[possession1]</td>
                                <td>$fetch[possession2]</td>
                                <td>$fetch[pass1]</td>
                                <td>$fetch[pass2]</td>
                                
                                <td>
                                <a href="viewquarterfinal.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">Semi Final
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag1</th>
                    <th>Flag2</th>
                    <th>Team1</th>
                    <th>team2</th>
                    <th>score1</th>
                    <th>score2</th>
                    <th>time</th>
                    <th>date</th>
                    <th>Status</th>
                    <th>SOG T1</th>
                    <th>SOG T2</th>
                    <th>Possession1</th>
                    <th>Possession2</th>
                    <th>PA 1</th>
                    <th>PA 2</th>
                   
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `semifinal`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flagone]" width="27px" height="10%"></td>
                                <td><img src="$fetchsrc$fetch[flagtwo]" width="27px" height="10%"></td>
                                <td>$fetch[teamone]</td>
                                <td>$fetch[teamtwo]</td>
                                <td>$fetch[scoreone]</td>
                                <td>$fetch[scoretwo]</td>
                                <td>$fetch[tm]</td>
                                <td>$fetch[dt]</td>
                                <td>$fetch[status]</td>
                                <td>$fetch[sog1]</td>
                                <td>$fetch[sog2]</td>
                                <td>$fetch[possession1]</td>
                                <td>$fetch[possession2]</td>
                                <td>$fetch[pass1]</td>
                                <td>$fetch[pass2]</td>
                               
                                <td>
                                <a href="viewsemifinal.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">Final
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag1</th>
                    <th>Flag2</th>
                    <th>Team1</th>
                    <th>team2</th>
                    <th>score1</th>
                    <th>score2</th>
                    <th>time</th>
                    <th>date</th>
                    <th>Status</th>
                    <th>SOG T1</th>
                    <th>SOG T2</th>
                    <th>Possession1</th>
                    <th>Possession2</th>
                    <th>PA 1</th>
                    <th>PA 2</th>
                  
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `final`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flagone]" width="27px" height="10%"></td>
                                <td><img src="$fetchsrc$fetch[flagtwo]" width="27px" height="10%"></td>
                                <td>$fetch[teamone]</td>
                                <td>$fetch[teamtwo]</td>
                                <td>$fetch[scoreone]</td>
                                <td>$fetch[scoretwo]</td>
                                <td>$fetch[tm]</td>
                                <td>$fetch[dt]</td>
                                <td>$fetch[status]</td>
                                <td>$fetch[sog1]</td>
                                <td>$fetch[sog2]</td>
                                <td>$fetch[possession1]</td>
                                <td>$fetch[possession2]</td>
                                <td>$fetch[pass1]</td>
                                <td>$fetch[pass2]</td>
                               
                                <td>
                                <a href="viewfinal.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</body>
</html>
