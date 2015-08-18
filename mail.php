<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING);
		$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING);
		$zip = filter_input(INPUT_POST, "zip", FILTER_SANITIZE_STRING);
		$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
		$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

		if (empty($address) || $address == ''){
			$address = 'Not provided';
		}

		$to = "lblecher@churchillschool.com";

		$subject = "Website Contact from ".$name;

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$message = '
		<html>
		<head>
			<title>Website Contact from'.$name.'</title>
		</head>
		<body>
			<p>Name: <strong>'.$name.'</strong></p>
			<p>Address: <strong>'.$address.'</strong></p>
			<p>City: <strong>'.$city.'</strong></p>
			<p>Zip Code: <strong>'.$zip.'</strong></p>
			<p>Phone Number: <strong>'.$phone.'</strong></p>
			<p>Email Address: <strong>'.$email.'</strong></p>
			<p>Message: <strong>'.$message.'</strong></p>
		</body>
		</html>
		';

		if(mail($to, $subject, $message, $headers)){
			echo 'Sent';
		}
		else{
			echo 'NotSent';
		}
	}

?>