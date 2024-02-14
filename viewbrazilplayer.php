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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
.group{
            display: flex;
    
        }
        body{
           background-size: 120%;
        }
        hr{
            font-weight:bold;
            color: #640127;
        }
        .gro{
            font-weight:bold;
            color:snow;
            margin-top: 30px;
            text-align: right;
            padding-right:130px ;
            font-family:cursive
        }
        main{
            background-size: 1100px;
        }
        .foot{
         height: 70px;
         background-color:#4b0082;
        }
    .top{
       padding-top: 17px;
    }
     .top a{
      color:beige;
      background-color: transparent;
      text-decoration: none;
      font-size: larger;
      background-attachment: fixed;
        }
        .top a:hover{
      color:rgb(148, 255, 86);
      background-color: transparent;
      text-decoration: underline;
        }
        .hov{
            box-sizing: border-box;
            box-shadow: 0px 7px 7px black;
            transition: 0.5s ease-in-out;
        }
        .hov:hover{
            transform:translateY(15px);
    
        }
        table th, td{
            font-size: large;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .tab{
            background-color:#640127;
            color: snow;
        }
        table th{
            color: snow;
        }
        .tab1{
            background-color: rgba(238, 231, 231, 0.945);
            border: 0.5px slategrey;
        }
    
        
        </style>
</head>
<body>
    <div style="margin-top: 40px; margin-bottom: 70px;" class="container">
    <div>
    <h3 style="color:#640127; text-align: center; font-weight: bold;">GOAL KEPEERS<hr></h1>
    </div>
                       <div>
                        <table  class=" table table-hover text-center">
                         <tr class="tab">
                                <th>Image</th>
                                <th>Player Name</th>
                                <th>Matches</th>
                                <th>Goal Saved</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                               $query="SELECT * FROM `brazilgk`";
                               $result=mysqli_query($con,$query);
                               $fetchsrc=FETCH_SRC;
                               while($fetch=mysqli_fetch_assoc($result)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc$fetch[image]" width="90px" height="20%"></td>
                                <td>$fetch[name]</td>
                                <td>$fetch[matches]</td>
                                <td>$fetch[gs]</td>
                                <td>$fetch[type]</td>
                                <td>
                                <a href="viewplayer.php? id=$fetch[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                <button onclick="confirm_delete($fetch[id])" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
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
    <h3 style="color:#640127; text-align: center; font-weight: bold;">DEFENDERS<hr></h1>
    </div>
                       <div>
                        <table  class=" table table-hover text-center">
                         <tr class="tab">
                                <th>Image</th>
                                <th>Player Name</th>
                                <th>Matches</th>
                                <th>Goals</th>
                                <th>Assists</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                               $query1="SELECT * FROM `brazildf`";
                               $result1=mysqli_query($con,$query1);
                               $fetchsrc1=FETCH_SRC;
                               while($fetch1=mysqli_fetch_assoc($result1)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc1$fetch1[image]" width="90px" height="20%"></td>
                                <td>$fetch1[name]</td>
                                <td>$fetch1[matches]</td>
                                <td>$fetch1[goal]</td>
                                <td>$fetch1[assist]</td>
                                <td>$fetch1[type]</td>
                                <td>
                                <a href="viewplayer1.php? id=$fetch1[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                <button onclick="confirm_delete1($fetch1[id])" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
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
    <h3 style="color:#640127; text-align: center; font-weight: bold;">MID FIELDERS<hr></h1>
    </div>
                       <div>
                        <table  class=" table table-hover text-center">
                         <tr class="tab">
                                <th>Image</th>
                                <th>Player Name</th>
                                <th>Matches</th>
                                <th>Goals</th>
                                <th>Assists</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                               $query2="SELECT * FROM `brazilmd`";
                               $result2=mysqli_query($con,$query2);
                               $fetchsrc2=FETCH_SRC;
                               while($fetch2=mysqli_fetch_assoc($result2)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc2$fetch2[image]" width="90px" height="20%"></td>
                                <td>$fetch2[name]</td>
                                <td>$fetch2[matches]</td>
                                <td>$fetch2[goal]</td>
                                <td>$fetch2[assist]</td>
                                <td>$fetch2[type]</td>
                                <td>
                                <a href="viewplayer2.php? id=$fetch2[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                <button onclick="confirm_delete2($fetch2[id])" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
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
    <h3 style="color:#640127; text-align: center; font-weight: bold;">FORWARDS<hr></h1>
    </div>
                       <div>
                        <table  class=" table table-hover text-center">
                         <tr class="tab">
                                <th>Image</th>
                                <th>Player Name</th>
                                <th>Matches</th>
                                <th>Goals</th>
                                <th>Assists</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                               $query3="SELECT * FROM `brazilfd`";
                               $result3=mysqli_query($con,$query3);
                               $fetchsrc3=FETCH_SRC;
                               while($fetch3=mysqli_fetch_assoc($result3)){
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc3$fetch3[image]" width="90px" height="20%"></td>
                                <td>$fetch3[name]</td>
                                <td>$fetch3[matches]</td>
                                <td>$fetch3[goal]</td>
                                <td>$fetch3[assist]</td>
                                <td>$fetch3[type]</td>
                                <td>
                                <a href="viewplayer3.php? id=$fetch3[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                <button onclick="confirm_delete3($fetch3[id])" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
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
    <h3 style="color:#640127; text-align: center; font-weight: bold;">MANAGER<hr></h1>
    </div>
                       <div>
                        <table  class=" table table-hover text-center">
                         <tr class="tab">
                                <th>Image</th>
                                <th>Name</th>
                                <th>Matches</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                               $query4="SELECT * FROM `brazilmn`";
                               $result4=mysqli_query($con,$query4);
                               $fetchsrc4=FETCH_SRC;
                               $fetch4=mysqli_fetch_assoc($result4);
                               echo<<<print
                                <tr class="tab1 align-middle">
                                <td><img src="$fetchsrc4$fetch4[image]" width="90px" height="20%"></td>
                                <td>$fetch4[name]</td>
                                <td>$fetch4[matches]</td>
                                <td>
                                <a href="editmanager.php? id=$fetch4[id]" class="btn  btn-warning "><i class="bi bi-pencil-square"></i></a>
                                <button onclick="confirm_delete4($fetch4[id])" class="btn  btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            print;
                               
                              ?> 
                           
                          </table>
                      </div>
                      <br>
                      <br>
                            </div>


                            <script>
                        function confirm_delete(id){

                            if(confirm("Are you sure you want to delete?")){
                                window.location.href="edit.php?id="+id;
                            }
                        }
                        
                        function confirm_delete1(id){

if(confirm("Are you sure you want to delete?")){
    window.location.href="edit.php?iddf="+id;
}
}
function confirm_delete2(id){

if(confirm("Are you sure you want to delete?")){
    window.location.href="edit.php?idmd="+id;
}
}
function confirm_delete3(id){

if(confirm("Are you sure you want to delete?")){
    window.location.href="edit.php?idfd="+id;
}
}
function confirm_delete4(id){

if(confirm("Are you sure you want to delete?")){
    window.location.href="edit.php?idmn="+id;
}
}

 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</body>
</html>