<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/pages/competences.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
        <?php include("../include/header/navbar.php"); ?>
    </header>
    <main class="competences-container">
        <h1>Mes Compétences</h1>

        <!-- Compétences BTS SIO -->
        <section class="competences-section">
            <h2>Compétences du Référentiel BTS SIO</h2>
            <section class="bts-section">

                <div class="competences-grid">
                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-laptop-code"></i>
                            <h4>Développer la présence en ligne de l'organisation</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Participation à la valorisation de l'image numérique de l'organisation</li>
                                <li>Référencement des services en ligne</li>
                                <li>Participation stratégique à l'évolution et à l'enrichissement d'un site Web exploitant efficacement les données</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Création et optimisation de sites web pour améliorer la visibilité en ligne de l'organisation. Mise en place de stratégies SEO et référencement pour augmenter la visibilité. Développement de fonctionnalités web innovantes exploitant les données de l'organisation.</p>
                                <ul>
                                    <li><strong>Outils maîtrisés :</strong> WordPress, HTML5, CSS3, JavaScript, PHP, Google Analytics</li>
                                    <li><strong>Techniques appliquées :</strong> Responsive design, SEO on-page, Respect de la 3 click rule, intégration de médias sociaux</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <a href="https://www.gcdeveloppement.fr/" target="_blank">GC Développement</a><span> / </span> <a href="https://lea-numerique.fr/" target="_blank" target="_blank"> Lea Numérique </a><span> – Site web vitrine </span></div>
                        </div>
                    </div>

                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-users-cog"></i>
                            <h4>Travailler en mode projet</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Analyse des objectifs et modalités d'organisation d'un projet</li>
                                <li>Planification des activités</li>
                                <li>Évaluation des indicateurs de suivi et analyse des écarts</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Application des méthodologies de gestion de projet adaptées aux besoins spécifiques. Définition et suivi des jalons, des ressources et des contraintes. Mesure de la performance et ajustements en fonction des écarts observés.</p>
                                <ul>
                                    <li><strong>Méthodologies utilisées :</strong> Agile/Scrum, Kanban, Cycle en V</li>
                                    <li><strong>Outils de gestion :</strong> Trello, GitHub Projects, MS Project</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <span>1ClickAllEat</span></div>
                        </div>
                    </div>

                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-tools"></i>
                            <h4>Mettre à disposition des utilisateurs un service informatique</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Réalisation des tests d'intégration et d'acceptation</li>
                                <li>Déploiement de services</li>
                                <li>Accompagnement des utilisateurs</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Conception et exécution de tests rigoureux pour valider le bon fonctionnement des services. Mise en production et déploiement de solutions informatiques. Formation et support auprès des utilisateurs finaux.</p>
                                <ul>
                                    <li><strong>Types de tests maîtrisés :</strong> Tests unitaires, d'intégration, fonctionnels et de charge</li>
                                    <li><strong>Techniques de déploiement :</strong> CI/CD, conteneurisation, déploiement continu</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <span>Welcome Training, GC SERVICE</span></div>
                        </div>
                    </div>

                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-server"></i>
                            <h4>Gérer le patrimoine informatique</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Recensement et identification des ressources numériques</li>
                                <li>Exploitation des référentiels, normes et standards</li>
                                <li>Vérification des conditions de continuité de service</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Documentation et suivi des équipements et ressources informatiques. Application des standards et bonnes pratiques ITIL. Mise en place et surveillance des solutions de haute disponibilité et de continuité de service.</p>
                                <ul>
                                    <li><strong>Outils d'inventaire :</strong> GLPI, OCS Inventory, Active Directory</li>
                                    <li><strong>Solutions de continuité :</strong> Sauvegarde incrémentielle, PRA/PCA, clustering</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <span>GC SERVICE</span></div>
                        </div>
                    </div>

                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-headset"></i>
                            <h4>Répondre aux incidents et aux demandes d'assistance</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Collecte, suivi et orientation des demandes</li>
                                <li>Traitement des demandes concernant les services réseau et système</li>
                                <li>Traitement des demandes concernant les applications</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Mise en place et utilisation de systèmes de ticketing pour suivre les demandes. Résolution des problèmes d'infrastructure réseau et système. Dépannage et support applicatif pour les utilisateurs finaux.</p>
                                <ul>
                                    <li><strong>Outils de ticketing :</strong> GLPI, Jira Service Desk, Zendesk</li>
                                    <li><strong>Compétences techniques :</strong> Diagnostic réseau, troubleshooting système, résolution de bugs</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <span>GC SERVICE</span></div>
                        </div>
                    </div>

                    <div class="competence-item">
                        <div class="competence-header" onclick="toggleCompetence(this)">
                            <i class="fas fa-graduation-cap"></i>
                            <h4>Organiser son développement professionnel</h4>
                            <i class="fas fa-chevron-down toggle-icon"></i>
                        </div>
                        <div class="competence-content">
                            <ul>
                                <li>Mise en place d'un environnement d'apprentissage personnel</li>
                                <li>Mise en œuvre d'outils et stratégies de veille informationnelle</li>
                                <li>Gestion de son identité professionnelle</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Création d'un écosystème d'apprentissage continu et de perfectionnement. Utilisation d'outils de curation et de veille technologique. Développement et maintenance d'une présence professionnelle en ligne.</p>
                                <ul>
                                    <li><strong>Sources de veille :</strong> Newsletters spécialisées, GitHub trends, forums techniques</li>
                                    <li><strong>Développement personnel :</strong> Formation continue, certifications, participation à des hackathons</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés : <span>Tous projets</span></div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>

    <script src="../js/competences.js"></script>
</body>

</html>