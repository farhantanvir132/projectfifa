<?php
require('dbcon.php');
$query = "SELECT * FROM `groups`";
$result = mysqli_query($con, $query);
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="loading.css">
  <link rel="stylesheet" href="stylegroup.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  

  <title>Document</title>

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
    </nav>

    <div class="bdy">
      <div class="mdl">
        <img src="" alt="Italian Trulli" width="100%" height="100%">
      </div>
    </div>


  </div>
  <main>
    <div class="gro">
      <br>
    </div>
    <div style="margin-top: 40px; margin-bottom: 70px;" class="container">
      <div class="darkLight-searchBox">
        <div class="dark-light">
        </div>
        <div class="row g-4">
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov ">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP A
                  <hr>
                  </h1>
              </div>
              <?php
              while ($fetch = mysqli_fetch_assoc($result)) {
                echo <<<print
                    <div class="group">
                        <img src="$fetchsrc$fetch[flag]" alt="" width="17%" height="10%">
                        <h3 style="padding-left: 17px; color:#640127;">$fetch[team]</h3>
                    </div>
                    print;
              }
              ?>
            </div>
          </div>

          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP B
                  <hr>
                  </h1>

              </div>
              <div class="group">
                <img src="./logo/eng.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127; ">England</h3>
              </div>
              <div class="group">
                <img src="./logo/iran.png" alt="" width="17%" height="15%">
                <h3 style="padding-left: 17px; color: #640127;;">Iran</h3>
              </div>
              <div class="group">
                <img src="./logo/usa.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127;">USA</h3>
              </div>
              <div class="group">
                <img src="./logo/wales.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Wales</h3>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP C
                  <hr>
                  </h1>
              </div>
              <div class="group">
                <img src="./logo/arg.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Argentina</h3>
              </div>
              <div class="group">
                <img src="./logo/saudi.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Saudi </h3>
              </div>
              <div class="group">
                <img src="./logo/mex.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Mexico</h3>
              </div>
              <div class="group">
                <img src="./logo/pol.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Poland</h3>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP D
                  <hr>
                  </h1>
              </div>
              <div class="group">
                <img src="./logo/fra.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">France</h3>
              </div>
              <div class="group">
                <img src="./logo/aus.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Australia</h3>
              </div>
              <div class="group">
                <img src="./logo/den.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Denmark</h3>
              </div>
              <div class="group">
                <img src="./logo/tui.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Tunisia</h3>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP E
                  <hr>
                  </h1>
              </div>
              <div class="group">
                <img src="./logo/spian.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Spain</h3>
              </div>
              <div class="group">
                <img src="./logo/costa.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Costa Rica</h3>
              </div>
              <div class="group">
                <img src="./logo/ger.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127;">Germany</h3>
              </div>
              <div class="group">
                <img src="./logo/jap.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127;">Japan</h3>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP F
                  <hr>
                  </h1>

              </div>
              <div class="group">
                <img src="./logo/bel.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Belgium</h3>
              </div>
              <div class="group">
                <img src="./logo/can.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127;">Canada</h3>
              </div>
              <div class="group">
                <img src="./logo/mor.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Morocco</h3>
              </div>
              <div class="group">
                <img src="./logo/cro.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color: #640127;">Croatia</h3>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP G
                  <hr>
                  </h1>

              </div>
              <div class="group">
                <img src="./logo/bra.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Brazil</h3>
              </div>
              <div class="group">
                <img src="./logo/serbia.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127;">Serbia</h3>
              </div>
              <div class="group">
                <img src="./logo/swz.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Switzerland</h3>
              </div>
              <div class="group">
                <img src="./logo/cam.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Cameroon</h3>
              </div>
            </div>
          </div>
          <div class="col-3">

            <div style="border-radius:15px; background-color:snow" class="p-3 border hov">
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP H
                  <hr>
                  </h1>

              </div>
              <div class="group">
                <img src="./logo/por.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Portugal</h3>
              </div>
              <div class="group">
                <img src="./logo/gha.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127; ">Ghana</h3>
              </div>
              <div class="group">
                <img src="./logo/uru.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127;">Uruguay</h3>
              </div>
              <div class="group">
                <img src="./logo/korea.png" alt="" width="17%" height="10%">
                <h3 style="padding-left: 17px; color:#640127;">South Korea</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
<br>
<img src="logo/qcup.gif" alt="" width="10%" height="20%" style="float: right; border-radius: 50%;border: 5px solid #56042c;">
<br>
<br>
<br>

<footer>
  <div class="footer">
    <div class="left-col">
      <img src="logo1/logo.jpg" alt="" width="50%" height="90" >
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