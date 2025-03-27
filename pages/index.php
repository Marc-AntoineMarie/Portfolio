<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BTS SIO SLAM</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Three.js est nécessaire pour VANTA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    <style>
    #vanta-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
    }

    .hero-content {
        position: relative;
        z-index: 1;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .quick-info {
        position: relative;
        z-index: 1;
        background: rgba(44, 62, 80, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        margin: 2rem auto;
        padding: 2rem;
    }

    .info-card {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
        border-radius: 10px;
        padding: 1.5rem;
        transition: transform 0.3s ease;
        color: #ffffff;
    }

    .info-card i {
        color: #4a90e2;
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .info-card:hover {
        transform: translateY(-5px);
        background: rgba(0, 0, 0, 0.4);
    }
    </style>
</head>
<body>

    <?php include("../include/header/navbar.php"); ?>

    <main class="home-container">
        <div id="vanta-bg"></div>
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
    <script>
        VANTA.WAVES({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x2c3e50,
            shininess: 27.00,
            waveHeight: 20.00,
            waveSpeed: 0.75,
            zoom: 0.65
        });
    </script>
</body>
</html>
