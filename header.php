<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="Shortcut Icon" href="Photos/AdopteUnGeek.png">
</head>
<body>

<header>

    <div class="entetelogo"><a href="index.php"><img src="photos/AdopteUnGeek.png" alt="logo"></a></div>

    <ul id="nav"><!--
	--><li><a href="index.php">Accueil</a></li><!--
	--><li><a href="Contact.php">Contact</a></li><!--
	--><li><a href="Presentation.php">Presentation</a></li><!--
	--><li><a href="Inscription.php">Inscription</a></li><!--
	--><li><a href="Connexion.php">Connexion</a></li>

        <li>
            <form id="search" method="post">
            <input class="search_data" name="saisie" type="text" placeholder="Secteur recherché ?" required />
            <input class="btn-left-loupe" name="go" type="submit" value="" />
            </form>
        </li>
    </ul>

        <h1 class="foot">
            Copyright <?php echo date("Y"); ?>, Tout droit reserves!
        </h1>

    </div>

</header>

</head></body>