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
  <title>Teams</title>
  <link rel="stylesheet" href="style.css">



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    .gA1 {
      transition: 0.5s;
    }

    .gA1:hover {
      transform: scale(1.2);
      z-index: 2;
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

<body style="background-color: #4b0082;">
  <nav>
    <a href="./admindashboard.php"><img src="logo/admin.png" alt=""></a>
    <h1>Admin</h1>
  </nav>
  <main class="bg-light">

    <div class="container pt-5">
      <div class="row g-4" style="display: flex">
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="btnforbrazil.php"><img src="flag/bra.png" alt="" width="100%" height="10%"
                  class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Brazil</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/arg.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Argentina</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/bel.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Belgium</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/fra.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">France</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/cro.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Croatia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/mor.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Morocco</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/eng.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">England</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/japan.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Japan</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ger.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Germany</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/kor.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">South Korea</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/neth.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Netherlands</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/aus.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Australia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/mex.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Mexico</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/iran.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Iran</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/pol.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Poland</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/por.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Portugal</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/saudi.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Saudi Arabia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/sen.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Senegal</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/wales.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Wales</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/uru.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Uruguay</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/swit.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Switzerland</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/spaine.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Spain</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/tuni.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Tunisia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/qatar.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Qatar</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ghana.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Ghana</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/costa.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Costa Rica</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ecu.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Ecuador</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/ser.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Serbia</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/usa.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">USA</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/cam.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Cameroon</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/den.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Denmark</h4>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <div class="gA1">
              <a href="#"><img src="flag/can.png" alt="" width="100%" height="10%" class="p-1 border bg-dark"></a>
            </div>
            <h4 style="color:black ; text-align:center;">Canada</h4>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
