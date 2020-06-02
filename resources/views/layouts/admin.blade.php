<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>BURGERBAR</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
     body{

            background-image: url("https://wallpapercave.com/wp/wp1874155.jpg");
            -webkit-background-size: cover;
            background-position: center center;
            height: 100%;
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  backdrop-filter: blur(1px);
        }
</style>
</head>
<body>
<div class="bs-example">

<nav class="navbar navbar-expand-lg navbar-dark  static-top" >
  <div class="container" >
    <a class="navbar-brand" href="#">
          <img src="https://s3.amazonaws.com/bucket.leye.co/uploads/2017/06/m-burger@2x.png" height="28" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
          <a class="nav-link" href="/admindash" >Home
                <span class="sr-only">(current)</span>
              </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="/show" >Feedback
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style = "color:black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="/addProducts">Add</a>
          <a class="dropdown-item" href="/ShowProducts">List</a>

      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" style = "color:black" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Staff
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
        <p class="dropdown-item">Add</p>

          <a class="dropdown-item" href="/addKS">kitchen</a>
          <a class="dropdown-item" href="/addDB">Delevery</a>
          <div class="dropdown-divider"></div>
          <p class="dropdown-item">List</p>
          <a class="dropdown-item" href="/KSlist">kitchen</a>
          <a class="dropdown-item" href="/DBlist">Delevery</a>

      </li>
      <li class="nav-item">
          <a class="nav-link" href="/login" style = "color:black">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</div>
<div class="mb-3"></div>
      <div style="width:1300px;margin-left:100px">
      @include ('includes.messages')
      </div>
      @yield('content')
</body>
</html>
