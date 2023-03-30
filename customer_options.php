<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>
    Dabewallah
  </title>
  <link rel="stylesheet" href="Dabewallah.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
    integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Dashboard for customer-->

  <!--Navbar starts-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="dabewallah.php"><img class="home" src="home.png"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#veg_tiffin">Veg Tiffin</a></li>
              <li><a class="dropdown-item" href="#nonveg_tiffin">Non-veg tiffin</a></li>
              <li><a class="dropdown-item" href="#special_tiffin">Special tiffin</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>
  <!--Navbar ends-->

  <!--Service section starts-->
  <div class="container">
    <p class="service_section text-center">Our offerings</p>
    <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
        <img class="service" src="Service.png">;
      </div>
      <div class="col-3">
        
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <a href="#veg_tiffin"><button class="veg-tiffin">Veg Tiffin</button></a>
      </div>
      <div class="col-4">
        <a  href="#nonveg_tiffin"><button class="nonveg-tiffin">Non-Veg Tiffin</button></a>
      </div>
      <div class="col-4">
        <a href="#special_tiffin"><button class="special-tiffin">Special Tiffin</button></a>
      </div>
    </div>
  </div>
  <!--Service section ends-->
  
  <!--Main container-->
  <div class="container main">
    <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
        <img src="customer_options.png" class="cust_opt">
      </div>
      <div class="col-3">

      </div>
    </div>
  </div>
  <!--Main container ends-->

  <!--Tiffin cards-->
  <div class="container-fluid veg_tiffin" id="veg_tiffin">
    <h1 class="text-center font-about-us text-light mt-4 ">Veg Tiffin</h1>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6 p-3">
        <div class="card ml-n3" style="width: 25rem;margin-left: 114px;">
          <img src="Paneer_tiffin.jpg" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Paneer da zayka</h5>
            <p class="card-text text-center">Will satisfy your paneer cravings</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
      <div class="col-3 p-3">
        <div class="card" style="width: 25rem;margin-left: -95px;">
          <img src="Mumbai_special.png" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title">Mumbai special</h5>
            <p class="card-text text-center">Take a bite out of Mumbai's spicy history</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid nonveg_tiffin" id="nonveg_tiffin">
    <h1 class="text-center font-about-us text-light mt-4 ">Non-veg Tiffin</h1>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6 p-3">
        <div class="card ml-n3" style="width: 25rem;margin-left: 114px;">
          <img src="Chicken_tiffin.png" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title">Chicken lover</h5>
            <p class="card-text text-center">Its finger lickin good</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
      <div class="col-3 p-3">
        <div class="card" style="width: 25rem;margin-left: -95px;">
          <img src="Egg_thali.png" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title">Eggies</h5>
            <p class="card-text text-center">This covers all your protein needs</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid special_tiffin" id="special_tiffin">
    <h1 class="text-center font-about-us text-light mt-4 ">Special Tiffin</h1>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6 p-3">
        <div class="card ml-n3" style="width: 25rem;margin-left: 114px;">
          <img src="Mumbai_special.png" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title">Jain tiffin</h5>
            <p class="card-text text-center">The same deliciousness minus the onion and garlic</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
      <div class="col-3 p-3">
        <div class="card" style="width: 25rem;margin-left: -95px;">
          <img src="misal.jpg" class="card-img-top" height=290 alt="...">
          <div class="card-body">
            <h5 class="card-title">Tarri misal</h5>
            <p class="card-text text-center">You like a challenge don't you</p>
            <button class="try_it">Try it!</Button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!--Tiffin cards end-->

  <!--Footer start-->
  <div class="container-fluid footer p-5 mt-5" id="contact-us">
    <a href="https://developers.google.com/profile/u/TheOnlySoham/dashboard"><img src="google_developer.png"
        class="google_developer"></a>
    <a class="fa fa-linkedin-square linkedin" href="https://www.linkedin.com/in/soham-thodge-515676229/"
      style="font-size:36px;color:white"></a>
    <a href="https://github.com/kronos2003"><img src="github-mark-white.png" class="github"></a>
    <p class="text-center">&copy;Developed and designed by Soham Thodge</p>
    <p class="Endline">Made for achieving no poverty and hunger among the needy</p>
  </div>
  <!--Footer ends-->
</body>