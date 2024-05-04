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
        
    <section id="home">
        <video autoplay loop muted class="bg-video">
            <source src="images/background_video.mp4" type="video/mp4">
        </video>
        <div id="home_informations">
            <h3>Développeuse Full-stack Junior</h3>
            <h1>Léna Pignolet</h1>
            <div class="social_networks">
                <a target="_blank" href="https://github.com/LenaPignolet"><img src="images/logo_github.png" alt="Logo Github"></a>
                <a target="_blank" href="https://www.linkedin.com/in/lenapignolet/"><img src="images/linkedin.png" alt="Logo Linkedin"></a>
                <a target="_blank" href="https://www.behance.net/lena_pignolet"><img src="images/behance.png" alt="Logo Behance"></a>
            </div>
            <a href="#contact"><button>Me contacter</button></a>
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
                <h3>Léna Pignolet</h3>
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
                    <a target="_blank" href="images/CV_lena_pignolet.pdf"><button class="full">Mon CV</button></a>
                    <a target="_blank" href="images/Resume_lena_pignolet.pdf"><button class="border">My Resume</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="part">
        <h2>Compétences</h2>
        <div class="rectangle-couleur"></div>
        <p class="description" id="descript_skills">Voici mes compétences actuelles, que vous verrez appliquées sur mes projets d'études 
            et personnels, présents dans mon portfolio</p>
        <div id="skills_cards">
            <div class="card">
                <div class="card_inner">
                    <div class="card_face card_face-front">
                        <img src="images/crayon_dark.png" alt="" class="ca">
                        <h2>Création numérique</h2>
                        <h5>Voir plus <img src="images/arrow.png" alt="Flèche vers la droite"></h5>
                    </div>
                    <div class="card_face card_face-back">
                        <div class="card-content">
                            <div class="card_header">
                                <h2>Logiciels :</h2>
                            </div>
                            <div class="card_body">
                                <h4>Photoshop</h4>
                                <h4>Illustrator</h4>
                                <h4>Clip Studio Paint</h4>
                                <h4>Blender</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card_inner">
                    <div class="card_face card_face-front">
                        <img src="images/web_developper_dark.png" alt="" class="ca">
                        <h2>Développement web</h2>
                        <h5>Voir plus <img src="images/arrow.png" alt="Flèche vers la droite"></h5>
                    </div>
                    <div class="card_face card_face-back">
                        <div class="card-content">
                            <div class="card_header">
                                <h2>Technologies web :</h2>
                            </div>
                            <div class="card_body">
                                <h4>Figma</h4>
                                <h4>HTML, CSS, PHP, Javascript, SQL</h4>
                                <h4>Wordpress</h4>
                                <h4>Docker</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card_inner">
                    <div class="card_face card_face-front">
                        <img src="images/camera_dark.png" alt="" class="ca">
                        <h2>Audiovisuel</h2>
                        <h5>Voir plus <img src="images/arrow.png" alt="Flèche vers la droite"></h5>
                    </div>
                    <div class="card_face card_face-back">
                        <div class="card-content">
                            <div class="card_header">
                                <h2>Création de contenu :</h2>
                            </div>
                            <div class="card_body">
                                <h4>Prise de photos et vidéos</h4>
                                <h4>Lightroom</h4>
                                <h4>Première Pro</h4>
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="portfolio_content">
            <img src="images/mockup_1.jpg" alt="Mockup d'un ordinateur avec un site sur le thème de la force athlétique">
            <div class="text_lineup">
                <a target="_blank" href="http://mmi23h13.sae105.ovh/" class="link link--arrowed"><h2>Site sur le thème de la force athlétique<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" stroke="white" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                    <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                    <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                    </g>
                </svg></h2></a>
                <p>Site fonctionnel avec une database, un formulaire de contact et une galerie d'image codés en PHP</p>
                <h3>Projet d'étude - Desktop version</h3>
                <div class="software">
                    <p>HTML</p>
                    <p>CSS</p>
                    <p>PHP</p>
                    <p>Javascript</p>
                </div>
            </div>
        </div>
        <div class="portfolio_content_right">
            <img src="images/mockup_5.jpg" alt="Mockup d'un ordinateur avec un site sur les différentes espèces de papillons">
            <div class="text_lineup">
                <a target="_blank" href="https://mmi23h13.sae203.ovh/" class="link link--arrowed"><h2>Site sur les différentes espèces de papillons<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" stroke="white" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                    <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                    <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                    </g>
                </svg></h2></a>
                <p>Site fonctionnel et responsive avec utilisation d'une base de données SQL</p>
                <h3>Projet d'étude - Desktop and Mobile version</h3>
                <div class="software">
                    <p>HTML</p>
                    <p>CSS</p>
                    <p>PHP</p>
                    <p>SQL</p>
                </div>
            </div>
        </div>
        <div class="portfolio_content">
            <img src="images/mockup_2.jpg" alt="Mockup d'une recette de pain d'épices illustrée">
            <div class="text_lineup">
                <a target="_blank" href="images/WR209_lena_pignolet_R_recette.pdf" class="link link--arrowed"><h2>Recette de pain d'épices illustrée<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" stroke="white" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                    <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                    <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                    </g>
                </svg></h2></a>
                <p>Recette avec toutes les étapes de la réalisation d'un pain d'épices illustrées</p>
                <h3>Projet d'étude</h3>
                <div class="software">
                    <p>Clip Studio Paint</p>
                    <p>Illustrator</p>
                </div>
            </div>
        </div>
        <div class="portfolio_content_right">
            <img src="images/mockup_4.jpg" alt="Mockup d'une maquette de réservation de vol">
            <div class="text_lineup">
                <a target="_blank" href="" class="link link--arrowed"><h2>Maquette figma d'un formulaire de réservation de vol<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <g fill="none" stroke="white" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                    <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                    <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                    </g>
                </svg></h2></a>
                <p>Maquette présentant toutes les intéractions possibles sur le formulaire de réservation de vol</p>
                <h3>Projet d'étude</h3>
                <div class="software">
                    <p>Figma</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact_lineup">
            <h2>N'hésitez-pas à me contacter !</h2>
            <div class="rectangle-couleur"></div>
            <p class="description">Si vous avez besoin de mes services ou si vous avez des questions à me poser, je suis à votre écoute :)</p>
        
        
            <form action="https://formspree.io/f/mqkrndww" method="post">
                <div class="form-group">
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom">
                    <label for="prenom" class="form-label">Prénom<span>*</span></label>
                    <span id="prenom_error" class="error-message"></span>
                </div>
                <div class="form-group">
                    <input type="text" name="nom" id="nom" placeholder="Nom">
                    <label for="nom" class="form-label">Nom<span>*</span></label>
                    <span id="nom_error" class="error-message"></span>
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                    <label for="email" class="form-label">E-mail<span>*</span></label>
                    <span id="email_error" class="error-message"></span>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                    <label for="message" class="form-label">Message<span>*</span></label>
                    <span id="message_error" class="error-message"></span>
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