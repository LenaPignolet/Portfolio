<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Léna Pignolet - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/favicon.ico" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <nav class="nav-transparent">
        <img src="images/logo.png" alt="Logo LP">
        <ul class="sidebar">
            <li onclick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#about">À Propos</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="desktop_bar">
            <li class="hideOnMobile"><a href="">Accueil</a></li>
            <li class="hideOnMobile"><a href="#about">À Propos</a></li>
            <li class="hideOnMobile"><a href="#skills">Compétences</a></li>
            <li class="hideOnMobile"><a href="#portfolio">Portfolio</a></li>
            <li class="hideOnMobile"><a href="#contact">Contact</a></li>
            <li class="menu-button" onclick=showSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 -960 960 960"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Gallery</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
        </div>
        <br>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>

    <footer>
        <div class="social_networks">
            <a target="_blank" href="https://github.com/LenaPignolet"><img src="images/logo_github.png" alt="Logo Github"></a>
            <a target="_blank" href="https://www.linkedin.com/in/lenapignolet/"><img src="images/linkedin.png" alt="Logo Linkedin"></a>
            <a target="_blank" href="https://www.behance.net/lena_pignolet"><img src="images/behance.png" alt="Logo Behance"></a>
        </div>
        <div id="copyright">
            <div id="copyright_text">
                <p class="me">© Léna Pignolet 2024</p>
                <p class="rights">Tout droits réservés</p>
            </div>
            <a href="mentions.php" id="mentions">Mentions légales</a>
        </div>
    </footer>

    <script src="js/index.js"></script>
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }

        const nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                nav.classList.add('nav-noir');
                nav.classList.remove('nav-transparent');
            } else {
                nav.classList.add('nav-transparent');
                nav.classList.remove('nav-noir');
            }
        });
    </script>
    
</body>
</html>