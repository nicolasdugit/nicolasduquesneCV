<?php $language = "en_EN" ?>
<?php $languageLink ="index.php?lang=fr" ?>
<?php $url = "http://www.nicolasduquesne.com" ?>
<?php $title = "Nicolas Duquesne, Web Developer" ?>
<?php $description = "Welcome on Nicolas Duquesne landing page, web developer freelance" ?>
<?php $keywords = "Nicolas Duquesne, développeur, web, HML, CSS, JavaScript, PHP, Bootsrap, freelance" ?>

<?php ob_start(); ?>
	
	<?php include('view/en/includes/headerSection.php') ?>
	<?php include('view/en/includes/introSection.php') ?>

	<div class="container" style="text-align: center; margin: 50px auto;">
			<h1>ERROR - THIS PAGE DOESN'T EXIST</h1>
			<hr>
			<a class="btn btn-warning" href="https://www.nicolasduquesne.com">Home</a>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php') ?>