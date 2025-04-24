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
                        <li>Flux RSS</li>
                        <li>Meetup</li>
                        <li>Conférences</li> 
                        <li>Réseaux sociaux professionnels</li>
                        <li>Sites spécialisés</li>
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
                        <li>AFUP PHP</li>
                        <li>DotsJS</li>
                        <li>Human Talk</li>
                    </ul>
                </div>
                <div class="methode-card">
                    <i class="fas fa-clock"></i>
                    <h3>Organisation</h3>
                    <ul>
                        <li>Veille quotidienne</li>
                        <li>Analyse hebdomadaire</li>
                        <li>Synthèse mensuelle</li>
                        <li>Lecture de patch note</li>
                        <li>Archivage</li>
                        <li>Ecoute de podcast</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Sujet de veille PHP -->
        <article class="sujet-card">
            <div class="sujet-header">
                <h3>Veille sur PHP</h3>
                <span class="date">Date de début : 01/06/2024</span>
            </div>
            <div class="sujet-content">
                <div class="sujet-description">
                    <h4>Contexte</h4>
                    <p>J'ai choisi de réaliser une veille sur PHP car c'est un langage que je pratique à la fois en cours et chez moi. Je souhaite rester informé des nouveautés, des évolutions et des bonnes pratiques, et ainsi améliorer mon niveau et ma sécurité en développement web.</p>
                </div>
                <div class="sujet-objectifs">
                    <h4>Objectifs</h4>
                    <ul>
                        <li>Suivre les mises à jour majeures et correctifs de sécurité du langage PHP.</li>
                        <li>Comprendre l'impact des nouvelles fonctionnalités et des failles découvertes.</li>
                        <li>Expérimenter les frameworks associés pour élargir mes compétences.</li>
                    </ul>
                </div>
                <div class="sujet-sources">
                    <h4>Sources principales</h4>
                    <ul>
                        <li>Flux RSS, Meetup, Conférences, Réseaux sociaux professionnels, Sites spécialisés (stackoverflow, php.net), Feedly, GitHub, LinkedIn, Stack Overflow, AFUP PHP, Human Talk.</li>
                    </ul>
                </div>
                <div class="sujet-resultats">
                    <h4>Résultats et Applications</h4>
                    <p>Depuis juin 2024, je n’ai pas encore utilisé les nouveautés de PHP, mais je m’y intéresse pour mieux les comprendre.
                        <br> Par exemple, Lazy Objects = objets créés seulement quand on en a besoin (meilleure performance).
                        <br> Property Hooks = permet d’intervenir quand on lit ou modifie une propriété d’un objet.
                        <br> Visibilité asymétrique = une propriété peut être lisible publiquement mais modifiable seulement en privé.
                        <br> J’ai aussi découvert la faille critique CVE-2024-4577, qui permettait à un pirate d’exécuter du code malveillant via PHP-CGI.
                        <br> Cela m’a sensibilisé à l’importance des mises à jour de sécurité et des bonnes pratiques.
                        <br> Cette veille m’aide à mieux comprendre les évolutions du langage et à préparer mon avenir en développement web.</p>
                </div>
            </div>
        </article>

        <!-- Sujet de veille JavaScript -->
        <article class="sujet-card">
            <div class="sujet-header">
                <h3>Veille sur JavaScript</h3>
                <span class="date">Date de début : 01/06/2024</span>
            </div>
            <div class="sujet-content">
                <div class="sujet-description">
                    <h4>Contexte</h4>
                    <p>JavaScript est également un langage central dans ma formation et mes projets personnels. Je m'intéresse particulièrement au JavaScript natif, mais j'aime aussi explorer les frameworks pour enrichir mes compétences et suivre les tendances du web moderne.</p>
                </div>
                <div class="sujet-objectifs">
                    <h4>Objectifs</h4>
                    <ul>
                        <li>Se tenir informé des évolutions et des nouveautés du langage natif.</li>
                        <li>Tester et adopter de nouvelles fonctionnalités pour améliorer mes projets.</li>
                        <li>Comprendre l'impact des nouvelles méthodes et outils sur le développement web.</li>
                    </ul>
                </div>
                <div class="sujet-sources">
                    <h4>Sources principales</h4>
                    <ul>
                    <li>Flux RSS, Meetup, Conférences, Réseaux sociaux professionnels, Sites spécialisés (stackoverflow, mdn web doc), Feedly, GitHub, LinkedIn, DotsJS, Human Talk.</li>
                    </ul>
                </div>
                <div class="sujet-resultats">
                    <h4>Résultats et Applications</h4>
                    <p>Depuis juin 2024, je me suis intéressé aux nouveautés de JavaScript pour suivre l’évolution du langage.
                        <br> Par exemple, Temporal va bientôt remplacer Date pour mieux gérer les dates et fuseaux horaires.
                        <br> Les Array grouping (Array.groupBy) facilitent le tri d’un tableau par catégorie.
                        <br> La syntaxe "pipeline operator" (|>) rend les chaînes de fonctions plus lisibles (encore en phase de proposition).
                        <br> J’ai aussi lu sur les Records & Tuples, des structures de données immuables plus fiables que les objets classiques.
                        <br> Certaines failles XSS récentes m’ont rappelé l’importance de sécuriser les entrées utilisateur (ex : DOMPurify).
                        <br> Cette veille me permet de suivre les tendances et d’améliorer progressivement ma compréhension du langage.</p>
                </div>
            </div>
        </article>

        <!-- Section Newsletter -->
        <!-- <section class="veille-newsletter">
            <h2>Restez Informé</h2>
            <p>Abonnez-vous à ma newsletter pour recevoir mes dernières découvertes technologiques</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Votre adresse email" required>
                <button type="submit">S'abonner</button>
            </form>
        </section> -->
    </main>

    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>

    <!-- <script src="../js/main.js"></script>
    <script src="../js/veille.js"></script> -->

</body>

</html>