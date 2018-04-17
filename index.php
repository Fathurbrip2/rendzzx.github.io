<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="inc/css/style.css">
    <title>Rendzzx</title>
  </head>
<body>
<!--navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="opacity: 0.8; filter:(opacity=50);">
  <a class="navbar-brand" href="#" style="color: #fff;">Rendzzx</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #fff;"><span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0 btn-group">
      <button type="button" class="btn btn-light dropdown-toggle my-2 my-sm-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
      <div class="dropdown-menu" style="right: 0;left: auto;">
  <form class="px-4 py-3" action="inc/process/loginprocess.php" method="POST">
    <div class="form-group">
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input name="pass" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="inc/signup.php">Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
    </div>
  </div>
</nav>
<!--particles -->
<div>
	<h1 class="text-muted" style="position: absolute; color: #fff;margin-left: 390px; margin-top: 250px; ">This site is under constuction</h1>
  <div id="particles-js">
    
  </div>
</div>
<!--footer -->
<footer class="bgdark footer navbar-fixed-bottom" style="position: absolute; margin-top: 20px; margin-bottom: 0px; padding-bottom: 0px; bottom:0px; width: 100% ; height: 50px;line-height: 50px; background-color: #343a40; opacity: 0.7; filter:(opacity=50);">
  <div class="container" style="padding-left: 5; margin-left: 0;">
    <div class="row">
      <div class="col-sm">
        <span class="text-muted" style="text-align: left;">&copy; Rendy maulana 2018</span>
      </div>
      <div class="col-sm" style="padding-right: 5; margin-right: 0;">
        <p class="text-right" style="color:#6C7079FF;">zzxTech</p>
      </div>
    </div>
  </div>
 </footer>

  <script type="text/javascript" src="inc/js/particles.js"></script>
  <script>
    particlesJS.load('particles-js','inc/json/particles.json',function(){
      console.log('particles.json loaded...')
    });
  </script>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="inc/js/bootstrap.min.js"></script>
  </body>
</html>