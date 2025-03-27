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
            <!-- Template de projet - À dupliquer pour chaque projet -->
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

            <!-- Section détaillée du projet (popup) -->
            <div class="projet-details-modal" id="projetModal">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div class="projet-details">
                        <h2>Nom du Projet</h2>
                        
                        <section class="projet-context">
                            <h3>Contexte du Projet</h3>
                            <p>Décrivez ici le contexte du projet...</p>
                        </section>

                        <section class="projet-environment">
                            <h3>Environnement Technologique</h3>
                            <ul>
                                <li>Front-end : </li>
                                <li>Back-end : </li>
                                <li>Base de données : </li>
                                <li>Outils : </li>
                            </ul>
                        </section>

                        <section class="projet-tasks">
                            <h3>Tâches Réalisées</h3>
                            <ul>
                                <li>Tâche 1...</li>
                                <li>Tâche 2...</li>
                            </ul>
                        </section>

                        <section class="projet-timeline">
                            <h3>Planning du Projet</h3>
                            <div class="timeline">
                                <!-- Insérez ici votre diagramme de Gantt ou PERT -->
                            </div>
                        </section>

                        <section class="projet-challenges">
                            <h3>Difficultés et Solutions</h3>
                            <div class="challenge">
                                <h4>Difficulté 1</h4>
                                <p>Description de la difficulté...</p>
                                <p><strong>Solution :</strong> Description de la solution...</p>
                            </div>
                        </section>

                        <section class="projet-competences">
                            <h3>Compétences Mobilisées</h3>
                            <ul>
                                <li>Compétence 1 du référentiel...</li>
                                <li>Compétence 2 du référentiel...</li>
                            </ul>
                        </section>

                        <section class="projet-bilan">
                            <h3>Bilan Personnel</h3>
                            <p>Votre bilan personnel du projet...</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("../include/footer/footer.php"); ?>

    <script src="../js/main.js"></script>
    <script src="../js/projets.js"></script>
</body>
</html>
