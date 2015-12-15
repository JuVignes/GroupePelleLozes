<?php /* Smarty version 3.1.27, created on 2015-12-15 02:04:04
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\AdopUnGeek\views\inscription.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:967566fe5944f5627_56222264%%*/
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
      1 => 1450173816,
      2 => 'file',
    ),
    '3f7217fe97ba3adf4121234ec89a573f155da97c' => 
    array (
      0 => '3f7217fe97ba3adf4121234ec89a573f155da97c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '967566fe5944f5627_56222264',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566fe59451e431_59618970',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566fe59451e431_59618970')) {
function content_566fe59451e431_59618970 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '967566fe5944f5627_56222264';
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
$_smarty_tpl->properties['nocache_hash'] = '967566fe5944f5627_56222264';
?>

    <?php echo form_inscription();?>


</main>

</body><?php }
}
?>