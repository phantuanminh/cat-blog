<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/jpg" href="https://image.freepik.com/free-vector/cute-cat-sushi-salmon-cartoon-icon-illustration_138676-2318.jpg"/>
  <title>Cat Daily</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/clean-blog.min.css') }}" rel="stylesheet">
  <link href="{{ asset('./css/froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
    input[type=email]{
      width:100%;
      font-size: 20px;
    }
    .chat-popup {
      display: none;
      width: auto;
      top: 50%;
      bottom: 50%;
      right: 50%;
      left: 50%;
      border: 2px solid #f1f1f1;
      z-index: 9;
    }
    .dropbtn {
      font-size: 12px;
      font-weight: 800;
      letter-spacing: 1px;
      text-transform: uppercase;
      background-color: Transparent;
      background-repeat:no-repeat;
      border: none;
      cursor: pointer;
      overflow: hidden;   
    }

    .dropdown {
      position: relative;
      display: inline-block;
      padding: 0px 0px;
    }

    .dropdown-content {
      font-size: 12px;
      font-weight: 800;
      letter-spacing: 1px;
      text-transform: uppercase;
      display: none;
      position: absolute;
      min-width: 160px;
    }

    .dropdown-content a {
      padding: 18px 18px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {/*background-color: red;*/}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: black;}
    
  </style>

    <script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <script type="text/javascript" src="./js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
    <!-- The script below imports your chosen language for the editor --> 
   <script id="language" src="./js/languages/en_gb.js"></script>
   
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">cat daily</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            if(Request::is('/')){
          ?>
            <li class="nav-item" style="background-color: red">
          <?php
          }
            else{
          ?>
            <li class="nav-item">
          <?php
            }
          ?>  
            <a class="nav-link" href="/">home</a>
          </li>
          <?php
            if(Request::is('blog')){
          ?>
            <li class="nav-item" style="background-color: red">
          <?php
          }
            else{
          ?>
            <li class="nav-item">
          <?php
          }
          ?>
            <a class="nav-link" href="blog">blog</a>
            </li>
          <?php
            if(Request::is('about')){
          ?>
            <li class="nav-item" style="background-color: red">
          <?php
          }
            else{
          ?>
            <li class="nav-item">
          <?php
          }
          ?>
            <a class="nav-link" href="about">about</a>
          </li>
          <?php
            if(Request::is('cafe')){
          ?>
            <li class="nav-item" style="background-color: red">
          <?php
          }
            else{
          ?>
            <li class="nav-item">
          <?php
          }
          ?>
            <a class="nav-link" href="cafe">cafe</a>
          </li>
          <?php
            if(Request::is('contact')){
          ?>
            <li class="nav-item" style="background-color: red">
          <?php
          }
            else{
          ?>
            <li class="nav-item">
          <?php
          }
          ?>
            <a class="nav-link" href="contact">contact</a>
          </li>
          <?php
          if(Auth::check() == false){
          ?>
            <li class="nav-item">
              <a class="nav-link" style="color: pink" href="login">login</a>
            </li>
          <?php
          }
          ?>
          <?php
          if(Auth::check()){
          ?>
            <li class="nav-item">
              <div class="dropdown">
                <button class="dropbtn">
                  <a class="nav-link" style="color: pink">
                    {{ Auth::user()->name }} &nbsp;
                  </a>
                </button>
                <div class="dropdown-content">
                  <a href="#" style="color: #E75480">Profile</a>
                  <a href="#" style="color: #E75480">Message</a>
                  <a href="logout" style="color: #E75480">Logout</a>
                </div>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  @yield('header')    

  <!-- Main Content -->
  <div class="container">
    @yield('content')
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 mx-auto">
          <div class="row mx-auto">
            <h4 style="font-size:20px">Join our Mailing List!!! Chonk</h4>
            <form name="subscribe" role="form" method="post" action="/">
              @csrf
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input name="email" type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Sign up</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mx-auto">
          <ul class="list-inline text-center">
            <h4 style="font-size:20px">Follow us</h4><hr>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4 mx-auto">
          <ul class="list-inline text-center">
            <h4 style="font-size:20px">COPYRIGHT</h4>
            <p class="copyright text-muted" style="font-size:20px">
              &copy; 2020 Cat Daily Vietnam<br>
              Based in Hanoi, Vietnam
            </p>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
