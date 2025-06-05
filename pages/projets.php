<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/pages/projets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <?php include("../include/header/navbar.php"); ?>
    </header>
    <main class="projets-container">
        <h1>Mes Projets</h1>

        <!-- Grille des projets -->
        <div class="projets-grid">
            <!-- Projet réel : 1ClickAllEat -->
            <article class="projet-card" data-category="web">
                <div class="projet-image">
                    <img src="../assets/picture/1ClickAllEat.png" alt="1ClickAllEat"
                        style="object-fit:cover;width:100%;height:100%;">
                </div>
                <div class="projet-content">
                    <h3>1ClickAllEat</h3>
                    <div class="projet-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">Breeze</span>
                        <span class="tag">Blade</span>
                        <span class="tag">PhpMyAdmin</span>
                        <span class="tag">SQL</span>
                        <span class="tag">SQLite</span>
                        <span class="tag">Git</span>
                        <span class="tag">MVC</span>
                    </div>
                    <p class="projet-description">
                        Plateforme web permettant aux clients de réserver une table, de commander des plats en ligne et
                        de suivre leurs commandes en temps réel. Côté restaurateur, l’application offre une gestion
                        intuitive des réservations, des commandes, des menus et des tables, le tout dans une interface
                        moderne et responsive.
                    </p>
                    <div class="projet-links">
                        <a href="#projetModal1ClickAllEat" class="btn-details">Voir les détails</a>
                        <a href="https://github.com/Marc-AntoineMarie/1ClickAllEat" class="btn-github"
                            target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://1clickalleat-demo.com" class="btn-demo" target="_blank">Démo</a>
                        <a href="../assets/picture/Cahier_des_Charges_1ClickAllEat.pdf" class="btn-pdf"
                            target="_blank">Cahier des charges</a>
                    </div>
                </div>
            </article>
            <!-- Projet réel : Telora -->
            <article class="projet-card" data-category="web">
                <div class="projet-image">
                    <img src="../assets/picture/telora_.png" alt="Telora"
                        style="object-fit:cover;width:100%;height:100%;">
                </div>
                <div class="projet-content">
                    <h3>Telora</h3>
                    <div class="projet-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">PhpMyAdmin</span>
                        <span class="tag">SQL</span>
                        <span class="tag">Git</span>
                        <span class="tag">MVC</span>
                    </div>
                    <p class="projet-description">
                        Plateforme web permettant aux clients d'acceder a leurs annuaires, de gerer leurs annuaires en
                        ligne. Côté partenaire, l’application offre une gestion
                        intuitive des annuaires et des téléphones, le tout dans une interface
                        moderne et responsive.
                    </p>
                    <div class="projet-links">
                        <a href="#projetModalTelora" class="btn-details">Voir les détails</a>
                        <a href="https://github.com/Marc-AntoineMarie/telora" class="btn-github" target="_blank"><i
                                class="fab fa-github"></i></a>
                        <a href="https://1clickalleat-demo.com" class="btn-demo" target="_blank">Démo</a>
                        <a href="../assets/picture/cahier_des_charges_telora.pdf" class="btn-pdf" target="_blank">Cahier
                            des charges</a>
                    </div>
                </div>
            </article>

            <!-- Projet réel : 1ClickAllEat -->
            <article class="projet-card" data-category="web">
                <div class="projet-image">
                    <img src="../assets/picture/portfolio_.png" alt="Portfolio"
                        style="object-fit:cover;width:100%;height:100%;">
                </div>
                <div class="projet-content">
                    <h3>Portfolio</h3>
                    <div class="projet-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">PHPMailer</span>
                        <span class="tag">Git</span>
                        <span class="tag">MVC</span>
                    </div>
                    <p class="projet-description">
                    Il s'agit d'une plateforme web destinée aux particuliers comme aux professionnels, 
                    conçue pour présenter mes compétences, mes méthodes de travail et valoriser mon profil, 
                    tout en respectant les attendus de l’épreuve E5 du BTS SIO option SLAM.
                    </p>
                    <div class="projet-links">
                        <a href="#projetModalportfolio" class="btn-details">Voir les détails</a>
                        <a href="https://github.com/Marc-AntoineMarie/Portfolio" class="btn-github"
                            target="_blank"><i class="fab fa-github"></i></a>
                        <a href="../assets/picture/cahier_des_charges_portfolio.pdf" class="btn-pdf"
                            target="_blank">Cahier des charges</a>
                    </div>
                </div>
            </article>

            <!-- Modal détaillée pour 1ClickAllEat -->
            <div class="projet-details-modal" id="projetModal1ClickAllEat">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="projet-details">
                        <h2>1ClickAllEat</h2>

                        <section class="projet-context">
                            <h3>Contexte du Projet</h3>
                            <p>
                                Application développée entre novembre 2024 et avril 2025 dans le cadre de ma formation
                                BTS SIO. Le projet vise à permettre la réservation et la prise de commande en ligne dans
                                des restaurants, pour une expérience sans attente, tout en optimisant la gestion côté
                                restaurateur. J'ai travaillé seul sur toutes les phases du projet.
                            </p>
                        </section>

                        <section class="projet-environment">
                            <h3>Environnement Technologique</h3>
                            <ul>
                                <li>Front-end : Blade (Laravel), Bootstrap 5, HTML5, CSS3, responsive design</li>
                                <li>Back-end : Laravel 10 (PHP 8), architecture MVC</li>
                                <li>Base de données : SQLite (développement), MySQL/PhpMyAdmin (production)</li>
                                <li>Outils : Breeze (authentification), Faker (données de test), GitHub (gestion de
                                    versions), VS Code, hébergement HTTPS</li>
                            </ul>
                        </section>

                        <section class="projet-tasks">
                            <h3>Tâches Réalisées</h3>
                            <ul>
                                <li>Analyse du besoin, rédaction du cahier des charges et du diagramme de Gantt</li>
                                <li>Modélisation de la base de données et création des migrations Laravel</li>
                                <li>Développement des fonctionnalités principales : réservation, commande, gestion des
                                    utilisateurs, gestion des restaurants/tables/menus</li>
                                <li>Implémentation de l’authentification sécurisée multi-profils (clients,
                                    restaurateurs)</li>
                                <li>Développement d’un tableau de bord pour restaurateur (statistiques, gestion des
                                    réservations et commandes)</li>
                                <li>Tests unitaires, validation des formulaires et gestion des erreurs</li>
                                <li>Déploiement sur serveur distant, configuration du HTTPS et optimisation de la
                                    sécurité</li>
                                <li>Rédaction de la documentation utilisateur et technique</li>
                            </ul>
                        </section>

                        <section class="projet-timeline">
                            <h3>Planning du Projet</h3>
                            <div class="timeline">
                                Projet mené de novembre 2024 à avril 2025, avec phases de conception, développement,
                                tests, puis déploiement et amélioration continue. Travail réparti sur plusieurs
                                semaines, avec une montée en compétences progressive sur Laravel.
                                <ul>
                                    <li>Novembre 2024 : Analyse du besoin, rédaction du cahier des charges</li>
                                    <li>Décembre 2024 : Modélisation de la base, mise en place de l’architecture Laravel
                                    </li>
                                    <li>Janvier-Février 2025 : Développement des fonctionnalités principales</li>
                                    <li>Mars 2025 : Tests, corrections, ajout des fonctionnalités avancées</li>
                                    <li>Avril 2025 : Déploiement, rédaction de la documentation, soutenance</li>
                                </ul>
                            </div>
                            <div style="margin-top:1rem;">
                                <a href="../assets/picture/gantt.png" class="btn-pdf" target="_blank">Télécharger le
                                    Gantt (PDF)</a>
                            </div>
                        </section>

                        <section class="projet-challenges">
                            <h3>Difficultés et Solutions</h3>
                            <div class="challenge">
                                <h4>Découverte de Laravel et adaptation à un nouveau framework</h4>
                                <p>Avant ce projet, je n'avais jamais utilisé de framework PHP. J'ai dû m'approprier
                                    Laravel, comprendre son fonctionnement (routes, migrations, Blade, etc.) et
                                    apprendre à structurer un projet complet.</p>
                                <p><strong>Solution :</strong> Documentation officielle, tutoriels, essais/erreurs.</p>
                            </div>
                            <div class="challenge">
                                <h4>Gestion de la personnalisation graphique</h4>
                                <p>Pas de maquette initiale : j’ai adapté des templates Bootstrap pour obtenir un rendu
                                    professionnel et responsive, en prévoyant la possibilité de personnaliser le style
                                    pour chaque restaurant à l’avenir.</p>
                                <p><strong>Solution :</strong> Recherche d’exemples, adaptation de templates, tests sur
                                    différents supports.</p>
                            </div>
                            <div class="challenge">
                                <h4>Déploiement et configuration serveur</h4>
                                <p>Mise en place d’un hébergement sécurisé (HTTPS), configuration de la base de données
                                    distante, gestion des variables d’environnement.</p>
                                <p><strong>Solution :</strong> Documentation OVH, Let’s Encrypt, adaptation de la
                                    configuration Laravel .env.</p>
                            </div>
                        </section>

                        <section class="projet-competences">
                            <h3>Compétences Mobilisées</h3>
                            <ul>
                                <li>Développement web fullstack (Laravel, PHP, Blade, Bootstrap, SQL)</li>
                                <li>Gestion de projet (planification, documentation, autonomie)</li>
                                <li>Modélisation de base de données relationnelle</li>
                                <li>Gestion de la sécurité et des droits utilisateurs</li>
                                <li>Déploiement d’application web sur serveur distant</li>
                                <li>Utilisation de Git et GitHub pour le versionning</li>
                                <li>Rédaction de documentation technique et utilisateur</li>
                            </ul>
                        </section>

                        <section class="projet-bilan">
                            <h3>Bilan Personnel</h3>
                            <p>
                                Je suis fier d’avoir mené ce projet à bien, seul, en développant des fonctionnalités
                                avancées et en progressant énormément sur Laravel et l’écosystème PHP. Ce projet m’a
                                permis de gagner en autonomie, en rigueur et en capacité à résoudre des problèmes
                                complexes. Si je devais le refaire aujourd’hui, je l’aborderais de façon encore plus
                                structurée et ambitieuse, avec des fonctionnalités innovantes pour les restaurateurs et
                                les clients.
                            </p>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Modal détaillée pour Telora -->
            <div class="projet-details-modal" id="projetModalTelora">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="projet-details">
                        <h2>Telora</h2>

                        <section class="projet-context">
                            <h3>Contexte du Projet</h3>
                            <p>
                                Application développée entre avril 2024 et juin 2025 dans le cadre d’un projet de
                                gestion de contacts.
                                L’objectif est de concevoir une plateforme facilitant la gestion,
                                le suivi et la planification des contacts professionnels ou clients.
                                Le projet a suivi une démarche structurée, de l’analyse à la présentation finale.
                            </p>
                        </section>

                        <section class="projet-environment">
                            <h3>Environnement Technologique</h3>
                            <ul>
                                <li>Front-end : Bootstrap 5, HTML5, CSS3, SCSS, responsive design</li>
                                <li>Back-end : PHP 8, architecture MVC</li>
                                <li>Base de données : MySQL/PhpMyAdmin </li>
                                <li>Outils : PHPMailer </li>
                            </ul>
                        </section>

                        <section class="projet-tasks">
                            <h3>Tâches Réalisées</h3>
                            <ul>
                                <li>Analyse du besoin, rédaction du cahier des charges et du diagramme de Gantt</li>
                                <li>Modélisation de la base de données et création des migrations Laravel</li>
                                <li>Développement des fonctionnalités principales : navigation, gestion client, gestion
                                    des
                                    utilisateurs, gestion des contacts/BLF/provisionning</li>
                                <li>Implémentation de l’authentification sécurisée multi-profils (clients,
                                    Partenaire)</li>
                                <li>Tests unitaires, validation des formulaires et gestion des erreurs</li>
                                <li>Déploiement sur serveur distant, configuration du HTTPS et optimisation de la
                                    sécurité</li>
                                <li>Rédaction de la documentation utilisateur et technique</li>
                            </ul>
                        </section>

                        <section class="projet-timeline">
                            <h3>Planning du Projet</h3>
                            <div class="timeline">
                                 Projet mené d’avril 2024 à juin 2025, structuré en :
                                <ul>
                                    <li>Avril 2024 : Analyse & conception</li>
                                    <li>Décembre 2024 : Modélisation de la base, mise en place de l’architecture Laravel
                                    </li>
                                    <li>Fin avril 2024 : Mise en place technique</li>
                                    <li>Mai 2024 à mars 2025 : Développement principal</li>
                                    <li>Avril 2025 : Tests et validation</li>
                                    <li>Mai 2025 : Documentation & livrables</li>
                                    <li>Juin 2025 : Présentation & recette</li>
                                </ul>
                            </div>
                            <div style="margin-top:1rem;">
                                <a href="../assets/picture/gantt_telora.png" class="btn-pdf" target="_blank">Télécharger le
                                    Gantt (PDF)</a>
                            </div>
                        </section>

                        <section class="projet-challenges">
                            <h3>Difficultés et Solutions</h3>
                            <div class="challenge">
                                <h4>Gestion du planning long terme : </h4>
                                <p>Nécessité de découper le projet en phases avec des jalons clairs.</p>
                                <p><strong>Solution :</strong> Vérification réguliere de l'avancer avec l'équipe</p>
                            </div>
                            <div class="challenge">
                                <h4>Tests et validation progressive</h4>
                                <p>Mise en place de test unitaire par fonctionnalité.</p>
                                <p><strong>Solution :</strong> Reunion fréquente avec l'équipe pour valider les fonctionnalités
                                </p>
                            </div>
                        </section>

                        <section class="projet-competences">
                            <h3>Compétences Mobilisées</h3>
                            <ul>
                                <li>Développement web fullstack (PHP, Bootstrap, SQL)</li>
                                <li>Gestion de projet (planification, documentation, autonomie)</li>
                                <li>Modélisation de base de données relationnelle</li>
                                <li>Gestion de la sécurité et des droits utilisateurs</li>
                                <li>Déploiement d’application web sur serveur distant</li>
                                    <li>Utilisation de Git et GitHub pour le versionning</li>
                            <li>Rédaction de documentation technique et utilisateur</li>                        
                            </ul>
                        </section>

                        <section class="projet-bilan">
                            <h3>Bilan Personnel</h3>
                            <p>
                            Ce projet m’a permis de structurer ma démarche de gestion de projet sur le long terme,
                            d’utiliser des outils de planification (diagramme de Gantt) et de renforcer mes compétences
                            en organisation,
                            documentation et suivi de projet.
                            </p>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Modal détaillée pour Portfolio -->
            <div class="projet-details-modal" id="projetModalportfolio">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="projet-details">
                        <h2>Portfolio</h2>

                        <section class="projet-context">
                            <h3>Contexte du Projet</h3>
                            <p>
                            Ce portfolio a pour objectif de présenter les compétences que j’ai acquises au cours de mes deux années de BTS.
                            Il vise à démontrer mes capacités en tant que développeur, 
                            tout en servant de vitrine pour valoriser mon profil, ma présentation et mon développement professionnel.
                            </p>
                        </section>

                        <section class="projet-environment">
                            <h3>Environnement Technologique</h3>
                            <ul>
                                <li>Front-end : Bootstrap 5, HTML5, CSS3, Vanta.js, responsive design</li>
                                <li>Back-end : (PHP 8), architecture MVC</li>
                                <li>Outils : PHPMailer, GitHub (gestion de versions), VS Code, hébergement HTTPS</li>
                            </ul>
                        </section>

                        <section class="projet-tasks">
                            <h3>Tâches Réalisées</h3>
                            <ul>
                                <li>Analyse du besoin, rédaction du cahier des charges</li>
                                <li>Développement des fonctionnalités principales : navigation, modal, design, contact</li>
                                <li>validation des formulaires et gestion des erreurs</li>
                                <li>Déploiement sur serveur distant, configuration du HTTPS et optimisation de la
                                    sécurité</li>
                            </ul>
                        </section>

                        <section class="projet-competences">
                            <h3>Compétences Mobilisées</h3>
                            <ul>
                                <li>Développement web front-end (php, HTML, CSS, Bootstrap, Vanta.js)</li>
                                <li>Gestion de projet (planification, documentation, autonomie)</li>
                                <li>Déploiement d’application web sur serveur distant</li>
                                <li>Utilisation de Git et GitHub pour le versionning</li>
                                <li>Rédaction de documentation technique et utilisateur</li>                          
                            </ul>
                        </section>

                        <section class="projet-bilan">
                            <h3>Bilan Personnel</h3>
                            <p>
                                Je suis fier d’avoir mené ce projet à bien, seul, en développant un site à la fois esthétique, professionnel et épuré.
                                J’espère qu’il reflète fidèlement mes compétences et qu’il me sera utile, 
                                après le BTS et dans la poursuite de mes études, pour m’insérer sur le marché du travail.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>

    <script src="../js/main.js"></script>
    <script src="../js/projets.js"></script>
</body>

</html>