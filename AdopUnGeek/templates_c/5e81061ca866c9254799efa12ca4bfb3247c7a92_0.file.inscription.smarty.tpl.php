<?php /* Smarty version 3.1.27, created on 2015-12-12 10:02:55
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\AdopUnGeek\views\inscription.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3212566c614f969d71_46898723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81061ca866c9254799efa12ca4bfb3247c7a92' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\inscription.smarty.tpl',
      1 => 1449943369,
      2 => 'file',
    ),
    'e6047072256c9826195f58f734b6f80d256e2970' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\template.smarty.tpl',
      1 => 1449942570,
      2 => 'file',
    ),
    '3f7217fe97ba3adf4121234ec89a573f155da97c' => 
    array (
      0 => '3f7217fe97ba3adf4121234ec89a573f155da97c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3212566c614f969d71_46898723',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566c614f991497_21393432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566c614f991497_21393432')) {
function content_566c614f991497_21393432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3212566c614f969d71_46898723';
?>
<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--<link href="views/style.css" rel="stylesheet" type="text/css" />
    <link rel="Shortcut Icon" href="Photos/AdopteUnGeek.png">-->
</head>
<body>

<header>

    <!--<div class="entetelogo"><a href="accueil.smarty.tpl"><img src="photos/AdopteUnGeek.png" alt="logo"></a></div>-->

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
$_smarty_tpl->properties['nocache_hash'] = '3212566c614f969d71_46898723';
?>

    <?php echo form_inscription();?>


</main>

</body><?php }
}
?>