<?php
	$request_type = filter_input(INPUT_GET, "requestType", FILTER_SANITIZE_STRING);
	if ( empty( $request_type ) ) {
		echo 'Missing requestType.';
		die();
	}

	switch ( $request_type ) {
		case "NameCheck":
			$name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
			if ( empty($name) || ! (preg_match("/^[A-z\s]+$/", $name))){
				echo 'NameProblem';
			}
			else{
				echo 'Good';
			}
			die();
			break;


		case "CityCheck":
			$city = filter_input(INPUT_GET, "city", FILTER_SANITIZE_STRING);
			if ( empty($city) || ! (preg_match("/^[A-z\s]+$/", $city))){
				echo 'CityProblem';
			}
			else{
				echo 'Good';
			}
			die();
			break;

		case "ZipCheck":
			$zip = filter_input(INPUT_GET, "zip", FILTER_SANITIZE_STRING);
			if ( empty($zip) || ! (preg_match("/^[0-9]{5}$/", $zip))){
				echo 'ZipProblem';
			}
			else{
				echo 'Good';
			}
			die();
			break;

		case "PhoneCheck":
			$phone = filter_input(INPUT_GET, "phone", FILTER_SANITIZE_STRING);
			if ( empty($phone) || ! (preg_match("/^[0-9]{10}$/", $phone))){
				echo 'PhoneProblem';
			}
			else{
				echo 'Good';
			}
			die();
			break;

		case "EmailCheck":
			$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
			if ( empty($email) || ! filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'EmailProblem';
			}
			else{
				echo 'Good';
			}
			die();
			break;	

		case "SubmitCheck":
			$name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
			$address = filter_input(INPUT_GET, "address", FILTER_SANITIZE_STRING);
			$city = filter_input(INPUT_GET, "city", FILTER_SANITIZE_STRING);
			$zip = filter_input(INPUT_GET, "zip", FILTER_SANITIZE_STRING);
			$phone = filter_input(INPUT_GET, "phone", FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
			$message = filter_input(INPUT_GET, "message", FILTER_SANITIZE_STRING);

			if ( empty($name) || ! (preg_match("/^[A-z\s]+$/", $name))){
				echo 'Problem';
			}

			else if ( empty($city) || ! (preg_match("/^[A-z\s]+$/", $city))){
				echo 'Problem';
			}

			else if ( empty($zip) || ! (preg_match("/^[0-9]{5}$/", $zip))){
				echo 'Problem';
			}

			else if ( empty($phone) || ! (preg_match("/^[0-9]{10}$/", $phone))){
				echo 'Problem';
			}

			else if (empty($email) || ! filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Problem';
			}

			else if (empty($message) || strlen($message) > 250){
				echo 'Problem';
			}

			else{
				echo 'NoProblem';
			}
			die();
			break;
	}



?>