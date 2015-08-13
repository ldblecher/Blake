var requestName;
var requestCity;
var requestZip;
var requestPhone;
var requestEmail;

$(document).ready(function() {

	$(document).on("keyup", "#name", function(){
		if (typeof requestName !== 'undefined') {
			requestName.abort();
		}

		var name = $("#name").val();

		var nameInfo = {requestType: 'NameCheck'. name: name};

		requestName =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: nameInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestName.success( function(data){ 
			if (data === 'NameProblem'){
				$("#name-msg").text("Please enter a valid name");
			}
		});
	});

	$(document).on("keyup", "#city", function(){
		if (typeof requestCity !== 'undefined') {
			requestCity.abort();
		}

		var city = $("#city").val();

		var cityInfo = {requestType: 'CityCheck'. city: city};

		requestCity =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: CityInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestCity.success( function(data){ 
			if (data === 'CityProblem'){
				$("#city-msg").text("Please enter a valid city");
			}
		});
	});

	$(document).on("keyup", "#zip", function(){
		if (typeof requestZip !== 'undefined') {
			requestZip.abort();
		}

		var zip = $("#zip").val();

		var zipInfo = {requestType: 'ZipCheck'. zip: zip};

		requestZip =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: ZipInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestZip.success( function(data){ 
			if (data === 'ZipProblem'){
				$("#zip-msg").text("Please enter a valid 5 digit zip code");
			}
		});
	});

	$(document).on("keyup", "#number", function(){
		if (typeof requestPhone !== 'undefined') {
			requestPhone.abort();
		}

		var phone = $("#number").val();

		var phoneInfo = {requestType: 'PhoneCheck'. phone: phone};

		requestPhone =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: PhoneInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestPhone.success( function(data){ 
			if (data === 'PhoneProblem'){
				$("#phone-msg").text("Please enter a valid 10 digit phone number");
			}
		});
	});

	$(document).on("keyup", "#email", function(){
		if (typeof requestEmail !== 'undefined') {
			requestEmail.abort();
		}

		var email = $("#email").val();

		var emailInfo = {requestType: 'EmailCheck'. email: email};

		requestEmail =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: EmailInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestEmail.success( function(data){ 
			if (data === 'EmailProblem'){
				$("#email-msg").text("Please enter a valid email address");
			}
		});
	});

	$(document).on("keyup", "#email", function(){
		if (typeof requestEmail !== 'undefined') {
			requestEmail.abort();
		}

		var email = $("#email").val();

		var emailInfo = {requestType: 'EmailCheck'. email: email};

		requestEmail =  $.ajax({
			url: 'ajax.php',
			method: 'POST',
			data: EmailInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestEmail.success( function(data){ 
			if (data === 'EmailProblem'){
				$("#email-msg").text("Please enter a valid email address");
			}
		});
	});





});

	// $(document).on("keyup", "#name, #address, #city. #zip. #number, #email, #message, #submit", function() {

	// 	$("#submit").attr("disabled, disabled");
		
	// 	//Cancel any existing ajax requests
	// 	if (typeof request !== 'undefined') {
	// 		request.abort();
	// 	}

	// 	var name = $("#name").val();
	// 	var address = $("#address").val();
	// 	var city = $("#city").val();
	// 	var zip = $("#zip").val();
	// 	var phone = $("#number").val();
	// 	var email = $("#email").val();
	// 	var message = $("#message").val();

	// 	if(name && city && zip && number && email && message){

	// 		var contactInfo = {name: name, address: address, city: city, zip: zip, number: number, email: email, message: message};

	// 		request = $.ajax({
	// 			url: 'ajax.php',
	// 			method: 'POST',
	// 			data: contactInfo,
	// 			dataType: 'text',
	// 			error: function(error) {
	// 				console.log(error);
	// 			}
	// 		});

	// 		request.success( function(data) {
	// 			if (data === 'Problem'){

	// 			}
	// 			if (date === 'NoProblem'){

	// 			}
	// 		});

	// 	}

	// }
}