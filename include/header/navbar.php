<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BTS SIO SLAM</title>
    <link rel="stylesheet" href="../css/include/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Three.js est nécessaire pour VANTA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    <style>
        /* Ajout d'une transition pour une animation fluide */
        .navbar {
            transition: transform 0.3s ease;
        }

        /* Classe qui déplace la navbar hors de la vue */
        .nav-hidden {
            transform: translateY(-100%);
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="../index.php">Marc-Antoine Marie</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="bts.php">BTS SIO SLAM</a></li>
            <li><a href="competences.php">Compétences</a></li>
            <li><a href="projets.php">Réalisations</a></li>
            <li><a href="veille.php">Veille Technologique</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <script src="../js/navbar.js"></script>
</body>

</html>