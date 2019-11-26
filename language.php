<?php 
	if (strpos($_POST['lan'],'ru') !== false){
		$id = explode('_', $_POST['lan'])[1];
		setcookie("language", "ru");
		if($id==='main'){
    		header ("Location: index.php");
    		exit();
		}
		else {
    		header ("Location: $id.php");
    		exit();
    	}

	}
	else {
		$id = explode('_', $_POST['lan'])[1];
		setcookie('language', 'en');
    	if($id==='main'){
    		header ("Location: index.php");
    		exit();
		}
		else {
    		header ("Location: $id.php");
    		exit();
    	}
	}	
?>
