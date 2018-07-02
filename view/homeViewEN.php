<?php $language = "en_EN" ?>
<?php $languageLink ="index.php?lang=fr" ?>
<?php $url = "http://www.nicolasduquesne.com" ?>
<?php $title = "Nicolas Duquesne, Développeur Web" ?>
<?php $description = "Bienvenue sur la page personnelle de Nicolas Duquesne, développeur web indépendant" ?>
<?php $keywords = "Nicolas Duquesne, développeur, web, HML, CSS, JavaScript, PHP, Bootsrap, auto entrepreneur, indépendant" ?>

<?php ob_start(); ?>

	<?php include('view/en/includes/headerSection.php') ?>
	<?php include('view/en/includes/introSection.php') ?>
	<?php include('view/en/includes/aboutSection.php') ?>
	<?php include('view/en/includes/experienceSection.php') ?>
	<?php include('view/en/includes/portfolioSection.php') ?>
	<?php include('view/en/includes/educationSection.php') ?>
	<?php include('view/en/includes/progressSection.php') ?>
	<?php include('view/en/includes/skillsSection.php') ?>
	<?php include('view/en/includes/quoteSection.php') ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php') ?>