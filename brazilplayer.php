<?php
require('dbcon.php');
$query="SELECT * FROM `brazilgk`";
$result=mysqli_query($con,$query);
$fetchsrc=FETCH_SRC;

$query1="SELECT * FROM `brazildf`";
$result1=mysqli_query($con,$query1);
$fetchsrc1=FETCH_SRC;

$query2="SELECT * FROM `brazilmd`";
$result2=mysqli_query($con,$query2);
$fetchsrc2=FETCH_SRC;

$query3="SELECT * FROM `brazilfd`";
$result3=mysqli_query($con,$query3);
$fetchsrc3=FETCH_SRC;

$query4="SELECT * FROM `brazilmn`";
$result4=mysqli_query($con,$query4);
$fetchsrc4=FETCH_SRC;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylecopy.css">
 
  <!-- ===== bootstrap CSS ===== -->
  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<link rel="stylesheet" href="login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<link rel="stylesheet" href="loading.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- ===== Boxicons CSS ===== -->
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<!-- 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 -->

<!-- ===== bootstrap CSS ===== -->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <title>Brazil</title>
  <style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .card {
      box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.5);
      /*transition: 0.3s;*/
      overflow: hidden;
      position: relative;
      border: solid white 0px;
    }

    .card p {
      height: 2px;
      margin-top: 15px;
      margin-bottom: 35px;
      padding: 0px;
      text-align: center;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding-top: 35px;
      /* background-color: #ffd500; */
      background :linear-gradient(to left,#fff,#ffd500,#fff);
    }

    .card-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border: solid white 5px;
    }

    img.card-image {
      height: 300px;
    }

    .info {
      color: white;
      text-align: center;
      font-size: 32px;
      width: 100%;
      height: 100%;
      top: 0;
      right: -100%;
      position: absolute;
      background: #1f3d4738;
      backdrop-filter: blur(8px);
      padding: 2px 16px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: 0.5s;

    }

    .card:hover .info {
      right: 0;
    }
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
         
        
      </div>
    </nav>

    <div class="bdy">
      <div class="mdl">
        <img src="" alt="Italian Trulli" width="100%" height="100%">
      </div>
    </div>


  </div>
  <br>
  <main class="bg-light">
    <div class="navbar">
      <section>
        <div class="banner" style="display: flex; margin-left:15rem">
          <div class="flags">
            <img class="p-3" src="flag/bra.png" alt="" width="100%" height="auto">
          </div>
          <div class="title">
            <span class="p-4" style="text-shadow: 2px 2px green;font-weight: bolder; font-size:50px;">Brazil</span>
          </div>
          <div class="logo d-none d-md-flex">
            <img align="right" class="p-3" src="players/brazil/logo.png" alt="" width="100%" height="150"
              style="padding-left: 100px;float: right;">
          </div>
        </div>
      </section>
    </div>

    <div class="container pt-5" style="background: linear-gradient(to left,#fff,#ffd500,#fff);">
      <div class="row g-4" style="display: flex">
        <h3><br>GOALKEEPER</h3>
        <hr>
        <?php
              while($fetch=mysqli_fetch_assoc($result)){
                echo<<<print
              <div class="col-2">                                       
                  <div class="card"  >
                    <img class="card-image" src="$fetchsrc$fetch[image]" alt="" style="width:100%">
                    <div class="info">
                      <h6><b>Matches: &nbsp; $fetch[matches] </b></h6>
                      <h6><b>Goals saved: &nbsp; $fetch[gs] </b></h6>
                      <h6><b>Position:&nbsp;$fetch[type]</b></h6>

                    </div>
                    <p  class="mx-auto" style="color:black ;" ><b>$fetch[name]</b></p>
                </div>
            </div>
            print;
              }
              ?>
        <div class="row g-4" style="display: flex">
          <h3><br>DEFENDER</h3>
          <hr>
          <?php
              while($fetch1=mysqli_fetch_assoc($result1)){
                echo<<<print
              <div class="col-2">                                       
                  <div class="card">
                    <img class="card-image" src="$fetchsrc1$fetch1[image]" alt="" style="width:100%">
                    <div class="info">
                      <h6><b>Matches: &nbsp; $fetch1[matches] </b></h6>
                      <h6><b>Goals: &nbsp; $fetch1[goal] </b></h6>
                      <h6><b>Assists: &nbsp; $fetch1[assist] </b></h6>
                      <h6><b>Position: &nbsp;$fetch1[type]</b></h6>
                    </div>
                    <p  class="mx-auto" style="color:black ;" ><b>$fetch1[name]</b></p>
                </div>
            </div>
            print;
              }
              ?>
          <div class="row g-4" style="display:flex">
            <h3><br>MIDFIELDER</h3>
            <hr>
            <?php
              while($fetch2=mysqli_fetch_assoc($result2)){
                echo<<<print
              <div class="col-2">                                       
                  <div class="card" >
                    <img class="card-image" src="$fetchsrc2$fetch2[image]" alt="" style="width:100%">
                    <div class="info">
                      <h6><b>Matches: &nbsp; $fetch2[matches] </b></h6>
                      <h6><b>Goals: &nbsp; $fetch2[goal] </b></h6>
                      <h6><b>Assists: &nbsp; $fetch2[assist] </b></h6>
                      <h6><b>Position: &nbsp;$fetch2[type]</b></h6>
                    </div>
                    <p  class="mx-auto" style="color:black ;" ><b>$fetch2[name]</b></p>
                </div>
            </div>
            print;
              }
              ?>

            <div class="row g-4" style="display: flex">
              <h3><br>FORWARD</h3>
              <hr>
              <?php
              while($fetch3=mysqli_fetch_assoc($result3)){
                echo<<<print
              <div class="col-2">                                       
                  <div class="card" >
                    <img class="card-image" src="$fetchsrc3$fetch3[image]" alt="" style="width:100%">
                    <div class="info">
                      <h6><b>Matches: &nbsp; $fetch3[matches] </b></h6>
                      <h6><b>Goals: &nbsp; $fetch3[goal] </b></h6>
                      <h6><b>Assists: &nbsp; $fetch3[assist] </b></h6>
                      <h6><b>Position: &nbsp;$fetch3[type]</b></h6>
                    </div>
                    <p  class="mx-auto" style="color:black ;" ><b>$fetch3[name]</b></p>
                </div>
            </div>
            print;
              }
              ?>
            </div>
            <div class="row g-4" style="display: flex">
              <h3><br>MANAGER</h3>
              <hr>
              <?php
              $fetch4=mysqli_fetch_assoc($result4);
                echo<<<print
              <div class="col-2">                                       
                  <div class="card" >
                    <img class="card-image" src="$fetchsrc4$fetch4[image]" alt="" style="width:100%">
                    <div class="info">
                      <h6><b>Matches: &nbsp; $fetch4[matches] </b></h6>
                    </div>
                    <p  class="mx-auto" style="color:black ;" ><b>$fetch4[name]</b></p>
                </div>
            </div>
            print;
              
              ?>
            </div>
          </div>

  </main>
  <script>
    $(window).on('load', function () {
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
    function searchOption(){
     var search=document.getElementById('search').value.toUpperCase();
     if(search=="Brazil".toUpperCase()){
     window.location.href="brazilplayer.php?";
     }
     else if(search=="Argentina".toUpperCase()){
     window.location.href="arg.html?";
     }
     else if(search=="Brazil".toUpperCase()){
     window.location.href="belgium.html?";
     }
     else{
      alert("Item Not Found");
      window.location.href="index.php?";
     }
    }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>
