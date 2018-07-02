<?php 
 
require('controller/frontend.php');

try {
	if (isset($_GET['page']))
	{
		if ($_GET['action'] == 'en')
		{
			homeEnglish();
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
catch(Exeption $e) {
	$errorMessage = $e->getMessage();
	require('view/errorView.php');
}