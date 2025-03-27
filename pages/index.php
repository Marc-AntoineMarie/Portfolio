<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BTS SIO SLAM</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php include("../include/header/navbar.php"); ?>

    <main class="home-container">
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue sur mon Portfolio</h1>
                <h2>Étudiant en BTS SIO SLAM</h2>
                <p>Découvrez mes projets et compétences en développement informatique</p>
                <a href="pages/projets.html" class="cta-button">Voir mes projets</a>
            </div>
        </section>

        <section class="quick-info">
            <div class="info-card">
                <i class="fas fa-code"></i>
                <h3>Développement</h3>
                <p>Création d'applications et sites web</p>
            </div>
            <div class="info-card">
                <i class="fas fa-project-diagram"></i>
                <h3>Gestion de Projet</h3>
                <p>Méthodologies agiles et traditionnelles</p>
            </div>
            <div class="info-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Technologies</h3>
                <p>Stack technique moderne et variée</p>
            </div>
        </section>
    </main>

    <?php include("../include/footer/footer.php"); ?>

    <script src="js/main.js"></script>
</body>
</html>
