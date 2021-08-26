<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     <script src="{{ asset('js/scripts.js') }}" defer></script>
     <script src="{{ asset('js/custom.js') }}" defer></script>
     <!-- Styles -->
     <link href="css/app.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <title>Poche Group</title>
</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" >
    <div class="header">
        <div class="row">
          <div class="col-sm-6">
            <div class="head_logo">
              <a href="/">
                <img
                  src="https://pochegroup.com/frontend/images/short_logo.svg"
                  alt="logo"
                />
              </a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="header_right text-right">
              <div class="minmenu">
                <div class="menubutton">
                  <span class="low">Menu</span>
                  <span class="burger">
                    <span class="lines"></span>
                  </span>
                </div>
                <a href="/" class="icon">
                  <i class="fa fa-home"></i>
                </a>
                <a href="https://www.facebook.com/pochegroup/" class="icon">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.facebook.com/pochegroup/" class="icon">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div>
        @yield('content')
    </div>
    <div>
      <div id="blackmenu" style="display: none;">
        <ul id="blackmenuul">
            <li>
                <div class="wburger"></div>
            </li>
            <li><a href="javascript:void(0)" class="insert_v_url animsition-link" data-toggle="modal" data-target="#introModal">Intro</a>
            </li>
            <li><a href="/studio" class="animsition-link">Studio</a></li>
            <li><a href="javascript:void(0)" class="animsition-link">Projects</a>
                <ul class="submenu" style="display: none;">
                    <li><a href="/architecture_project" class="animsition-link">Architecture</a></li>
                    <li><a href="/research_project" class="animsition-link">Research</a></li>
                </ul>
            </li>
            <li><a href="/contact" class="animsition-link">Contact</a></li>
            <li><a href="/news" class="animsition-link">News</a></li>
        </ul>
    </div>
    </div>
    <div>
        @include('layouts.footer')
    </div>
    <script src="js/nav.js"></script>
    <script>
      $(document).ready(function(){
          AOS.init();
      });
  </script>
</body>
<script>
  function myFunc() {
  var bod = document.body;
  bod.classList.toggle("dark-mode");
  }
</script>
</html>