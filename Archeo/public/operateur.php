<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Operateur </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

<?php
	if (isset($_GET['id']))
	{
		require( __DIR__ . '/../app/view/operateur/show.php');
	}
	else
	{
		require( __DIR__ . '/../app/view/operateur/index.php');
	}
?>
	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
