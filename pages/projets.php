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
                    <img src="../assets/picture/1ClickAllEat.png" alt="1ClickAllEat" style="object-fit:cover;width:100%;height:100%;">
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
                    </div>
                    <p class="projet-description">
                        Application web de réservation et commande de repas en ligne pour restaurants, pensée pour fluidifier l'expérience client et optimiser la gestion côté restaurateur.
                    </p>
                    <div class="projet-links">
                        <a href="#projetModal1ClickAllEat" class="btn-details">Voir les détails</a>
                        <a href="https://github.com/Marc-AntoineMarie/1ClickAllEat" class="btn-github" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://1clickalleat-demo.com" class="btn-demo" target="_blank">Démo</a>
                        <a href="../assets/picture/Cahier_des_Charges_1ClickAllEat.pdf" class="btn-pdf" target="_blank">Cahier des charges</a>
                    </div>
                </div>
            </article>

            <!-- Modal détaillée pour 1ClickAllEat -->
            <div class="projet-details-modal" id="projetModal1ClickAllEat">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="projet-details">
                        <h2>1ClickAllEat</h2>
                        <h2>1ClickAllEat</h2>

                        <section class="projet-context">
                            <h3>Contexte du Projet</h3>
                            <p>
                                Application développée entre novembre 2024 et avril 2025 dans le cadre de ma formation BTS SIO. Le projet vise à permettre la réservation et la prise de commande en ligne dans des restaurants, pour une expérience sans attente, tout en optimisant la gestion côté restaurateur. J'ai travaillé seul sur toutes les phases du projet.
                            </p>
                        </section>

                        <section class="projet-environment">
                            <h3>Environnement Technologique</h3>
                            <ul>
                                <li>Front-end : Blade (Laravel), Bootstrap, responsive design</li>
                                <li>Back-end : Laravel (PHP)</li>
                                <li>Base de données : SQLite (local), PhpMyAdmin (VPS)</li>
                                <li>Outils : Breeze, Faker pour les données de test, hébergement HTTPS</li>
                            </ul>
                        </section>

                        <section class="projet-tasks">
                            <h3>Tâches Réalisées</h3>
                            <ul>
                                <li>Conception et développement complet de l’application (front-end et back-end)</li>
                                <li>Création de l’architecture MVC sous Laravel</li>
                                <li>Implémentation de la gestion des restaurants, menus, commandes, réservations</li>
                                <li>Authentification multi-profils (clients, restaurateurs)</li>
                                <li>Déploiement sur serveur, mise en place du HTTPS</li>
                                <li>Utilisation de l’IA pour l’inspiration design et le débogage</li>
                                <li>Tests unitaires et gestion des données de test avec Faker</li>
                            </ul>
                        </section>

                        <section class="projet-timeline">
                            <h3>Planning du Projet</h3>
                            <div class="timeline">
                                Projet mené de novembre 2024 à avril 2025, avec phases de conception, développement, tests, puis déploiement et amélioration continue. Travail réparti sur plusieurs semaines, avec une montée en compétences progressive sur Laravel.
                            </div>
                            <div style="margin-top:1rem;">
                                <a href="../assets/picture/Gantt_1ClickAllEat.pdf" class="btn-pdf" target="_blank">Télécharger le Gantt (PDF)</a>
    </div>
</section>

                        <section class="projet-challenges">
                            <h3>Difficultés et Solutions</h3>
                            <div class="challenge">
                                <h4>Découverte de Laravel et adaptation à un nouveau framework</h4>
                                <p>Avant ce projet, je n'avais jamais utilisé de framework PHP. J'ai dû m'approprier Laravel, comprendre son fonctionnement (routes, migrations, Blade, etc.) et apprendre à structurer un projet complet.</p>
                                <p><strong>Solution :</strong> Documentation officielle, tutoriels, essais/erreurs.</p>
                            </div>
                            <div class="challenge">
                                <h4>Gestion de la personnalisation graphique</h4>
                                <p>Pas de maquette initiale : j’ai adapté des templates Bootstrap pour obtenir un rendu professionnel et responsive, en prévoyant la possibilité de personnaliser le style pour chaque restaurant à l’avenir.</p>
                                <p><strong>Solution :</strong> Recherche d’exemples, adaptation de templates, tests sur différents supports.</p>
                            </div>
                        </section>

                        <section class="projet-competences">
                            <h3>Compétences Mobilisées</h3>
                            <ul>
                                <li>Développement web fullstack (Laravel, PHP, Blade, Bootstrap)</li>
                                <li>Gestion de projet en autonomie</li>
                                <li>Implémentation de l’authentification et de la sécurité</li>
                                <li>Déploiement d’application web et gestion de base de données</li>
                                <li>Utilisation d’outils de tests et d’automatisation</li>
                            </ul>
                        </section>

                        <section class="projet-bilan">
                            <h3>Bilan Personnel</h3>
                            <p>
                                Je suis fier d’avoir mené ce projet à bien, seul, en développant des fonctionnalités avancées et en progressant énormément sur Laravel et l’écosystème PHP. Ce projet m’a permis de gagner en autonomie, en rigueur et en capacité à résoudre des problèmes complexes. Si je devais le refaire aujourd’hui, je l’aborderais de façon encore plus structurée et ambitieuse, avec des fonctionnalités innovantes pour les restaurateurs et les clients.
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