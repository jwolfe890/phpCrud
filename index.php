<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/custom.css">

    <title>CRUD  APPLICATION -- INDEX PAGE</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand crud" href="#">Navbar</a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div> -->
</nav>

<ul class="nav nav-tabs ml-5 mt-3" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#index" role="tab" data-toggle="tab">Index</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#login" role="tab" data-toggle="tab">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#signup" role="tab" data-toggle="tab">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#admin" role="tab" data-toggle="tab">Admin</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="index">...</div>
  <div role="tabpanel" class="tab-pane fade" id="login">bbb</div>
  <div role="tabpanel" class="tab-pane fade" id="signup">
    <?php include("./user/signup.php"); ?>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="admin">ccc</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>


