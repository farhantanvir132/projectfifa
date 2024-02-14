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
                    <th>Actions</th>
                </tr>
                <?php
                               $query="SELECT * FROM `groups`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[flag]" width="40px" height="13%"></td>
                                <td>$fetch[team]</td>
                                <td>
                                <a href="viewgrpedit.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            
                            print;
                               }

                              ?>

            </table>
        </div>
    </div>
