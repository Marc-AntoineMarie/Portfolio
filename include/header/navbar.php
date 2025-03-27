<nav class="navbar">
    <div class="logo">
        <a href="../index.php">Mon Portfolio</a>
    </div>
    <ul class="nav-links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="competences.php">Compétences</a></li>
        <li><a href="projets.php">Projets</a></li>
        <li><a href="veille.php">Veille Technologique</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>

<style>
/* Styles pour le menu burger */
.burger {
    display: none;
    cursor: pointer;
}

.burger div {
    width: 25px;
    height: 3px;
    background-color: var(--text-color);
    margin: 5px;
    transition: all 0.3s ease;
}

@media screen and (max-width: 768px) {
    .nav-links {
        position: fixed;
        right: -100%;
        top: 70px;
        height: calc(100vh - 70px);
        background-color: var(--primary-color);
        flex-direction: column;
        width: 100%;
        text-align: center;
        transition: right 0.5s ease;
        padding: 2rem;
        display: flex;
    }

    .nav-links li {
        opacity: 0;
        margin: 1rem 0;
    }

    .nav-links.nav-active {
        right: 0;
    }

    .nav-links.nav-active li {
        opacity: 1;
    }

    .burger {
        display: block;
    }

    /* Animation du burger */
    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle .line2 {
        opacity: 0;
    }

    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }

    /* Animation des liens */
    @keyframes navLinkFade {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Toggle de la classe nav-active
        nav.classList.toggle('nav-active');

        // Animation des liens
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Animation du burger
        burger.classList.toggle('toggle');
    });
});
</script>