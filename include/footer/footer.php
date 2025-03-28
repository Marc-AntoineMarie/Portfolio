<footer>
    <div class="footer-content">
        <div class="footer-links">
            <a href="/Portfolio/pages/index.php">Accueil</a>
            <a href="/Portfolio/pages/projets.php">Projets</a>
            <a href="/Portfolio/pages/veille.php">Veille</a>
            <a href="/Portfolio/pages/contact.php">Contact</a>
        </div>
        <div class="social-links">
            <a href="https://github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
    <div class="copyright">
        &copy; <span><?php echo date('Y'); ?></span> Portfolio
    </div>
</footer>

<style>
.footer {
    background-color: var(--primary-color);
    color: white;
    padding: 20px 0;
    margin-top: auto;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-links {
    display: flex;
    gap: 20px;
}

.footer-links a {
    color: white;
    text-decoration: none;
}

.footer-links a:hover {
    text-decoration: underline;
}

.social-links {
    display: flex;
    gap: 20px;
}

.social-links a {
    color: white;
    text-decoration: none;
}

.social-links a:hover {
    text-decoration: underline;
}

.copyright {
    text-align: center;
    padding-top: 20px;
    margin-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.copyright span {
    margin: 0;
    font-size: 0.9em;
    opacity: 0.8;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        gap: 15px;
    }

    .social-links {
        flex-direction: column;
        gap: 10px;
    }

    .copyright {
        margin-top: 15px;
        padding-top: 15px;
    }
}
</style>
