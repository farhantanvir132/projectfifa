<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teams</title>
  

  <link rel="stylesheet" href="loading.css">
  <!-- ===== bootstrap CSS ===== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="stylecopyxx.css">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="login.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


  <link rel="stylesheet" href="loading.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- ===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="footer.css">
  <style>
    .gA1 {
      transition: 0.5s;
    }

    .gA1:hover {
      transform: scale(1.2);
      z-index: 2;
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

  <main >
    <div style="margin-top: 50px;" class="container pt-5">
      <div class="row g-4" style="display: flex">
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="brazilplayer.php"><img src="flag/bra.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Brazil</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="arg.html"><img src="flag/arg.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Argentina</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="belgium.html"><img src="flag/bel.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Belgium</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/fra.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">France</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/cro.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Croatia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/mor.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Morocco</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/eng.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">England</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/japan.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Japan</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ger.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Germany</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/kor.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">South Korea</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/neth.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Netherlands</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/aus.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Australia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/mex.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Mexico</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/iran.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Iran</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/pol.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Poland</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/por.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Portugal</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/saudi.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Saudi Arabia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/sen.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Senegal</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/wales.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Wales</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/uru.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Uruguay</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/swit.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Switzerland</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/spaine.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Spain</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/tuni.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Tunisia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/qatar.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Qatar</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ghana.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Ghana</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/costa.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Costa Rica</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ecu.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Ecuador</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ser.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Serbia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/usa.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">USA</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/cam.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Cameroon</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/den.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Denmark</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/can.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="text-shadow: 2px 2px white;color:black ; text-align:center;">Canada</h4>
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