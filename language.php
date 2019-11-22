<?php 
	if (strpos($_POST['lan'],'ru') !== false){
		$id = explode('_', $_POST['lan'])[1];
		setcookie("language", "ru");
    	header ('Location: index.php');
    	exit();

	}
	else {
		$id = explode('_', $_POST['lan'])[1];
		setcookie('language', 'en');
    	header ('Location: index.php');
    	exit();
	}	
?>
