<?php $title = "Nicolas Duquesne, Développeur Web" ?>

<?php ob_start(); ?>

	<?php include('view/includes/headerSection.php') ?>
	<?php include('view/includes/introSection.php') ?>
	<?php include('view/includes/aboutSection.php') ?>
	<?php include('view/includes/experienceSection.php') ?>
	<?php include('view/includes/portfolioSection.php') ?>
	<?php include('view/includes/educationSection.php') ?>
	<?php include('view/includes/skillsSection.php') ?>
	<?php include('view/includes/progressSection.php') ?>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php') ?>