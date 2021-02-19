<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>VSG CharitAbles</title>
  <link rel="icon" href="Team_VSG_Logo.png" type="image/gif" sizes="16x16">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"   type="text/css"   href="css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VSG CharitAbles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donate.php">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/cc1.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3> </h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc111.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3> </h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3> </h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">

<div class="py-5">
<h2 class="text-center">About us</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12"
<div> <img src="images/cc11.jpg" class="img-fluid aboutimg"> 

</div>
<div class="col-lg-6 col-md-6 col-12"
<h2 class="text-center">VSG CharitAbles</h2>


<p class="py-3">VSG CharitAbles was born on Feburary 10, 2021 out of the belief that equal opportunity is the cornerstone of civilization.
 All human beings must have the same opportunity to succeed in life, irrespective of the circumstances they were born into.</p>
 <a href="about.php" class="btn btn-success"> Check More </a>

</div>
</div>

</div>
</section>

</div>

<section class="my-5">

<div class="py-5">
<h2 class="text-center">Donate us</h2>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12"
<div> <img src="images/donate-1.png" class="img-fluid aboutimg"> 

</div>
<div class="col-lg-6 col-md-6 col-12"
<h2 class="text-center">VSG CharitAbles</h2>


<p class="py-3">Nonprofit professionals know that every penny counts when it comes to charitable donations,
 but the average donor may think that they can’t make an impact with just a few bucks.
</br>“Will you make a small gift today?”

</br>“A small donation will feed a child for several days.”</br></br>
 
 <a class="btn btn-success" href="https://www.instamojo.com/@yashjain314" 
  target="popup" 
  onclick="window.open('https://www.instamojo.com/@yashjain314','popup','width=400,height=500'); return false;"> Donate VSG CharitAbles </a>

</div>
</div>

</div>
</section>

<section class="my-5">

<div class="py-5">
<h2 class="text-center">Contact Us</h2>
</div>

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">

  <div class="form-group">
    <label>Full name</label>
    <input type="text" name="user" autocomplete="off" class="form-control" >
</div>

<div class="form-group">
    <label>Email Id</label>
    <input type="email" name="email" autocomplete="off" class="form-control" >
</div>

<div class="form-group">
    <label>Mobile Number with country code (except +) </label>
    <input type="number" name="mobile" autocomplete="off" class="form-control" >
</div>

<div class="form-group">
    <label>Comments</label>
    <textarea class="form-control" name="comments"></textarea>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
</section>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

<footer>
  <p class="p-3 bg-dark text-white text-center"> <a href="about.php" style="text-decoration:none; color:white">About </a> • <a href="donate.php" style="text-decoration:none; color:white"> Donate </a> • <a href="contact.php" style="text-decoration:none; color:white"> Contact</a>
  </br> <a href="index.php" style="text-decoration:none; color:white">@VSGCharitAbles</a> • <a href="about.php" style="text-decoration:none; color:white">Designed by</a> <a href="https://in.linkedin.com/in/yjain022" style="text-decoration:none; color:red" onclick="window.open('https://in.linkedin.com/in/yjain022','popup','width=600,height=600'); return false;">Yash Jain</a></p>
</footer>

</html>