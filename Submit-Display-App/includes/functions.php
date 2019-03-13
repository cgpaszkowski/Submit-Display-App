<?php

	function validateFormData($dataString){
		$returnValue = trim($dataString);
		$returnValue = stripcslashes($returnValue);
		$returnValue = htmlspecialchars($returnValue);

		return $returnValue;
	}

	function getWebsiteName(){
		$webstieName = basename($_SERVER['PHP_SELF']);
		$webstieName = preg_replace('/\.[^.]+$/', '', $webstieName);
		if ($webstieName != "index"){
			return $webstieName;
		}	
		else {
			$webstieName = "MindFeed";
			return $webstieName; 
		}
		
	}

?>