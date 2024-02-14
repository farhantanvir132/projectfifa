<?php
require('dbcon.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ===== bootstrap CSS ===== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="stylecopyx.css">
  <link rel="stylesheet" href="login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <link rel="stylesheet" href="loading.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="footer.css">
  <title>Document</title>


  <style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .group {
      display: flex;

    }

    body {
      background-color: white;
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

  <main>
    <div class="gro">
      <br>
    </div>
    <div style="margin-top: 40px; margin-bottom: 70px;" class="container">
      <div class="row g-5">
        <div class="col-6">
          <div style="border-radius:10px; background-color:snow" class="p-3 border hov ">
            <div>
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP A
                  <hr>
                  </h1>
              </div>
              <table class=" table table-hover">
                <tr class="tab">
                  <th>Team</th>
                  <th>MP</th>
                  <th>L</th>
                  <th>D</th>
                  <th>W</th>
                  <th>Pts</th>

                </tr>
                <?php
                $query = "SELECT * FROM `groupa` ORDER BY `Pts` DESC";
                $result = mysqli_query($con, $query);
                $fetchsrc = FETCH_SRC;
                while ($fetch = mysqli_fetch_assoc($result)) {
                  echo <<<print
                                <tr>
                                <td class="group"><img src="$fetchsrc$fetch[flag]" alt="" width="27px" height="12%">
                                <h5 style="padding-left: 10px; color:black ">$fetch[team]</h5></td>
                                <td>$fetch[mp]</td>
                                <td>$fetch[L]</td>
                                <td>$fetch[D]</td>
                                <td>$fetch[W]</td>
                                <td>$fetch[Pts]</td>
                                </tr>
                                print;
                }
                ?>
              </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div style="border-radius:10px; background-color:snow" class="p-3 border hov ">
            <div>
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP B
                  <hr>
                  </h1>
              </div>
              <table class=" table table-hover">
                <tr class="tab">
                  <th>Team</th>
                  <th>MP</th>
                  <th>L</th>
                  <th>D</th>
                  <th>W</th>
                  <th>Pts</th>

                </tr>
                <?php
                $query1 = "SELECT * FROM `groupb` ORDER BY `Pts` DESC";
                $result1 = mysqli_query($con, $query1);
                $fetchsrc1 = FETCH_SRC;
                while ($fetch1 = mysqli_fetch_assoc($result1)) {
                  echo <<<print
                                <tr>
                                <td class="group"><img src="$fetchsrc1$fetch1[flag]" alt="" width="27px" height="12%">
                                <h5 style="padding-left: 10px; color:black ">$fetch1[team]</h5></td>
                                <td>$fetch1[mp]</td>
                                <td>$fetch1[L]</td>
                                <td>$fetch1[D]</td>
                                <td>$fetch1[W]</td>
                                <td>$fetch1[Pts]</td>
                                </tr>
                                print;
                }
                ?>
              </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div style="border-radius:10px; background-color:snow" class="p-3 border hov ">
            <div>
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP C
                  <hr>
                  </h1>
              </div>
              <table class=" table table-hover">
                <tr class="tab">
                  <th>Team</th>
                  <th>MP</th>
                  <th>L</th>
                  <th>D</th>
                  <th>W</th>
                  <th>Pts</th>

                </tr>
                <?php
                $query2 = "SELECT * FROM `groupc` ORDER BY `Pts` DESC";
                $result2 = mysqli_query($con, $query2);
                $fetchsrc2 = FETCH_SRC;
                while ($fetch2 = mysqli_fetch_assoc($result2)) {
                  echo <<<print
                                <tr>
                                <td class="group"><img src="$fetchsrc2$fetch2[flag]" alt="" width="27px" height="12%">
                                <h5 style="padding-left: 10px; color:black ">$fetch2[team]</h5></td>
                                <td>$fetch2[mp]</td>
                                <td>$fetch2[L]</td>
                                <td>$fetch2[D]</td>
                                <td>$fetch2[W]</td>
                                <td>$fetch2[Pts]</td>
                                </tr>
                                print;
                }
                ?>
              </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div style="border-radius:10px; background-color:snow" class="p-3 border hov ">
            <div>
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP D
                  <hr>
                  </h1>
              </div>
              <table class=" table table-hover">
                <tr class="tab">
                  <th>Team</th>
                  <th>MP</th>
                  <th>L</th>
                  <th>D</th>
                  <th>W</th>
                  <th>Pts</th>

                </tr>
                <?php
                $query3 = "SELECT * FROM `groupd` ORDER BY `Pts` DESC";
                $result3 = mysqli_query($con, $query3);
                $fetchsrc3 = FETCH_SRC;
                while ($fetch3 = mysqli_fetch_assoc($result3)) {
                  echo <<<print
                                <tr>
                                <td class="group"><img src="$fetchsrc3$fetch3[flag]" alt="" width="27px" height="12%">
                                <h5 style="padding-left: 10px; color:black ">$fetch3[team]</h5></td>
                                <td>$fetch3[mp]</td>
                                <td>$fetch3[L]</td>
                                <td>$fetch3[D]</td>
                                <td>$fetch3[W]</td>
                                <td>$fetch3[Pts]</td>
                                </tr>
                                print;
                }
                ?>
              </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div style="border-radius:10px; background-color:snow" class="p-3 border hov ">
            <div>
              <div>
                <h3 style="color:#640127; text-align: center; font-weight: bold;">GROUP E
                  <hr>
                  </h1>
              </div>
              <table class=" table table-hover">
                <tr class="tab">
                  <th>Team</th>
                  <th>MP</th>
                  <th>L</th>
                  <th>D</th>
                  <th>W</th>
                  <th>Pts</th>

                </tr>
                <?php
                $query4 = "SELECT * FROM `groupe` ORDER BY `Pts` DESC";
                $result4 = mysqli_query($con, $query4);
                $fetchsrc4 = FETCH_SRC;
                while ($fetch4 = mysqli_fetch_assoc($result4)) {
                  echo <<<print
                                <tr>
                                <td class="group"><img src="$fetchsrc4$fetch4[flag]" alt="" width="27px" height="12%">
                                <h5 style="padding-left: 10px; color:black ">$fetch4[team]</h5></td>
                                <td>$fetch4[mp]</td>
                                <td>$fetch4[L]</td>
                                <td>$fetch4[D]</td>
                                <td>$fetch4[W]</td>
                                <td>$fetch4[Pts]</td>
                                </tr>
                                print;
                }
                ?>
              </table>
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