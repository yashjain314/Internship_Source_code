<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Contact | VSG CharitAbles</title>
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

<div class="jumbotron">
  <h1>VSG CharitAbles</h1>
  <p>Come, play your part. Come, donate.</p>
</div>

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

</body>

<footer>
  <p class="p-3 bg-dark text-white text-center"> <a href="about.php" style="text-decoration:none; color:white">About </a> • <a href="donate.php" style="text-decoration:none; color:white"> Donate </a> • <a href="contact.php" style="text-decoration:none; color:white"> Contact</a>
  </br> <a href="index.php" style="text-decoration:none; color:white">@VSGCharitAbles</a> • <a href="about.php" style="text-decoration:none; color:white">Designed by</a> <a href="https://in.linkedin.com/in/yjain022" style="text-decoration:none; color:red" onclick="window.open('https://in.linkedin.com/in/yjain022','popup','width=600,height=600'); return false;">Yash Jain</a></p>
</footer>

</html>