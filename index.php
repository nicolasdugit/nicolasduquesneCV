<?php 
 
require('controller/frontend.php');

try {
	if (isset($_GET['lang']))
	{
		if ($_GET['lang'] == 'en')
		{
			homeEnglish();
		}
		else if ($_GET['lang'] == 'fr')
		{
			homeFrench();
		}
		else 
		{
			throw new Exception('Cette Page n\'existe pas');
		}
	}
	else 
	{
		homeFrench();
	}
}
catch(Exception $e) {
	$errorMessage = $e->getMessage();
	require('view/errorView.php');
}