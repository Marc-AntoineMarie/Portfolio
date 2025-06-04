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
                    <p>J'ai choisi de réaliser une veille sur PHP car c'est un langage que je pratique à la fois en
                        cours et chez moi. Je souhaite rester informé des nouveautés, des évolutions et des bonnes
                        pratiques, et ainsi améliorer mon niveau et ma sécurité en développement web.</p>
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
                        <li>Flux RSS, Meetup, Conférences, Réseaux sociaux professionnels, Sites spécialisés
                            (stackoverflow, php.net), Feedly, GitHub, LinkedIn, Stack Overflow, AFUP PHP, Human Talk.
                        </li>
                    </ul>
                </div>
                <div class="sujet-resultats">
                    <h4>Résultats et Applications</h4>
                    <p>Depuis juin 2024, je n’ai pas encore utilisé les nouveautés de PHP, mais je m’y intéresse pour
                        mieux les comprendre.
                        <br> Par exemple, Lazy Objects = objets créés seulement quand on en a besoin (meilleure
                        performance).
                        <br> Property Hooks = permet d’intervenir quand on lit ou modifie une propriété d’un objet.
                        <br> Visibilité asymétrique = une propriété peut être lisible publiquement mais modifiable
                        seulement en privé.
                        <br> J’ai aussi découvert la faille critique CVE-2024-4577, qui permettait à un pirate
                        d’exécuter du code malveillant via PHP-CGI.
                        <br> Cela m’a sensibilisé à l’importance des mises à jour de sécurité et des bonnes pratiques.
                        <br> Cette veille m’aide à mieux comprendre les évolutions du langage et à préparer mon avenir
                        en développement web.
                    </p>
                </div>
                <div class="veille-btn-container">
                    <button class="btn-veille-modal" data-bs-toggle="modal" data-bs-target="#modalVeillePHP">Articles de
                        veille PHP</button>
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
                    <p>JavaScript est également un langage central dans ma formation et mes projets personnels. Je
                        m'intéresse particulièrement au JavaScript natif, mais j'aime aussi explorer les frameworks pour
                        enrichir mes compétences et suivre les tendances du web moderne.</p>
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
                        <li>Flux RSS, Meetup, Conférences, Réseaux sociaux professionnels, Sites spécialisés
                            (stackoverflow, mdn web doc), Feedly, GitHub, LinkedIn, DotsJS, Human Talk.</li>
                    </ul>
                </div>
                <div class="sujet-resultats">
                    <h4>Résultats et Applications</h4>
                    <p>Depuis juin 2024, je me suis intéressé aux nouveautés de JavaScript pour suivre l’évolution du
                        langage.
                        <br> Par exemple, Temporal va bientôt remplacer Date pour mieux gérer les dates et fuseaux
                        horaires.
                        <br> Les Array grouping (Array.groupBy) facilitent le tri d’un tableau par catégorie.
                        <br> La syntaxe "pipeline operator" (|>) rend les chaînes de fonctions plus lisibles (encore en
                        phase de proposition).
                        <br> J’ai aussi lu sur les Records & Tuples, des structures de données immuables plus fiables
                        que les objets classiques.
                        <br> Certaines failles XSS récentes m’ont rappelé l’importance de sécuriser les entrées
                        utilisateur (ex : DOMPurify).
                        <br> Cette veille me permet de suivre les tendances et d’améliorer progressivement ma
                        compréhension du langage.
                    </p>
                </div>
                <div class="veille-btn-container">
                    <button class="btn-veille-modal" data-bs-toggle="modal" data-bs-target="#modalVeilleJS">Articles de
                        veille JavaScript</button>
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
        <!-- Modal PHP -->
        <div class="modal fade" id="modalVeillePHP" tabindex="-1" aria-labelledby="modalVeillePHPLbl"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close close-left" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <h5 class="modal-title" id="modalVeillePHPLbl">Articles de veille PHP</h5>
                        <button type="button" class="btn-close close-right" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <!-- Article 1 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://www.php.net/releases/8.3/en.php" target="_blank">
                                    PHP 8.3 : nouveautés et retours d’expérience
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> Sorti en décembre 2023, PHP 8.3 poursuit l’évolution du
                                langage vers plus de performance et de sécurité. Cette version introduit notamment les
                                <em>readonly classes</em>, qui permettent de déclarer en une seule instruction que tous
                                les attributs d’une classe sont en lecture seule, renforçant ainsi l’immutabilité et la
                                sécurité des objets.
                            </p>
                            <p>
                                <strong>Points clés :</strong><br>
                                • <em>Fibres</em> (fibers) – un modèle de concurrence légère, plus simple à gérer qu’une
                                vraie coroutine, idéal pour découpler des traitements asynchrones sans complexité
                                excessive.<br>
                                • <em>Improvements des enums</em> – prise en charge des méthodes statiques et des cas
                                d’usage avancés pour modéliser vos états applicatifs.<br>
                                • Optimisations JIT et réductions du memory footprint, avec des benchmarks montrant
                                jusqu’à 5 % de gain sur certaines requêtes API.
                            </p>
                            <p>
                                En pratique, adopter PHP 8.3 signifie pouvoir profiter de classes immuables par défaut,
                                d’un modèle asynchrone plus simple et de performances légèrement améliorées sur vos
                                applications web.
                            </p>
                        </div>

                        <!-- Article 2 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://www.it-connect.fr/serveurs-web-cve-2024-4577-cette-faille-critique-dans-php-exploitee-a-grande-echelle/"
                                    target="_blank">
                                    Analyse de la faille critique CVE-2024-4577
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> En février 2024, plusieurs exploitations massives de la
                                vulnérabilité CVE-2024-4577 ont été observées sur des serveurs PHP-CGI exposés. Cette
                                faille permettait un contrôle total du serveur en injectant des paramètres malveillants
                                dans la requête HTTP.
                            </p>
                            <p>
                                <strong>Impacts :</strong><br>
                                • Exécution de code arbitraire à distance<br>
                                • Possibilité de pivoter vers d’autres services sur le réseau interne<br>
                                • Affectait PHP 7.4, 8.0 et 8.1 avant les correctifs de mars 2024<br>
                                • Recommandation de patch immédiat et de désactivation du mode CGI pour les usages non
                                indispensables.
                            </p>
                            <p>
                                Cette analyse vous aidera à comprendre comment la faille fonctionnait, pourquoi la mise
                                à jour rapide est cruciale, et quelles bonnes pratiques adopter (filtrage strict des
                                entrées, least privilege sur les processus web).
                            </p>
                        </div>

                        <!-- Article 3 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://youtrack.jetbrains.com/articles/WI-A-231736111/PhpStorm-2024.1-241.14494.237-build-Release-Notes"
                                    target="_blank">
                                    JetBrains PhpStorm 2024.1 EAP : focus sur la qualité de code
                                </a>
                                <a href="https://www.jetbrains.com/help/phpstorm/using-psalm.html"
                                    target="_blank">
                                    JetBrains PhpStorm 2024.1 EAP : focus sur la qualité de code
                                </a>
                                <a href="https://www.jetbrains.com/help/phpstorm/using-psalm.html"
                                    target="_blank">
                                    JetBrains PhpStorm 2024.1 EAP : focus sur la qualité de code
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> PhpStorm reste l’IDE de référence pour PHP ; la version
                                2024.1 (en Early Access depuis mars 2024) renforce l’intégration des outils d’analyse
                                statique et des linters.
                            </p>
                            <p>
                                <strong>Nouveautés :</strong><br>
                                • Inspection PSR-12 enrichie : détection automatique des violations de style et
                                suggestions de correction inline<br>
                                • Intégration native de Psalm et PHPStan : signalez directement dans l’éditeur les
                                problèmes de type et de sécurité sans passer par la console<br>
                                • Refactoring amélioré : renommage en cascade, extraction de méthodes plus fiable,
                                aperçu visuel des changements avant application.
                            </p>
                            <p>
                                En adoptant cette version, vous gagnez en productivité et en sûreté : votre code reste
                                propre et aligné avec les standards, et les failles communes sont identifiées dès la
                                rédaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal JavaScript -->
        <div class="modal fade" id="modalVeilleJS" tabindex="-1" aria-labelledby="modalVeilleJSLbl" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close close-left" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <h5 class="modal-title" id="modalVeilleJSLbl">Articles de veille JavaScript</h5>
                        <button type="button" class="btn-close close-right" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <!-- Article 1 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://developer.mozilla.org/en-US/blog/javascript-temporal-is-coming/?utm_source=chatgpt.com"
                                    target="_blank">
                                    MDN : guide complet de l’API Temporal
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> L’API <code>Temporal</code> est la future norme pour gérer
                                dates, heures et fuseaux dans JS, corrigeant les nombreuses lacunes de l’objet
                                <code>Date</code> (mutabilité, incohérences de fuseau).
                            </p>
                            <p>
                                <strong>Fonctionnalités :</strong><br>
                                • <code>PlainDate</code>, <code>PlainTime</code>, <code>ZonedDateTime</code> pour
                                manipuler finement les calendriers et fuseaux<br>
                                • Durées (<code>Duration</code>) et intervalles (<code>Temporal.Duration</code>,
                                <code>Temporal.Interval</code>)<br>
                                • Support des calendriers non grégoriens, utile en contexte internationalisé.
                            </p>
                            <p>
                                Ce guide MDN fournit exemples de migration pas-à-pas, conseils pour la compatibilité
                                (polyfill) et scénarios réels (planification d’événements, gestion de logs temps réel).
                            </p>
                        </div>

                        <!-- Article 2 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://2ality.com/2022/01/pipe-operator.html" target="_blank">
                                    2ality : état des lieux du pipeline operator (|>)
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> Proposé pour ES2024, le pipeline operator (<code>|></code>)
                                permet de chaîner des appels de fonction de façon plus lisible, à la manière de Unix
                                pipes ou du langage F#.
                            </p>
                            <p>
                                <strong>Synthèse des syntaxes :</strong><br>
                                • <em>Minimal</em> (une seule position de pipe) : <code>value |> fn</code><br>
                                • <em>Smart</em> (placeholder <code>#</code>) : <code>value |> fn(#)</code><br>
                                • <em>F# style</em> (dernier argument) : <code>value |> fn</code> équivalent à
                                <code>fn(value)</code>.
                            </p>
                            <p>
                                L’article détaille les avantages sur la lisibilité, comment configurer votre transpileur
                                (Babel, TypeScript) et quelques pièges à éviter (parenthèses, chaînes imbriquées).
                            </p>
                        </div>

                        <!-- Article 3 -->
                        <div class="veille-article">
                            <h6>
                                <a href="https://dyma.fr/blog/nouveautes-javascript-2024-toutes-les-nouvelles-fonctionnalites/"
                                    target="_blank">
                                    Dyma : nouveautés ECMAScript 2024 en pratique
                                </a>
                            </h6>
                            <p>
                                <strong>Contexte :</strong> ES2024 apporte plusieurs ajouts mineurs mais utiles pour
                                simplifier le code quotidien et améliorer la performance des scripts.
                            </p>
                            <p>
                                <strong>Fonctionnalités clés :</strong><br>
                                • <code>Array.groupBy</code> : regroupe les éléments d’un tableau selon une clé,
                                remplaçant des boucles manuelles complexes<br>
                                • Modules JSON natifs (<code>import data from "./config.json"</code>) : plus besoin de
                                fetcher ou parser manuellement<br>
                                • <em>Top-level await</em> généralisé : simplifie les modules asynchrones sans wrapper
                                en IIFE.
                            </p>
                            <p>
                                L’article inclut des exemples concrets (regroupement de logs, chargement conditionnel de
                                config), et des benchmarks montrant un léger gain de performance sur Chrome 114+ et Node
                                20+.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <?php include("../include/footer/footer.php"); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="../js/main.js"></script>
    <script src="../js/veille.js"></script> -->

</body>

</html>