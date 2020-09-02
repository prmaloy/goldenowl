<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Golden Owl Designs</title>
    <meta name="description" content="Golden Owl Design">
    
    <!-- Playfair Display - Raleway Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Raleway:100,300,400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/style.css">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><img src="images/goldenowllight.png" style="height: 80px" alt="golden owl" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar i1"></span>
          <span class="icon-bar i2"></span>
          <span class="icon-bar i3"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDefault">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item {{ request()->is('about') ? 'active' : ''}}">
              <a class="nav-link" href="about">ABOUT ME</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="portfolio">PORTFOLIO</a>
            </li>
    -->
            <li class="nav-item {{ request()->is('contact') ? 'active' : ''}}">
              <a class="nav-link" href="contact">CONTACT</a>
            </li>
          </ul>
          
        </div>
      </nav>

      @yield('hero')
      
    </header>

    <!-- Corner Borders -->
    <section class="borders">
      <div class="brTR">
      </div>
      <div class="brTL">
      </div>
      <div class="brBL">
      </div>
      <div class="brBR">
      </div>
    </section>

    @yield('homepage')
    @yield('about')
    @yield('contact')
    @yield('portfolio')
    @yield('product')
    @yield('product2')
    @yield('product3')
    @yield('product4')
    @yield('product5')
    @yield('product6')
    @yield('product7')
    @yield('product8')
    @yield('product9')
    @yield('product10')
    @yield('product11')
    @yield('product12')

    @yield('learn')
    @yield('learn2')
    @yield('learn3')
    @yield('learn4')
    
    <footer>
      <div class="container-fluid">
            <div class="footer-info">
              <div class="footer-title">
                <h2>Golden Owl Designs</h2>
                <p>&copy; Copyrights 2020. All Rights Reserved.</p>
              </div>
              <div class="footer-social">
                <a href=""><i class="fab fa-dribbble"></i></a>
                <a href=""><i class="fab fa-behance"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-500px"></i></a>
                <a href=""><i class="fab fa-flickr"></i></a>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
              </div>
            </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- 

    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHgTY6We404HmD0avnzKNe73v0oQfQMI4&callback=initMap"
    async defer></script>

    <script>
      function initMap() {
        var uluru = {lat: 47.037872, lng: -122.900696};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


    <!-- 

    -->

    <script>
        var containerEl = document.querySelector('.mix-container');

        var mixer = mixitup(containerEl, {
            animation: {
                effects: 'fade scale stagger(50ms)' // Set a 'stagger' effect for the loading animation
            }
        });
    </script>
  </body>
</html>