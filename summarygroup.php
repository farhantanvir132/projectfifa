<?php
require("dbcon.php");
$query = "SELECT * FROM `groupstage` WHERE id=$_GET[id]";
$result = mysqli_query($con, $query);
$fetch = mysqli_fetch_assoc($result);
$fetchsrc = FETCH_SRC;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== bootstrap CSS ===== -->

  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="stylecopyx.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="stylefixture.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <link rel="stylesheet" href="loading.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .info {
      padding: 15px 170px;
      text-align: center;
      display: table-cell;
      vertical-align: inherit;
      font-weight: bolder;
      font-size: 16px;
      text-align: -internal-center;
      font-family: 'Times New Roman', Times, serif;
    }

    table {
      /* margin-left:auto;
      margin-right:auto; */
      margin-top: 40px;
    }

    .left_info {
      padding-left: 30px;
      text-align: center;
      font-size: 20px;
      font-weight: bolder;

    }

    .right_info {
      padding-right: 40px;
      text-align: center;
      font-size: 20px;
      font-weight: bolder;

    }


    .highlights p {
      padding: 0;
      font-weight: bold;
      text-align: center;
      font-size: 25px;
    }

    .image {
      padding: 0;
      margin: 0;
    }

    .image img {
      width: 70%;
      height: 70%;
      position: relative;
      justify-content: center;
      top: 50%;
      left: 15%;
    }

    .parent_div {
      width: 100vw;
      height: 100vh;
      background: white;
      position: relative;
    }

    .child_div {
      padding: 29px;
      color: white;
      width: 55vw;
      height: 150vh;
      border-radius: 1rem;
     
      position: absolute;
      left: 50%;
      top: 80%;
      transform: translate(-50%, -50%);
    }

    .col-3 {

      padding: 29px;
      color: white;
      width: 55vw;
      height: 150vh;
      border-radius: 1rem;
      
      position: absolute;
      left: 50%;
      top: 100%;
      padding-bottom: 80%;
      transform: translate(-50%, -50%);
    }

    .stats {
      position: relative;
      top: 30%;
      color:#640127 ;
    }
    .stats1 {
      position: relative;
      top: 10%;
      color:#640127 ;
    }
    .highlights {
      position: relative;
      top: 30%;
    }

    .date {
      width: 500px;
      position: absolute;
      left: 1%;
      top: -1%;
      color: white;
    }

    .details img {
      width: 60%;
      height: 60%;
      padding-top: 29px;
    }

    .details p {
      width: 50%;
    }

    /* .details{
      position: absolute;
      display: flex;
      top: 10%;
      justify-content: space-between;
    } */
  </style>


</head>

<body>
  <div class="loading-screen">
    <div class="loading">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="main">
    <nav>
      <div class="nav-bar">
        <a class="navbar-brand" href="#" style="color: white;">
          <img src="logo1/logo.jpg" alt="" width="100%" height="60">
        </a>
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo navLogo"><a href="#"></a></span>

        <div class="menu">
          <div class="logo-toggle">
            <span class="logo"><a href="#"></a></span>
            <i class='bx bx-x siderbarClose'></i>
          </div>

          <ul class="nav-links" style="    margin-top: 17px;">
            <li><a href="index.php">Home</a></li>
            <li><a href="group.php">Groups</a></li>
            <li><a href="teams.php">Teams & Players</a></li>
            <li><a href="standings.php">Standings</a></li>
            <li><a href="fixture&result.php">Fixtures & Results</a></li>
          </ul>
        </div>

        <div class="darkLight-searchBox">
          <div class="dark-light">
            <i class='bx bx-moon moon'></i>
            <i class='bx bx-sun sun'></i>
          </div>

          <div class="searchBox">
            <div class="searchToggle">
              <i class='bx bx-x cancel'></i>
              <i class='bx bx-search search'></i>
            </div>
            <div class="search-field">
              <input type="text" id="search" placeholder="Search...">
              <button onclick="searchOption()"><i class='bx bx-search'></i></a></button>
            </div>


          </div>
          <div class="login">
            <img src="logo/qcup.gif" alt="" width="100%" height="100%" style="border-radius: 50%;">
          </div>

        </div>

      </div>
    </nav>

    <div class="bdy">
      <div class="mdl">
        <img src="" alt="Italian Trulli" width="100%" height="100%">
      </div>
    </div>


  </div>
  <br>

<?php
echo<<<print
  <div class="col-3">
    <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
      <div style="margin-left: -56px;padding-bottom: -10px;">
      <p  style="color:#640127; text-align: left; font-weight: bold;font-size: 14px;">FIFA World Cup 2022. $fetch[dt]</p>
        
      </div>
      <div class="pas" style=" display : flex;">
        <!-- <div  style=" display : flex;"> -->
        <img src="$fetchsrc$fetch[flagone]" alt="" style="padding-top: 35px;" width="17%" height="50%">
        <h3 style="padding-left: 90px;padding-top: 35px; color: #640127;font-size: 45px;">$fetch[scoreone]</h3>
        <!-- </div> -->
        <!-- <div class="groupz" style=" display : flex; "> -->
        <h3 style="padding-left: 93px;padding-top: 35px; color: #640127;font-size: 45px;">-</h3>
        <h3 style="padding-left: 78px;padding-top: 35px; color: #640127;font-size: 45px;">$fetch[scoretwo]</h3>
        <img style="padding-left: 80px;padding-top: 35px" src="$fetchsrc$fetch[flagtwo]" alt="" width="29%" height="80%">

        <!-- </div> -->
      </div>
      <div class="time">
        <p style="padding-left: 225px;padding-top: 10px; color: #640127;font-size: 20px;font-weight:bold">$fetch[status]</p>
      </div>
      <div class="stats1">
        <hr style="color: #640127;">
        <p style="color: #640127;font-size: 30px; text-align:center;padding:0px;">Admin's Prediction</p>
        <hr style="color: #640127;">
        <table>
        <tr>
        <td class="left_info" >  <img src="$fetchsrc$fetch[flagone]" alt="" width="60%" height="80%"></td>
        <td scope="row" class="info"><img src="flag/drawicon.png" alt="" width="20%" height="50%"></th>
        <td class="right_info"><img src="$fetchsrc$fetch[flagtwo]" alt="" width="60%" height="80%"></td>
      </tr>
      <tr>
      <td class="left_info">$fetch[wp1]</td>
      <td scope="row" class="info">$fetch[drw]</th>
      <td class="right_info">$fetch[wp2]</td>
      </tr>
        </table>
      </div>
      <div class="stats">
      <hr style="color: #640127;">
        <table>
          <tr>
            <td class="left_info" >  <img src="$fetchsrc$fetch[flagone]" alt="" width="50%" height="80%"></td>
            <th scope="row" class="info">TEAM STATS</th>
            <td class="right_info"><img src="$fetchsrc$fetch[flagtwo]" alt="" width="50%" height="80%"></td>
          </tr>
          <tr>
            <td class="left_info">$fetch[possession1]</td>
            <th scope="row" class="info">POSSESION</th>
            <td class="right_info">$fetch[possession2]</td>
          </tr>
          <tr>
            <td class="left_info">$fetch[sog1]</td>
            <th scope="row" class="info" >SHOTS [ON GOAL]</th>
            <td class="right_info">$fetch[sog2]</td>
          </tr>
          <tr>
            <td class="left_info">$fetch[pass1]</td>
            <th scope="row" class="info">PASS ACCURACY</th>
            <td class="right_info">$fetch[pass2]</td>
          </tr>
        </table>
      </div>

    </div>
  </div>
  print;
?>
  

























  
  <script>
    $(window).on('load', function() {
      $(".loading-screen").fadeOut(1000);
      $(".body").fadeIn(1000);
    });
  </script>

  <script>
    const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      lg = document.querySelector(".login"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark-mode") {
      body.classList.add("dark");
    }

    // js code to toggle dark and light mode
    modeToggle.addEventListener("click", () => {
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");

      // js code to keep user selected mode even page refresh or file reopen
      if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
      } else {
        localStorage.setItem("mode", "dark-mode");
      }
    });



    // js code to toggle search box
    searchToggle.addEventListener("click", () => {
      searchToggle.classList.toggle("active");
    });


    //   js code to toggle sidebar
    sidebarOpen.addEventListener("click", () => {
      nav.classList.add("active");
    });

    body.addEventListener("click", e => {
      let clickedElm = e.target;

      if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active");
      }
    });
  </script>
  <script>
    function searchOption() {
      var search = document.getElementById('search').value.toUpperCase();
      if (search == "Brazil".toUpperCase()) {
        window.location.href = "brazilplayer.php?";
      } else if (search == "Argentina".toUpperCase()) {
        window.location.href = "arg.html?";
      } else if (search == "Belgium".toUpperCase()) {
        window.location.href = "belgium.html?";
      } else {
        alert("Item Not Found");
        window.location.href = "index.php?";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

<br>
<img src="logo/qcup.gif" alt="" width="10%" height="20%" style="float: right; border-radius: 50%;border: 5px solid #56042c;">
<br>
<br>
<br>



</html>