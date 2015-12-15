<?php /* Smarty version 3.1.27, created on 2015-12-12 07:11:13
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\views\accueil.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15277566c3911187248_58332208%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a463dc076407f50891eceab665dbf84cb12a24a4' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\views\\accueil.smarty.tpl',
      1 => 1449932801,
      2 => 'file',
    ),
    'e8f16105cac511bf8881c337d187443b00f51120' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\views\\template.smarty.tpl',
      1 => 1449933012,
      2 => 'file',
    ),
    'ca708031b8282be04ce09df5cb3f4385d8f485d9' => 
    array (
      0 => 'ca708031b8282be04ce09df5cb3f4385d8f485d9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '15277566c3911187248_58332208',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566c39111ac8e4_71523345',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566c39111ac8e4_71523345')) {
function content_566c39111ac8e4_71523345 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15277566c3911187248_58332208';
?>
<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="views/style.css" rel="stylesheet" type="text/css" />
    <link rel="Shortcut Icon" href="Photos/AdopteUnGeek.png">
</head>
<body>

<header>

    <div class="entetelogo"><a href="accueil.smarty.tpl"><img src="photos/AdopteUnGeek.png" alt="logo"></a></div>

    <ul id="nav">
	<li><a href="accueil">Accueil</a></li>
	<li><a href="inscription">Inscription</a></li>

        <li>
            <form id="search" method="post">
                <input class="search_data" name="saisie" type="text" placeholder="Secteur recherché ?" required />
                <input class="btn-left-loupe" name="go" type="submit" value="" />
            </form>
        </li>
    </ul>

    <h1 class="foot">
        Copyright <?php echo '<?php ';?>echo date("Y"); <?php echo '?>';?>, Tout droit reserves!
    </h1>

    </div>

</header>

<main>
<?php
$_smarty_tpl->properties['nocache_hash'] = '15277566c3911187248_58332208';
?>

    <p>accueil</p>

</main>

</body><?php }
}
?>