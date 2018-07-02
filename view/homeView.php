<?php $language = "fr_FR" ?>
<?php $languageLink ="index.php?lang=en" ?>
<?php $url = "http://www.nicolasduquesne.com" ?>
<?php $title = "Nicolas Duquesne, Développeur Web" ?>
<?php $description = "Bienvenue sur la page personnelle de Nicolas Duquesne, développeur web indépendant" ?>
<?php $keywords = "Nicolas Duquesne, développeur, web, HML, CSS, JavaScript, PHP, Bootsrap, auto entrepreneur, indépendant" ?>

<?php ob_start(); ?>

	<?php include('view/fr/includes/headerSection.php') ?>
	<?php include('view/fr/includes/introSection.php') ?>
	<?php include('view/fr/includes/aboutSection.php') ?>
	<?php include('view/fr/includes/experienceSection.php') ?>
	<?php include('view/fr/includes/portfolioSection.php') ?>
	<?php include('view/fr/includes/educationSection.php') ?>
	<?php include('view/fr/includes/progressSection.php') ?>
	<?php include('view/fr/includes/skillsSection.php') ?>
	<?php include('view/fr/includes/quoteSection.php') ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php') ?>