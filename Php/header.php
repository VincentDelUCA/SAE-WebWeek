<header>
    <a href="./index.php"><img src="./Image/logo/Logo_fond_blanc.png" alt=""></a>
    <nav>
        <ul class="menu">
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./region.php">Régions</a></li>
            <li><a href="./animation.php">Animations</a></li>
            <li><a href="./preinscription.php">Préinscription</a></li>
            <li><a href="./faq.php">FAQ</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <section class="language">
        <div class="selected_lang">
            <p>Français</p>
        </div>
        <ul>
            <li><a href="#">English</a></li>
        </ul>
    </section>
    
</header>

<?php
$connection = new PDO('mysql:host=localhost;port=3306;dbname=web_week','root','');
?>