<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/pages/veille.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <?php include("../include/header/navbar.php"); ?>
    </header>

    <main class="veille-container">
        <h1>Veille Technologique</h1>

        <!-- Introduction à la veille -->
        <section class="veille-intro">
            <h2>Ma Démarche de Veille</h2>
            <div class="veille-methode">
                <div class="methode-card">
                    <i class="fas fa-search"></i>
                    <h3>Sources d'Information</h3>
                    <ul>
                        <li>Sites spécialisés</li>
                        <li>Newsletters techniques</li>
                        <li>Flux RSS</li>
                        <li>Réseaux sociaux professionnels</li>
                    </ul>
                </div>
                <div class="methode-card">
                    <i class="fas fa-tools"></i>
                    <h3>Outils Utilisés</h3>
                    <ul>
                        <li>Feedly</li>
                        <li>GitHub</li>
                        <li>LinkedIn</li>
                        <li>Stack Overflow</li>
                    </ul>
                </div>
                <div class="methode-card">
                    <i class="fas fa-clock"></i>
                    <h3>Organisation</h3>
                    <ul>
                        <li>Veille quotidienne</li>
                        <li>Analyse hebdomadaire</li>
                        <li>Synthèse mensuelle</li>
                        <li>Archivage</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sujets de veille -->
        <section class="veille-sujets">
            <h2>Sujets de Veille</h2>

            <!-- Template d'un sujet de veille -->
            <article class="sujet-card">
                <div class="sujet-header">
                    <h3>Titre du sujet de veille</h3>
                    <span class="date">Date de début : XX/XX/XXXX</span>
                </div>
                <div class="sujet-content">
                    <div class="sujet-description">
                        <h4>Contexte</h4>
                        <p>Description du contexte et de l'importance du sujet...</p>
                    </div>
                    <div class="sujet-objectifs">
                        <h4>Objectifs</h4>
                        <ul>
                            <li>Objectif 1...</li>
                            <li>Objectif 2...</li>
                        </ul>
                    </div>
                    <div class="sujet-sources">
                        <h4>Sources principales</h4>
                        <ul>
                            <li><a href="#" target="_blank">Source 1</a></li>
                            <li><a href="#" target="_blank">Source 2</a></li>
                        </ul>
                    </div>
                    <div class="sujet-resultats">
                        <h4>Résultats et Applications</h4>
                        <p>Description des résultats et de leur application...</p>
                    </div>
                </div>
            </article>

            <!-- Zone pour ajouter de nouveaux sujets -->
            <div class="add-sujet-placeholder">
                <i class="fas fa-plus-circle"></i>
                <p>Espace pour ajouter de nouveaux sujets de veille</p>
            </div>
        </section>

        <!-- Section Newsletter -->
        <section class="veille-newsletter">
            <h2>Restez Informé</h2>
            <p>Abonnez-vous à ma newsletter pour recevoir mes dernières découvertes technologiques</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Votre adresse email" required>
                <button type="submit">S'abonner</button>
            </form>
        </section>
    </main>

    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>

    <!-- <script src="../js/main.js"></script>
    <script src="../js/veille.js"></script> -->

</body>

</html>