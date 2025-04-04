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
                                <li>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques</li>
                                <li>Référencer les services en ligne de l’organisation et mesurer leur visibilité.</li>
                                <li>Participer à l’évolution d’un site Web exploitant les données de l’organisation.</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Création, optimisation et mise a jour de sites web pour améliorer la visibilité en ligne de l'organisation. Mise en place de stratégies SEO et référencement pour augmenter la visibilité. Développement de fonctionnalités web innovantes exploitant les données de l'organisation.</p>
                                <br>
                                <ul>
                                    <li><strong>Outils maîtrisés :</strong><br> WordPress, HTML5, CSS3, JavaScript, PHP, Google Analytics</li>
                                    <li><strong>Techniques appliquées :</strong><br> Responsive design, SEO on-page, Respect de la 3 click rule, intégration de médias sociaux</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Site web vitrine entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">GC Développement</a>
                                <span> / </span> 
                                <a href="https://lea-numerique.fr/" target="_blank" target="_blank"> Lea Numérique </a>
                                <br> <br> 
                                <span> – Projet d'école </span>
                                <br>
                                <a href="#" target="_blank">Portfolio</a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> Welcome Training </a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> 1ClickAllEat </a>
                            </div>
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
                                <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                                <li>Planification des activités</li>
                                <li>Évaluation des indicateurs de suivi et analyse des écarts</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Application des méthodologies de gestion de projet adaptées aux besoins spécifiques. Définition et suivi des jalons, des ressources et des contraintes. Mesure de la performance et ajustements en fonction des écarts observés.</p>
                                <br>    
                                <ul>
                                    <li><strong>Méthodologies utilisées :</strong><br> Agile/Scrum</li>
                                    <li><strong>Outils de gestion :</strong><br> Trello, GitHub</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Site web vitrine entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">Logiciel LDAP</a>
                                <span> / </span> 
                                <br> <br> 
                                <span> – Projet d'école </span>
                                <br>
                                <a href="#" target="_blank">Portfolio</a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> Welcome Training </a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> 1ClickAllEat </a>
                            </div>
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
                                <li>- Réalisation des tests d'intégration et d'acceptation d’un service</li>
                                <li>- Déploiement de services</li>
                                <li>- Accompagner les utilisateurs dans la mise en place d’un service</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Conception et exécution de tests rigoureux pour valider le bon fonctionnement des services. Mise en production et déploiement de solutions informatiques. Formation et support auprès des utilisateurs finaux.</p>
                                <br>
                                <ul>
                                    <li><strong>Types de tests maîtrisés :</strong><br> Tests unitaires, d'intégration, fonctionnels</li>
                                    <li><strong>Techniques de déploiement :</strong><br> CI/CD, conteneurisation, déploiement continu</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Application entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">Logiciel LDAP</a>
                                <span> / </span> 
                                <br> <br> 
                                <span> – Projet d'école </span>
                                <br>
                                <a href="#" target="_blank" target="_blank"> Welcome Training </a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> 1ClickAllEat </a>
                            </div>
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
                                <li>Exploiter des référentiels, normes et standards adoptés par le prestataire informatique</li>
                                <li>Mettre en place et vérifier les niveaux d’habilitation associés à un service</li>
                                <li>Vérifier les conditions de la continuité d’un service informatique</li>
                                <li>Gérer des sauvegardes</li>
                                <li>Vérifier le respect des règles d’utilisation des ressources numériques</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Documentation et suivi des équipements et ressources informatiques. Application des standards et bonnes pratiques ITIL. Mise en place et surveillance des solutions de haute disponibilité et de continuité de service.</p>
                                <br>
                                <ul>
                                    <li><strong>Outils d'inventaire :</strong><br> GLPI, OCS Inventory, Active Directory</li>
                                    <li><strong>Solutions de continuité :</strong><br> Sauvegarde incrémentielle, PRA/PCA, clustering</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Application entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">Logiciel LDAP</a>
                            </div>
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
                                <li>Traiter des demandes concernant les services réseau et système, applicatifs</li>
                                <li>Traitement des demandes concernant les applications</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Mise en place et utilisation de systèmes de ticketing pour suivre les demandes. Résolution des problèmes d'infrastructure réseau et système. Dépannage et support applicatif pour les utilisateurs finaux.</p>
                                <br>
                                <ul>
                                    <li><strong>Outils de ticketing :</strong><br> ZOHO, ZOHO Service Desk, ZOHO Help Center, ZOHO CMR, ZOHO VAULT</li>
                                    <li><strong>Compétences techniques :</strong><br> Gestion d'appels, Diagnostic téléphonique, Support à distance, Suivi d'incidents, Escalade, Communication client</li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Application entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">Logiciel LDAP</a>
                            </div>
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
                                <li>Mettre en œuvre des outils et stratégies de veille informationnelle</li>
                                <li>Gérer son identité professionnelle</li>
                                <li>Développer son projet professionnel</li>
                            </ul>
                            <div class="competence-details">
                                <h5>Détails des compétences</h5>
                                <p>Création d'un écosystème d'apprentissage continu et de perfectionnement. Utilisation d'outils de curation et de veille technologique. Développement et maintenance d'une présence professionnelle en ligne.</p>
                                <br>
                                 <ul>
                                    <li><strong>Sources de veille :</strong><br> Newsletters spécialisées, GitHub trends, forums techniques, Réseaux sociaux professionnels, Conférences (dotjs, AFUP Day, jsconf, meetups) </li>
                                    <li><strong>Développement personnel :</strong><br> Formation continue, Outils de veille (Feedly, GitHub, LinkedIn, Stack Overflow..) </li>
                                </ul>
                            </div>
                            <div class="project-link">Projets associés :  <br>
                                <span> – Application entreprise </span>
                                <br>
                                <a href="https://www.gcdeveloppement.fr/" target="_blank">Logiciel LDAP</a>
                                <span> / </span> 
                                <br> <br> 
                                <span> – Projet d'école </span>
                                <br>
                                <a href="#" target="_blank" target="_blank"> Welcome Training </a>
                                <span> / </span> 
                                <a href="#" target="_blank" target="_blank"> 1ClickAllEat </a>
                            </div>
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