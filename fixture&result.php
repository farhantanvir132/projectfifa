<?php
require("dbcon.php");

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
     a{
     text-decoration:none;

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
  $query = "SELECT * FROM `groupstage`";
  $result = mysqli_query($con, $query);
  $fetchsrc = FETCH_SRC;
  while ($fetch = mysqli_fetch_assoc($result)) {
    echo <<<print
           <a href="summarygroup.php? id=$fetch[id]"><div class="tmDiv">
            <br>
            <br>
            <p style= " text-shadow: 2px 2px white;font-size: 18.5px" >Group Stage · $fetch[dt]</p>
            <div class="ListGroup">
                <div class="listLeft">
                    <ul>
                        <li>$fetch[groupname]</li>
                        <li>
                            <img src="$fetchsrc$fetch[flagone]">
                            <span>$fetch[teamone]</span>
                        </li>
                        <li>
                            <img src="$fetchsrc$fetch[flagtwo]">
                            <span>$fetch[teamtwo]</span>
                        </li>
                        <div class=" score">
                            <span> $fetch[scoreone] </span>
                        </div>
                        <div class="score2">
                            <span> $fetch[scoretwo] </span>
                        </div>
                        <div class="TimeAndDate">
                            <p style="color:#640127; 
                            text-align: center; font-weight: bold;"> $fetch[tm]
                            <br>
                            $fetch[status]
                                        </p>
                        </div>
                    </ul>
                </div>
                </div>
                <div>
                </a>
        print;
  }
  ?>
  <?php
  $query = "SELECT * FROM `knockoutstage`";
  $result = mysqli_query($con, $query);
  $fetchsrc = FETCH_SRC;
  while ($fetch = mysqli_fetch_assoc($result)) {
    echo <<<print
           <a href="summaryknockout.php? id=$fetch[id]"><div class="tmDiv">
            <br>
            <br>
            <p style= " text-shadow: 2px 2px white;font-size: 18.5px" >Knockout Stage · $fetch[dt]</p>
            <div class="ListGroup">
                <div class="listLeft">
                    <ul>
                        <li></li>
                        <li>
                            <img src="$fetchsrc$fetch[flagone]">
                            <span>$fetch[teamone]</span>
                        </li>
                        <li>
                            <img src="$fetchsrc$fetch[flagtwo]">
                            <span>$fetch[teamtwo]</span>
                        </li>
                        <div class=" score">
                            <span> $fetch[scoreone] </span>
                        </div>
                        <div class="score2">
                            <span> $fetch[scoretwo] </span>
                        </div>
                        <div class="TimeAndDate">
                            <p style="color:#640127; 
                            text-align: center; font-weight: bold;"> $fetch[tm]
                            <br>
                            $fetch[status]
                                        </p>
                        </div>
                    </ul>
                </div>
                </div>
                <div>
                </a>
        print;
  }
  ?>
 <?php
  $query = "SELECT * FROM `quarterfinal`";
  $result = mysqli_query($con, $query);
  $fetchsrc = FETCH_SRC;
  while ($fetch = mysqli_fetch_assoc($result)) {
    echo <<<print
           <a href="summaryquarter.php? id=$fetch[id]"><div class="tmDiv">
            <br>
            <br>
            <p style= " text-shadow: 2px 2px white;font-size: 18.5px" >Quarter Final · $fetch[dt]</p>
            <div class="ListGroup">
                <div class="listLeft">
                    <ul>
                        <li></li>
                        <li>
                            <img src="$fetchsrc$fetch[flagone]">
                            <span>$fetch[teamone]</span>
                        </li>
                        <li>
                            <img src="$fetchsrc$fetch[flagtwo]">
                            <span>$fetch[teamtwo]</span>
                        </li>
                        <div class=" score">
                            <span> $fetch[scoreone] </span>
                        </div>
                        <div class="score2">
                            <span> $fetch[scoretwo] </span>
                        </div>
                        <div class="TimeAndDate">
                            <p style="color:#640127; 
                            text-align: center; font-weight: bold;"> $fetch[tm]
                            <br>
                            $fetch[status]
                                        </p>
                        </div>
                    </ul>
                </div>
                </div>
                <div>
                </a>
        print;
  }
  ?>
 <?php
  $query = "SELECT * FROM `semifinal`";
  $result = mysqli_query($con, $query);
  $fetchsrc = FETCH_SRC;
  while ($fetch = mysqli_fetch_assoc($result)) {
    echo <<<print
           <a href="summarysemi.php? id=$fetch[id]"><div class="tmDiv">
            <br>
            <br>
            <p style= " text-shadow: 2px 2px white;font-size: 18.5px" >Semi Final · $fetch[dt]</p>
            <div class="ListGroup">
                <div class="listLeft">
                    <ul>
                        <li></li>
                        <li>
                            <img src="$fetchsrc$fetch[flagone]">
                            <span>$fetch[teamone]</span>
                        </li>
                        <li>
                            <img src="$fetchsrc$fetch[flagtwo]">
                            <span>$fetch[teamtwo]</span>
                        </li>
                        <div class=" score">
                            <span> $fetch[scoreone] </span>
                        </div>
                        <div class="score2">
                            <span> $fetch[scoretwo] </span>
                        </div>
                        <div class="TimeAndDate">
                            <p style="color:#640127; 
                            text-align: center; font-weight: bold;"> $fetch[tm]
                            <br>
                            $fetch[status]
                                        </p>
                        </div>
                    </ul>
                </div>
                </div>
                <div>
                </a>
        print;
  }
  ?>
 <?php
  $query = "SELECT * FROM `final`";
  $result = mysqli_query($con, $query);
  $fetchsrc = FETCH_SRC;
  while ($fetch = mysqli_fetch_assoc($result)) {
    echo <<<print
           <a href="summaryfinal.php? id=$fetch[id]"><div class="tmDiv">
            <br>
            <br>
            <p style= " text-shadow: 2px 2px white;font-size: 18.5px" >Final · $fetch[dt]</p>
            <div class="ListGroup">
                <div class="listLeft">
                    <ul>
                        <li></li>
                        <li>
                            <img src="$fetchsrc$fetch[flagone]">
                            <span>$fetch[teamone]</span>
                        </li>
                        <li>
                            <img src="$fetchsrc$fetch[flagtwo]">
                            <span>$fetch[teamtwo]</span>
                        </li>
                        <div class=" score">
                            <span> $fetch[scoreone] </span>
                        </div>
                        <div class="score2">
                            <span> $fetch[scoretwo] </span>
                        </div>
                        <div class="TimeAndDate">
                            <p style="color:#640127; 
                            text-align: center; font-weight: bold;"> $fetch[tm]
                            <br>
                            $fetch[status]
                                        </p>
                        </div>
                    </ul>
                </div>
                </div>
                <div>
                </a>
        print;
  }
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

<footer style="    margin-left: -260px;margin-right: -260px;">
  <div class="footer">
    <div class="left-col">
      <img src="logo1/logo.jpg" alt="" width="50%" height="90">
      <div class="social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <p class="rights-text" style="color: white;">© 2023 Created By Arfan, Farhan, Sadia & Shahnawaj</p>
    </div>

    <div class="rc">
      <h1 style="color: white;">About</h1>
      <div class="border"></div>
      <p style="color: white;">This website shows all necessary information about FIFA world cup 2022</p>

    </div>
    
  </div>
</footer>

</html>