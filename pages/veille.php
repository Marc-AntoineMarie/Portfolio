<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille Technologique - Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/veille.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include("../include/header/navbar.php"); ?>



    <main class="container">
        <h1>Veille Technologique</h1>
        
        <div class="veille-intro">
            <p>Découvrez mes dernières recherches et analyses sur les tendances technologiques actuelles. Cette veille technologique est régulièrement mise à jour pour vous tenir informé des dernières avancées du secteur.</p>
        </div>

        <div class="veille-grid">
            <div class="veille-card">
                <div class="veille-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>Intelligence Artificielle</h3>
                <p>Explorez les dernières avancées en IA, du machine learning aux applications pratiques dans le développement.</p>
                <div class="veille-tags">
                    <span class="tag">Machine Learning</span>
                    <span class="tag">Deep Learning</span>
                    <span class="tag">Neural Networks</span>
                </div>
                <div class="veille-date">Mise à jour : Mars 2024</div>
                <a href="#" class="btn" onclick="openModal('ia-modal')">
                    <span>Lire plus</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="veille-card">
                <div class="veille-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Cybersécurité</h3>
                <p>Découvrez les dernières menaces et solutions en matière de sécurité informatique et de protection des données.</p>
                <div class="veille-tags">
                    <span class="tag">Sécurité Web</span>
                    <span class="tag">Cryptographie</span>
                    <span class="tag">Ethical Hacking</span>
                </div>
                <div class="veille-date">Mise à jour : Mars 2024</div>
                <a href="#" class="btn" onclick="openModal('cyber-modal')">
                    <span>Lire plus</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="veille-card">
                <div class="veille-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>DevOps & Cloud</h3>
                <p>Suivez l'évolution des pratiques DevOps et des technologies cloud pour optimiser le développement.</p>
                <div class="veille-tags">
                    <span class="tag">CI/CD</span>
                    <span class="tag">Docker</span>
                    <span class="tag">Kubernetes</span>
                </div>
                <div class="veille-date">Mise à jour : Mars 2024</div>
                <a href="#" class="btn" onclick="openModal('devops-modal')">
                    <span>Lire plus</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Modals -->
    <div id="ia-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-robot"></i> Intelligence Artificielle</h2>
                <span class="close-modal" onclick="closeModal('ia-modal')">&times;</span>
            </div>
            <div class="modal-body">
                <section>
                    <h3>Dernières Avancées</h3>
                    <p>L'intelligence artificielle continue de révolutionner de nombreux secteurs avec des avancées significatives dans le traitement du langage naturel et la vision par ordinateur.</p>
                    
                    <h4>Points Clés</h4>
                    <ul>
                        <li>Nouveaux modèles de language plus performants</li>
                        <li>Applications dans la santé et la recherche médicale</li>
                        <li>Enjeux éthiques et réglementaires</li>
                    </ul>
                </section>

                <section>
                    <h3>Impact sur le Développement</h3>
                    <p>Les outils d'IA transforment la façon dont nous développons les applications, avec des assistants de code plus intelligents et des systèmes de test automatisés plus sophistiqués.</p>
                </section>

                <section>
                    <h3>Ressources</h3>
                    <ul>
                        <li><a href="#" target="_blank">Documentation officielle</a></li>
                        <li><a href="#" target="_blank">Articles de recherche</a></li>
                        <li><a href="#" target="_blank">Tutoriels pratiques</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <div id="cyber-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-shield-alt"></i> Cybersécurité</h2>
                <span class="close-modal" onclick="closeModal('cyber-modal')">&times;</span>
            </div>
            <div class="modal-body">
                <section>
                    <h3>Tendances Actuelles</h3>
                    <p>La cybersécurité évolue rapidement pour faire face aux nouvelles menaces. Les attaques deviennent plus sophistiquées, nécessitant des défenses plus robustes.</p>
                    
                    <h4>Menaces Principales</h4>
                    <ul>
                        <li>Ransomware et attaques ciblées</li>
                        <li>Vulnérabilités Zero-day</li>
                        <li>Sécurité des applications web</li>
                    </ul>
                </section>

                <section>
                    <h3>Bonnes Pratiques</h3>
                    <p>La sécurité doit être intégrée dès la conception des applications. Voici quelques pratiques essentielles à suivre.</p>
                </section>
            </div>
        </div>
    </div>

    <div id="devops-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-code"></i> DevOps & Cloud</h2>
                <span class="close-modal" onclick="closeModal('devops-modal')">&times;</span>
            </div>
            <div class="modal-body">
                <section>
                    <h3>Évolution des Pratiques</h3>
                    <p>Le DevOps continue d'évoluer avec l'adoption croissante des technologies cloud et des pratiques d'automatisation.</p>
                    
                    <h4>Tendances Clés</h4>
                    <ul>
                        <li>Infrastructure as Code</li>
                        <li>Conteneurisation des applications</li>
                        <li>Orchestration avec Kubernetes</li>
                    </ul>
                </section>

                <section>
                    <h3>Outils et Technologies</h3>
                    <p>Découvrez les derniers outils et technologies qui façonnent l'avenir du DevOps.</p>
                </section>
            </div>
        </div>
    </div>

    <?php include("../include/footer/footer.php"); ?>

    <script src="../js/main.js"></script>
    <script src="../js/veille.js"></script>
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
            document.body.style.overflow = "hidden";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
            document.body.style.overflow = "auto";
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
                document.body.style.overflow = "auto";
            }
        }

        // Fermer avec Echap
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                document.querySelectorAll('.modal').forEach(modal => {
                    modal.style.display = "none";
                });
                document.body.style.overflow = "auto";
            }
        });
    </script>
</body>
</html>
