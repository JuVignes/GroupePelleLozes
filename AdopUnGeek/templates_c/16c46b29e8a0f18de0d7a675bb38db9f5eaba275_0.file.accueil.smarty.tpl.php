<?php /* Smarty version 3.1.27, created on 2015-12-16 09:59:20
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\AdopUnGeek\views\accueil.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114145671a678cde0d2_35883613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c46b29e8a0f18de0d7a675bb38db9f5eaba275' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\accueil.smarty.tpl',
      1 => 1450288722,
      2 => 'file',
    ),
    'e6047072256c9826195f58f734b6f80d256e2970' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\template.smarty.tpl',
      1 => 1450287853,
      2 => 'file',
    ),
    'accfcfcd2e3a95d9497419641e91ad38700a6536' => 
    array (
      0 => 'accfcfcd2e3a95d9497419641e91ad38700a6536',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '114145671a678cde0d2_35883613',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5671a678d073e1_44003069',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5671a678d073e1_44003069')) {
function content_5671a678d073e1_44003069 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114145671a678cde0d2_35883613';
?>
<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="Shortcut Icon" href="Photos/AdopteUnGeek.png">

</head>
<body>

<header>

    <div class="entetelogo"><a href="accueil.html"><img src="photos/AdopteUnGeek.png" alt="logo"></a></div>

    <ul id="nav">
	<li><a href="accueil.html">Accueil</a></li>
	<li><a href="inscription.html">Inscription</a></li>

        <li>
            <form id="search" method="post">
                <input class="search_data" name="saisie" type="text" placeholder="Secteur recherché ?" required />
                <input class="btn-left-loupe" name="go" type="submit" value="" />
            </form>
        </li>
    </ul>

    <h1 class="foot">
        <!-- Copyright  date("Y"); <?php echo '?>';?>, Tout droit reserves!-->
    </h1>

    </div>

</header>

<main>
<?php
$_smarty_tpl->properties['nocache_hash'] = '114145671a678cde0d2_35883613';
?>

    <h1>Site de Referencement</h1>

    <h2>Objectif</h2>
    <br>
    <p>Notre objectif est de permettre la visibilité de tous les ingénieurs informatique dans le monde pour facilité la recherche pour les RH</p>
    <br>
    <p>Inscription simple, où vous pourrez éditez votre profil de manière efficace.
        Votre spécialisation et vos compétences. Ainsi les recruteurs n'aurons plus qu'a faire une recherche d'une compétences ou domaine précis</p>
    <br>
    <br>
    <br>
    <h3>Site en construction</h3>

</main>

</body><?php }
}
?>