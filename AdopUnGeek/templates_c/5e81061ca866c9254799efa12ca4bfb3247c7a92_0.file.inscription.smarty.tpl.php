<?php /* Smarty version 3.1.27, created on 2015-12-16 09:49:32
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\AdopUnGeek\views\inscription.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:79625671a42cc32223_16068420%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81061ca866c9254799efa12ca4bfb3247c7a92' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\inscription.smarty.tpl',
      1 => 1450288121,
      2 => 'file',
    ),
    'e6047072256c9826195f58f734b6f80d256e2970' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\template.smarty.tpl',
      1 => 1450287853,
      2 => 'file',
    ),
    'c6ad185535fe9f800113bb0658fb20b219cf822e' => 
    array (
      0 => 'c6ad185535fe9f800113bb0658fb20b219cf822e',
      1 => 0,
      2 => 'string',
    ),
    '97811ec17254f843b9ccc685b61098794b8ac1f3' => 
    array (
      0 => '97811ec17254f843b9ccc685b61098794b8ac1f3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '79625671a42cc32223_16068420',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5671a42cc669f8_36450214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5671a42cc669f8_36450214')) {
function content_5671a42cc669f8_36450214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79625671a42cc32223_16068420';
?>
<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
$_smarty_tpl->properties['nocache_hash'] = '79625671a42cc32223_16068420';
?>
<link href="views/styleInscription.css" rel="stylesheet" type="text/css" />
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
$_smarty_tpl->properties['nocache_hash'] = '79625671a42cc32223_16068420';
?>

        <aside>

            <div class="texte">

                <address>
                    <h2>BLABLABLABLA</h2>
                    BLABLABlA<br/>
                    BLABLABLA<br/>
                    BLABLABLA<br/>
                </address>

                <ul>
                    <li class="phone">
                        06 94 12 25 53
                    </li>
                    <li class="email">
                        ADOPTEUNGEEK@mail.com
                    </li>
                </ul>


                </ul>
            </div>
        </aside>
    </header>

    <div class="contact">

        <h1>Contact us</h1>

        <?php echo form_inscription();?>


            <br>

            <input type="submit" name="Your message" Class="Connexion" value="Connexion"/>

            <br>


        </form>


    </div>

    </body>
    </html>

</main>

</body><?php }
}
?>