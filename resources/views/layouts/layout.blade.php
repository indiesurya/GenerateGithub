<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>{{ $title }}</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css?v=1.8">    
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">   
    <?php if($title == 'Generate Github') { ?>
        <div class="overlay">
            <span></span>
            <span> </span>
        </div>
    <?php }else { ?>
    @php
    }
    @endphp
        <nav class="navbar navbar-expand-md bg-inverse 
        <?php if($title == 'Generate Github') {
            echo "fixed-top";
        } else{
            echo "menu-bg";
        }?>">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="img/logo.png" alt=""></a>       
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="
                        <?php if($title=='Generate Github'){
                            echo "#home";
                        }
                        else{
                            echo "/";
                        }
                        ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="
                        <?php if($title=='Generate Github'){
                            echo "#about";
                        }
                        else{
                            echo "/#about";
                        }?>">About</a>
                    </li>                            
                    <li class="nav-item">
                        <a class="btn btn-singin" href="/generate">Generate</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>  
        
    @yield('container')

    <footer>
        <section id="footer-Content">
            <div class="col-md-12">
                <div class="site-info text-center">
                    <p>Created by <a href="http://uideck.com" rel="nofollow">Indie Surya</a></p>
                </div>              
            </div>
        </section>
    </footer>


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js?v=1.0"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js?v=1.1"></script>
    
</body>
</html>