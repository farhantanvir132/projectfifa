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
        .group {
            display: flex;

        }

        body {
            background-size: 120%;
        }

        hr {
            font-weight: bold;
            color: #640127;
        }

        .gro {
            font-weight: bold;
            color: snow;
            margin-top: 30px;
            text-align: right;
            padding-right: 130px;
            font-family: cursive
        }

        main {
            background-size: 1100px;
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
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .tab {
            background-color: #640127;
            color: snow;
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
    <div style="margin-top: 40px; margin-bottom: 70px;" class="container">
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP A
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `groupa` ORDER BY `Pts` DESC";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flag]" width="27px" height="10%"></td>
                                <td>$fetch[team]</td>
                                <td>$fetch[mp]</td>
                                <td>$fetch[L]</td>
                                <td>$fetch[D]</td>
                                <td>$fetch[W]</td>
                                <td>$fetch[Pts]</td>
                                <td>
                                <a href="viewedit.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP B
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query1="SELECT * FROM `groupb` ORDER BY `Pts` DESC";
                               $result1=mysqli_query($con,$query1);
                               $fetchsrc1=FETCH_SRC;
                               while($fetch1=mysqli_fetch_assoc($result1)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc1$fetch1[flag]" width="27px" height="10%"></td>
                                <td>$fetch1[team]</td>
                                <td>$fetch1[mp]</td>
                                <td>$fetch1[L]</td>
                                <td>$fetch1[D]</td>
                                <td>$fetch1[W]</td>
                                <td>$fetch1[Pts]</td>
                                <td>
                             <a href="view1edit.php? id=$fetch1[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;
                               }
                              ?>
            </table>
        </div>
        <br><br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP C
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query2="SELECT * FROM `groupc` ORDER BY `Pts` DESC";
                               $result2=mysqli_query($con,$query2);
                               $fetchsrc2=FETCH_SRC;
                               while($fetch2=mysqli_fetch_assoc($result2)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc2$fetch2[flag]" width="27px" height="10%"></td>
                                <td>$fetch2[team]</td>
                                <td>$fetch2[mp]</td>
                                <td>$fetch2[L]</td>
                                <td>$fetch2[D]</td>
                                <td>$fetch2[W]</td>
                                <td>$fetch2[Pts]</td>
                                <td>
                                <a href="view2edit.php? id=$fetch2[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;

                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP D
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                                $query3="SELECT * FROM `groupd` ORDER BY `Pts` DESC";
                               $result3=mysqli_query($con,$query3);
                               $fetchsrc3=FETCH_SRC;
                               while($fetch3=mysqli_fetch_assoc($result3)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc3$fetch3[flag]" width="27px" height="10%"></td>
                                <td>$fetch3[team]</td>
                                <td>$fetch3[mp]</td>
                                <td>$fetch3[L]</td>
                                <td>$fetch3[D]</td>
                                <td>$fetch3[W]</td>
                                <td>$fetch3[Pts]</td>
                                <td>
                                <a href="view3edit.php? id=$fetch3[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;

                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP E
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query4="SELECT * FROM `groupe` ORDER BY `Pts` DESC";
                               $result4=mysqli_query($con,$query4);
                               $fetchsrc4=FETCH_SRC;
                               while($fetch4=mysqli_fetch_assoc($result4)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc4$fetch4[flag]" width="27px" height="10%"></td>
                                <td>$fetch4[team]</td>
                                <td>$fetch4[mp]</td>
                                <td>$fetch4[L]</td>
                                <td>$fetch4[D]</td>
                                <td>$fetch4[W]</td>
                                <td>$fetch4[Pts]</td>
                                <td>
                                <a href="view4edit.php? id=$fetch4[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;

                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP F
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query5="SELECT * FROM `groupf` ORDER BY `Pts` DESC";
                               $result5=mysqli_query($con,$query5);
                               $fetchsrc5=FETCH_SRC;
                               while($fetch5=mysqli_fetch_assoc($result5)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc5$fetch5[flag]" width="27px" height="10%"></td>
                                <td>$fetch5[team]</td>
                                <td>$fetch5[mp]</td>
                                <td>$fetch5[L]</td>
                                <td>$fetch5[D]</td>
                                <td>$fetch5[W]</td>
                                <td>$fetch5[Pts]</td>
                                <td>
                                <a href="view5edit.php? id=$fetch5[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;

                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP G
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query6="SELECT * FROM `groupg` ORDER BY `Pts` DESC";
                               $result6=mysqli_query($con,$query6);
                               $fetchsrc6=FETCH_SRC;
                               while($fetch6=mysqli_fetch_assoc($result6)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc6$fetch6[flag]" width="27px" height="10%"></td>
                                <td>$fetch6[team]</td>
                                <td>$fetch6[mp]</td>
                                <td>$fetch6[L]</td>
                                <td>$fetch6[D]</td>
                                <td>$fetch6[W]</td>
                                <td>$fetch6[Pts]</td>
                                <td>
                                <a href="view6edit.php? id=$fetch6[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            print;

                               }

                              ?>

            </table>
        </div>
        <br>
        <br>
        <div>
            <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP H
                <hr>
                </h1>
        </div>
        <div>
            <table class=" table table-hover text-center">
                <tr class="tab">
                    <th>Flag</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>L</th>
                    <th>D</th>
                    <th>W</th>
                    <th>Pts</th>
                    <th>Actions</th>
                </tr>
                <?php
                               $query7="SELECT * FROM `grouph` ORDER BY `Pts` DESC";
                               $result7=mysqli_query($con,$query7);
                               $fetchsrc7=FETCH_SRC;
                               while($fetch7=mysqli_fetch_assoc($result7)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc7$fetch7[flag]" width="27px" height="10%"></td>
                                <td>$fetch7[team]</td>
                                <td>$fetch7[mp]</td>
                                <td>$fetch7[L]</td>
                                <td>$fetch7[D]</td>
                                <td>$fetch7[W]</td>
                                <td>$fetch7[Pts]</td>
                                <td>
                                <a href="view7edit.php? id=$fetch7[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
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
