<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        padding: 0;
        position: relative;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        width: 100%;
        position: fixed;
        bottom: 0;
    }
    .footer-container {
        width: 100%;
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
    main {
        flex: 1;
        padding-bottom: 60px; /* Ajusta este valor para dejar espacio para el footer */
    }
</style>

<body>
    <main>
        <!-- Contenido principal de tu página aquí -->
    </main>
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
    </footer>
</body>