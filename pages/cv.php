<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV & Profil Pro - Portfolio</title>
    <link rel="stylesheet" href="../css/pages/cv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Three.js est nécessaire pour VANTA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
</head>

<body>
    <header>
        <?php include("../include/header/navbar.php"); ?>
    </header>

    <main class="home-container">
        <div id="vanta-bg"></div>

        <div class="cv-container">
            <section class="profile-section">
                <img src="../assets/picture/Picture_MARIE_Marc-Antoine.jpg" alt="Photo de Marc-Antoine MARIE"
                    class="profile-picture">
                <h1 class="profile-name">Marc-Antoine MARIE</h1>
                <h2 class="profile-title">Développeur Web Full Stack</h2>
                <p class="profile-description">
                    Passionné par le développement web, je vois le code comme un moyen de créer et d'innover, alliant
                    technique et dimension presque artistique. Curieux et persévérant, j'aime relever des défis,
                    apprendre en continu et mener mes projets jusqu'au bout. Mon approche allie rigueur, créativité et
                    collaboration pour concevoir des solutions performantes et adaptées aux besoins.
                </p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+33 (0)7 81 65 00 65</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a id="email" href="mailto:mmarie.galaxie@gmail.com">mmarie.galaxie@gmail.com</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Le Mans - Angers - Nanterre - Nantes</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-id-card"></i>
                        <span>Permis B</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/marc-antoine-marie-6a132820a" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Marc-AntoineMarie" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </section>

            <div class="cv-sections">
                <section class="cv-section">
                    <h3><i class="fas fa-graduation-cap"></i> Formation</h3>
                    <div class="cv-item">
                        <div class="cv-item-header">
                            <span class="cv-item-title">BAC+3 Développeur Web et mobile (ALTERNANCE)</span>
                            <span class="cv-item-date">Prochainement</span>
                        </div>
                        <div class="cv-item-subtitle">MyDigitalSchool - Paris</div>
                    </div>
                    <div class="cv-item">
                        <div class="cv-item-header">
                            <span class="cv-item-title">BTS Services Informatiques aux Organisations</span>
                            <span class="cv-item-date">2023 - 2025</span>
                        </div>
                        <p>Option Solutions Logicielles et Applications Métiers</p>
                        <div class="cv-item-subtitle">MyDigitalSchool - Angers</div>
                    </div>
                    <div class="cv-item">
                        <div class="cv-item-header">
                            <span class="cv-item-title">Baccalauréat professionnel Systèmes et Numériques</span>
                            <span class="cv-item-date">2023</span>
                        </div>
                        <div class="cv-item-subtitle">St Charles Ste Croix - Le Mans</div>
                        <p>Option Réseaux informatiques et Systèmes communicants - Mention Bien</p>
                    </div>
                </section>

                <section class="cv-section">
                    <h3><i class="fas fa-briefcase"></i> Expérience Professionnelle</h3>
                    <div class="cv-item">
                        <div class="cv-item-header">
                            <span class="cv-item-title">Développeur web full stack | Technicien de maintenance</span>
                            <span class="cv-item-date">2024 - 2025</span>
                        </div>
                        <div class="cv-item-subtitle">GC SERVICE - Cholet</div>
                    </div>
                    <div class="cv-item">
                        <div class="cv-item-header">
                            <span class="cv-item-title">Technicien réseau en alternance</span>
                            <span class="cv-item-date">2021 - 2023</span>
                        </div>
                        <div class="cv-item-subtitle">Ministère des armées (DIRISI) - Angers</div>
                        <ul>
                            <li>Configurer, installer et dépanner des équipements réseau (switchs, routeurs, chiffreurs)
                            </li>
                            <li>Installer et maintenir des baies informatiques</li>
                            <li>Gérer les tickets, l'adressage IP et analyser les trames avec Wireshark</li>
                            <li>Assister et dépanner les utilisateurs</li>
                        </ul>
                    </div>
                </section>
            </div>

            <section class="cv-section">
                <h3><i class="fas fa-laptop-code"></i> Compétences Techniques</h3>
                <div class="skills-container">
                    <div class="skill-item">
                        <i class="fab fa-php"></i>
                        <span>PHP/Laravel</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-js"></i>
                        <span>JavaScript</span>
                    </div>
                    <!-- <div class="skill-item">
                        <i class="fab fa-react"></i>
                        <span>React</span>
                    </div> -->
                    <!-- <div class="skill-item">
                        <i class="fab fa-angular"></i>
                        <span>Angular</span>
                    </div> -->
                    <div class="skill-item">
                        <i class="fab fa-git-alt"></i>
                        <span>Git</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-html5"></i>
                        <span>HTML5</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-css3-alt"></i>
                        <span>CSS3</span>
                    </div>
                    <div class="skill-item">
                        <i class="fab fa-bootstrap"></i>
                        <span>Bootstrap</span>
                    </div>
                    <!-- <div class="skill-item">
                        <i class="fab fa-python"></i>
                        <span>Python</span>
                    </div> -->
                    <div class="skill-item">
                        <i class="fas fa-network-wired"></i>
                        <span>Réseaux</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Cybersécurité</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-language"></i>
                        <span>Anglais (B2)</span>
                    </div>
                </div>
            </section>

            <div class="center-section">
                <div class="cv-sections">
                    <section class="cv-section">
                        <h3><i class="fas fa-check-circle"></i> Qualités</h3>
                        <div class="qualities-list">
                            <div class="quality-item">
                                <i class="fas fa-user-cog"></i>
                                <span>Autonome</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-clipboard-check"></i>
                                <span>Rigoureux</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-mountain"></i>
                                <span>Persévérant</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-rocket"></i>
                                <span>Adaptabilité rapide</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-users"></i>
                                <span>Collaboration efficace</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-tasks"></i>
                                <span>Organisation optimisée</span>
                            </div>
                            <div class="quality-item">
                                <i class="fas fa-search"></i>
                                <span>Curiosité constante</span>
                            </div>
                        </div>
                    </section>

                    <section class="cv-section">
                        <h3><i class="fas fa-heart"></i> Centres d'Intérêt</h3>
                        <div class="cv-item">
                            <div class="cv-item-title"><i class="fas fa-gamepad"></i> Jeux Vidéo</div>
                            <p>Étudier et pratiquer les stratégies professionnels de Counter-Strike.</p>
                            <p>Suivre les tendances de l'industrie du jeu vidéo.</p>
                        </div>
                        <div class="cv-item">
                            <div class="cv-item-title"><i class="fas fa-dumbbell"></i> Sport</div>
                            <p>Maintenir une discipline en musculation et nutrition.</p>
                        </div>
                        <div class="cv-item">
                            <div class="cv-item-title"><i class="fas fa-film"></i> Cinéma</div>
                            <p>Analyser des œuvres cinématographiques pour enrichir ma culture.</p>
                        </div>
                    </section>
                </div>
            </div>
            <a href="../assets/cv_Marie_Marc-Antoine_Bachelor_dev.pdf" class="download-cv">
                <i class="fas fa-download"></i> Télécharger mon CV
            </a>
        </div>
    </main>

    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>

</body>

</html>