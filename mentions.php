<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Léna Pignolet - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/favicon.ico" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav-transparent">
        <img src="images/logo.png" alt="Logo LP">
        <ul class="sidebar">
            <li><a href="index.php">Accueil</a></li>
        </ul>
        <ul class="desktop_bar">
            <li class="hideOnMobile"><a href="index.php">Accueil</a></li>
        </ul>
    </nav>

    <section id="mentions_legales">
        <h1>Mentions légales</h1>
        <div>
            <h2>Icônes des réseaux sociaux</h2>
                <p>Les icônes utilisées pour les réseaux sociaux proviennent de l'artiste <a href="https://www.freepik.com/icon/linkedin_3536569#fromView=search&page=1&position=0&uuid=b2cf7712-a4e9-4b91-a204-08aca06e3bf1">Riajulislam</a> sur le site Freepik.</p>
            <h2>Icônes pour les compétences</h2>
                <p>Voici les artistes et l'origine des différentes icônes utilisés pour les compétences :</p>
                <p>Création Numérique : <a href="https://www.flaticon.com/authors/vector-stall" title="stylus icons">Stylus icons created by Vector Stall - Flaticon</a></p>
                <p>Développement Web : <a href="https://www.freepik.com/author/freepik/icons?t=f">Icon by Freepik</a></p>
                <p>Audiovisuel : <a href="https://www.flaticon.com/fr/auteurs/kiranshastry" title="appareil photo icônes">Appareil photo icônes créées par Kiranshastry - Flaticon</a></p>
        </div>
    </section>






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

        document.getElementById('sae105').addEventListener('click', function() {
            window.open('http://mmi23h13.sae105.ovh/', '_blank');
        });

        document.getElementById('sae203').addEventListener('click', function() {
            window.open('https://mmi23h13.sae203.ovh/', '_blank');
        });

        document.getElementById('recipe').addEventListener('click', function() {
            window.open('images/WR209_lena_pignolet_R_recette.pdf', '_blank');
        });

        document.getElementById('mockup').addEventListener('click', function() {
            window.open('https://mmi23h13.sae203.ovh/', '_blank');
        });
    </script>
</body>
</html>