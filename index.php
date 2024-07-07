<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Léna Pignolet - Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/favicon.ico" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <nav class="nav-transparent">
        <img src="images/logo.svg" alt="Logo LP">
        <ul class="sidebar">
            <li onclick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#about">À Propos</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="desktop_bar">
            <li class="hideOnMobile"><a href="#">Accueil</a></li>
            <li class="hideOnMobile"><a href="#about">À Propos</a></li>
            <li class="hideOnMobile"><a href="#skills">Compétences</a></li>
            <li class="hideOnMobile"><a href="#portfolio">Portfolio</a></li>
            <li class="hideOnMobile"><a href="#contact">Contact</a></li>
            <li class="menu-button" onclick=showSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 -960 960 960"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
        
    <section id="home">
        <video autoplay loop muted class="bg-video">
            <source src="images/background_video.mp4" type="video/mp4">
        </video>
        <div id="home_informations">
            <h3>Développeuse Full-stack Junior</h3>
            <h1>Léna Pignolet</h1>
            <div class="social_networks">
                <a target="_blank" href="https://github.com/LenaPignolet">
                    <img src="images/github-mark-white.svg" alt="Logo Github">
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/lenapignolet/">
                    <img src="images/linkedin.svg" alt="Logo Linkedin">
                </a>
                <a target="_blank" href="https://www.behance.net/lena_pignolet">
                    <img src="images/behance.svg" alt="Logo Behance">
                </a>
            </div>
            <div id="home_contact">
                <a href="#contact">Me contacter</a>
            </div>
            <div id="scroll_container">
                <a href="#about" class="scroll_animation"><div class="scroll"></div></a>
            </div>
        </div>
    </section>
    
    <section id="about">
        <h2>À propos de moi</h2>
            <div class="rectangle-couleur"></div>
            <p class="description">Vous trouverez ci-dessous des informations concernant mon parcours 
                personnel et professionnel ainsi que mon CV en français et en anglais</p>

        <div id="about_lineup">
            <div id="intro">
                <img src="images/lena_pignolet_.jpg" alt="">
            </div>
            <div id="suite">
                <h3>Étudiante en 1<sup>ère</sup> année d'un BUT Métiers du Multimédia et de l'Internet</h3>

                <p>Passionnée par le <strong>développement web</strong> et la <strong>création de sites web</strong>, je m'intéresse aux 
                <strong>nouvelles technologies</strong> qui nous entourent et je m’informe régulièrement concernant 
                    les nouveautés, notamment via les <strong>réseaux sociaux</strong>. Je cherche à apprendre toujours 
                    plus et à m’essayer à plusieurs langages de programmation, notamment en <strong>autodidacte</strong>.<br><br>
                Je suis aussi très intéressée par le <strong>design</strong> ainsi que la <strong>création numérique</strong>, j’allie 
                technique et créativité. Mon objectif est de créer des sites à la fois <strong>esthétiques</strong> et 
                <strong>performants</strong>, afin de répondre au mieux à la demande client.<br><br>
                Je suis plus que déterminée à m’<strong>améliorer</strong> et à me <strong>professionnaliser</strong> de jour en jour.</p>

                <div id="cv">
                    <div class="button">
                        <a target="_blank" href="images/CV_lena_pignolet.pdf">Mon CV</a>
                    </div>
                    <div class="button">
                        <a target="_blank" href="images/Resume_lena_pignolet.pdf">My Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="part">
        <h2>Compétences</h2>
        <div class="rectangle-couleur"></div>
        <p class="description" id="descript_skills">Voici mes compétences actuelles, que vous verrez appliquées sur mes projets d'études 
            et personnels, présents dans mon portfolio</p>
        <div id="skills_scroll">
            <div class="scroller" data-speed="slow">
                <ul class="tag-list scroller__inner">
                    <li><h2>HTML</h2></li>
                    <li><h2>CSS</h2></li>
                    <li><h2>Javascript</h2></li>
                    <li><h2>PHP</h2></li>
                    <li><h2>SQL</h2></li>
                    <li><h2>Vue.js</h2></li>
                    <li><h2>Wordpress</h2></li>
                </ul>
            </div>
            <div class="scroller" data-speed="slow" data-direction="right">
                <ul class="tag-list scroller__inner">
                    <li><h2>Suite Adobe</h2></li>
                    <li><h2>Figma</h2></li>
                    <li><h2>Clip Studio Paint</h2></li>
                    <li><h2>Blender</h2></li>
                    <li><h2>Photographie</h2></li>
                    <li><h2>Vidéographie</h2></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="portfolio" class="part">
        <div class="header_lineup">
            <h2>Portfolio</h2>
            <div class="rectangle-couleur"></div>
            <p class="description">Vous trouverez ici une partie de mes réalisations dans plusieurs domaines différents ainsi 
                que les liens vers les sites ou les documents</p>
        </div>

        <div id="portfolio_content">
            <div class="button-group">
                <button class="button active" data-filter=".latest">Projets récents</button>
                <button class="button" data-filter=".web">Web Design</button>
                <button class="button" data-filter=".graph">Graphisme</button>
                <button class="button" data-filter=".photo">Photographie</button>
            </div>

            <div class="gallery">

                <div class="item latest todolist">
                    <img src="images/todolist.jpg">
                    <div class="overlay">
                    <p>Todo List avec VueJS et VueForm<br>Projet personnel</p>
                    </div>
                </div>

                <div class="item latest">
                    <img src="images/gingerbread.jpg">
                    <div class="overlay">
                    <p>Recette du pain d'épices<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item latest cojardin">
                    <img src="images/gardeco.jpg">
                    <div class="overlay">
                    <p>Maquette Figma pour un site de Cojardinage<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item web todolist">
                    <img src="images/todolist.jpg">
                    <div class="overlay">
                    <p>Todo List avec VueJS et VueForm<br>Projet personnel</p>
                    </div>
                </div>

                <div class="item web">
                    <img src="images/mockup_5.jpg">
                    <div class="overlay">
                    <p>Wordpress Handmade Reims<br>Projet personnel</p>
                    </div>
                </div>

                <div class="item web cojardin">
                    <img src="images/gardeco.jpg">
                    <div class="overlay">
                    <p>Maquette Figma pour un site de Cojardinage<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item web" id="papillons">
                    <img src="images/crysallis_chronicles.jpg">
                    <div class="overlay">
                    <p>Site web dynamique en PHP et MYSQL<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item web" id="mmi">
                    <img src="images/mockup_travaux.jpg">
                    <div class="overlay">
                    <p>Site de Travaux MMI<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item web" id="myportfolio">
                    <img src="images/mockup_portfolio.jpg">
                    <div class="overlay">
                    <p>Portfolio<br>Site sur lequel vous êtes actuellement &#x1F609;</p>
                    </div>
                </div>

                <div class="item graph" id="recipe">
                    <img src="images/gingerbread.jpg">
                    <div class="overlay">
                        <p>Recette du pain d'épices<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item graph" id="steam">
                    <img src="images/banniere_steam.jpg">
                    <div class="overlay">
                        <p>Bannière Steam<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item graph" id="strat">
                    <img src="images/strat_creative.jpg">
                    <div class="overlay">
                        <p>Stratégie Créative - Fromagerie de Mussy<br>Projet de cours</p>
                    </div>
                </div>

                <div class="item photo atelier">
                    <img src="images/croustillons.jpg">
                    <div class="overlay">
                        <p>Stand de croustillons<br>Marché de Noël de Troyes 2023</p>
                    </div>
                </div>

                <div class="item photo atelier">
                    <img src="images/tvylor.jpg">
                    <div class="overlay">
                        <p>Batteur du groupe de Tvylor<br>Concert Palme à Troyes</p>
                    </div>
                </div>

                <div class="item photo atelier">
                    <img src="images/ericDeSousa.jpg">
                    <div class="overlay">
                        <p>Eric De SouSa<br>Concert Palme à Troyes</p>
                    </div>
                </div>

                <div class="item photo atelier">
                    <img src="images/coeur.jpg">
                    <div class="overlay">
                        <p>Le coeur de Troyes<br>Atelier photo décembre 2023</p>
                    </div>
                </div>

                <div class="item photo packshot">
                    <img src="images/rituals.jpg">
                    <div class="overlay">
                        <p>Rituals - Ritual of Sakura<br>Packshot</p>
                    </div>
                </div>

                <div class="item photo packshot">
                    <img src="images/rituals_2.jpg">
                    <div class="overlay">
                        <p>Rituals - Ritual of Sakura<br>Packshot</p>
                    </div>
                </div>

            </div>
        </div>
        
        <p id="coming_soon">De nouveau projets sont en cours, restez connectés pour en savoir plus &#x1F609;</p>

    </section>
    <section id="contact">
        <div class="contact_lineup">
            <h2>N'hésitez-pas à me contacter !</h2>
            <div class="rectangle-couleur"></div>
            <p class="description">Si vous avez besoin de mes services ou si vous avez des questions à me poser, je suis à votre écoute :)</p>
        
        
            <form action="envoi_mail.php" method="post">
                <div class="form-group">
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom">
                    <label for="prenom" class="form-label">Prénom<sup>*</sup></label>
                </div>

                <div class="form-group">
                    <input type="text" name="nom" id="nom" placeholder="Nom">
                    <label for="nom" class="form-label">Nom<sup>*</sup></label>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                    <label for="email" class="form-label">E-mail<sup>*</sup></label>
                </div>

                <div class="form-group">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                    <label for="message" class="form-label">Message<sup>*</sup></label>
                </div>

                <div id="retour_mail">
                        <?php
                            if (isset($_SESSION['information'])) {
                            echo '<p>'.$_SESSION['information'].'</p>'."\n";
                            session_unset();
                            }
                        ?>
                </div>
                
                <input type="submit" value="Envoyer" id="valid_tact">
            </form>
        </div>
        <div class="infos_lineup">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83334.59322137352!2d4.055107949999997!3d49.253540550000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e974334a533b09%3A0x40a5fb99a3b45c0!2s51100%20Reims!5e0!3m2!1sfr!2sfr!4v1714071352951!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div id="infos">
                <p><span>Localisation :</span><br>
                51100 Reims France<br>
                10000 Troyes France</p>
                <p><span>Email :</span><br>
                lena.pignolet.pro@gmail.com</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="social_networks">
            <a target="_blank" href="https://github.com/LenaPignolet">
                <img src="images/github-mark-white.svg" alt="Logo Github">
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/lenapignolet/">
                <img src="images/linkedin.svg" alt="Logo Linkedin">
            </a>
            <a target="_blank" href="https://www.behance.net/lena_pignolet">
                <img src="images/behance.svg" alt="Logo Behance">
            </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script>
        var $galleryContainer = $('.gallery').isotope({
            itemSelector: '.item',
            layoutMode: 'fitRows',
            filter: '.latest'
        })

        $('.button-group .button').on('click', function(){
        $('.button-group .button').removeClass('active');
        $(this).addClass('active');

        var value = $(this).attr('data-filter');
        $galleryContainer.isotope({
            filter: value 
        })
        })
    </script>
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

        document.addEventListener('DOMContentLoaded', function() {
            const toDoLinks = document.querySelectorAll('.todolist');
            toDoLinks.forEach(todoLink => {
                todoLink.addEventListener('click', function() {
                    window.open('/projets/vue.js/index.html', '_blank');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const jardinLinks = document.querySelectorAll('.cojardin');
            jardinLinks.forEach(jardinLink => {
                jardinLink.addEventListener('click', function() {
                    window.open('https://www.figma.com/design/WfWHIDe4Rg7CFrm2daqzvi/Maquettes-et-Prototypes?node-id=263-510&t=lSxldrWUQUXz3DqK-1', '_blank');
                });
            });
        });

        document.getElementById('papillons').addEventListener('click', function() {
            window.open('https://mmi23h13.sae203.ovh/', '_blank');
        });

        document.getElementById('mmi').addEventListener('click', function() {
            window.open('http://mmi23h13.mmi-troyes.fr/', '_blank');
        });

        document.getElementById('myportfolio').addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        document.getElementById('recipe').addEventListener('click', function() {
            window.open('images/WR209_lena_pignolet_R_recette.pdf', '_blank');
        });

        document.getElementById('steam').addEventListener('click', function() {
            window.open('images/WR209_banniere_steam_Lena_Pignolet_F.pdf', '_blank');
        });

        document.getElementById('strat').addEventListener('click', function() {
            window.open('images/R109_H_pignolet_lena_strategie_creative.pdf', '_blank');
        });

        document.addEventListener('DOMContentLoaded', function() {
            const photoLinks = document.querySelectorAll('.atelier');
            photoLinks.forEach(photoLink => {
                photoLink.addEventListener('click', function() {
                    window.open('https://www.behance.net/gallery/199254809/Atelier-photo-2024', '_blank');
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const photoLinks = document.querySelectorAll('.packshot');
            photoLinks.forEach(photoLink => {
                photoLink.addEventListener('click', function() {
                    window.open('https://www.behance.net/gallery/199255051/Packshot-Rituals', '_blank');
                });
            });
        });

    </script>
</body>
</html>