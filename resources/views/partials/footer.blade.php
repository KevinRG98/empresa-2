<footer>
    <div class="footer-container">
        <p>&copy; <?php echo date("Y"); ?> Tu Empresa. Todos los derechos reservados.</p>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca de</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li><a href="privacy.php">Privacidad</a></li>
            </ul>
        </nav>
    </div>
    <style>
        .footer-container {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .footer-container nav ul {
            list-style: none;
            padding: 0;
        }
        .footer-container nav ul li {
            display: inline;
            margin: 0 15px;
        }
        .footer-container nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</footer>