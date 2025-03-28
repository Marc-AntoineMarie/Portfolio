<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/projets.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include("../include/header/navbar.php"); ?>

    <main class="projets-container">
        <h1>Mes Projets</h1>

        <!-- Filtres de projets -->
        <div class="projet-filters">
            <button class="filter-btn active" data-filter="all">Tous</button>
            <button class="filter-btn" data-filter="web">Web</button>
            <button class="filter-btn" data-filter="application">Applications</button>
            <button class="filter-btn" data-filter="base-donnees">Base de données</button>
        </div>

        <!-- Grille des projets -->
        <div class="projets-grid">
            <!-- Projet 1 -->
            <article class="projet-card" data-category="web">
                <div class="projet-image">
                    <img src="../assets/placeholder-project.jpg" alt="Image du projet">
                </div>
                <div class="projet-content">
                    <h3>Nom du Projet</h3>
                    <div class="projet-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                    </div>
                    <p class="projet-description">
                        Description courte du projet...
                    </p>
                    <div class="projet-links">
                        <a href="#" class="btn-details">Voir les détails</a>
                        <a href="#" class="btn-github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <?php include("../include/footer/footer.php"); ?>

    <script src="../js/main.js"></script>
    <script src="../js/projets.js"></script>
</body>
</html>
