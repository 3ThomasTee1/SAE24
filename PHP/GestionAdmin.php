<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Médical</title>
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>
    <header>
        <nav>
			<img src="../Images/logo_cabinet.png" alt="Switching Cabinet Logo" class="logo">
            <h1>Switching Cabinet</h1>
            <ul>
                <li><a href="index.html"> Accueil</a></li>
                <li><a href="rendez_vous2.html"> Rendez-vous</a></li>
				<li><a href="mentions_legales.html"> Mentions légales</a></li>
                <!--<li><a href="index.html"> Nous contacter</a></li>!-->
			</ul>
            <a href="login_form.php" class="login">Me connecter</a>
        </nav>
    </header>
    <main>
    <section class="welcome">
        <h1>Page de gestion du site web</h1>
        <p>Bienvenue dans la section gestion</p>
    </section>
    </main>
    <aside id="last">
		<hr>
			<p><em> Validation de la page HTML5 - CSS3 </em></p>
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftresgots.atwebpages.com%2FSAE_14%2Findex.html" target="_blank"> 
					<img class= "image-responsive" src="../Images/html-5.png" alt="HTML5 Valide !">
				</a>
				<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Ftresgots.atwebpages.com%2FSAE_14%2FStyle%2FStyle_adaptatif.css" target="_blank">
					<img class= "image-responsive" src="../Images/css-3.png" alt="CSS Valide !">
				</a>
	</aside>
    <footer>
        <ul>
            <li><a href="https://www.iut-blagnac.fr/" target="_blank"><strong>l'IUT de Blagnac</strong></a></li>
            <li>Département Réseaux et Télécommunications</li>
            <li>BUT1</li>
            <li><a href="Mentions_legales.html"> Mentions légales</a></li>
        </ul>
    </footer>
</body>
</html>
