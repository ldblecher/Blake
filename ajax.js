var requestName;
var requestCity;
var requestZip;
var requestPhone;
var requestEmail;
var requestSubmit;

$(document).ready(function() {

	$(document).on("focusout", "#name", function(){
		if (typeof requestName !== 'undefined') {
			requestName.abort();
		}

		var name = $("#name").val();

		var nameInfo = {requestType: 'NameCheck', name: name};

		requestName =  $.ajax({
			url: 'ajax.php',
			method: 'GET',
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
			else{
				$("#name-msg").text("");
			}
		});
	});

	$(document).on("focusout", "#city", function(){
		if (typeof requestCity !== 'undefined') {
			requestCity.abort();
		}

		var city = $("#city").val();

		var cityInfo = {requestType: 'CityCheck', city: city};

		requestCity =  $.ajax({
			url: 'ajax.php',
			method: 'GET',
			data: cityInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestCity.success( function(data){ 
			if (data === 'CityProblem'){
				$("#city-msg").text("Please enter a valid city");
			}
			else{
				$("#city-msg").text("");
			}
		});
	});

	$(document).on("focusout", "#zip", function(){
		if (typeof requestZip !== 'undefined') {
			requestZip.abort();
		}

		var zip = $("#zip").val();

		var zipInfo = {requestType: 'ZipCheck', zip: zip};

		requestZip =  $.ajax({
			url: 'ajax.php',
			method: 'GET',
			data: zipInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestZip.success( function(data){ 
			if (data === 'ZipProblem'){
				$("#zip-msg").text("Please enter a valid 5 digit zip code");
			}
			else{
				$("#zip-msg").text("");
			}
		});
	});

	$(document).on("focusout", "#number", function(){
		if (typeof requestPhone !== 'undefined') {
			requestPhone.abort();
		}

		var phone = $("#number").val();
		console.log(phone);

		var phoneInfo = {requestType: 'PhoneCheck', phone: phone};

		requestPhone =  $.ajax({
			url: 'ajax.php',
			method: 'GET',
			data: phoneInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestPhone.success( function(data){ 
			if (data === 'PhoneProblem'){
				$("#phone-msg").text("Please enter a valid 10 digit phone number");
			}
			else{
				$("#phone-msg").text("");
			}
		});
	});

	$(document).on("focusout", "#email", function(){
		if (typeof requestEmail !== 'undefined') {
			requestEmail.abort();
		}

		var email = $("#email").val();

		var emailInfo = {requestType: 'EmailCheck', email: email};

		requestEmail =  $.ajax({
			url: 'ajax.php',
			method: 'GET',
			data: emailInfo,
			dataType: 'text',
			error: function(error) {
				console.log(error);
			}
		});

		requestEmail.success( function(data){ 
			if (data === 'EmailProblem'){
				$("#email-msg").text("Please enter a valid email address");
			}
			else{
				$("#email-msg").text("");
			}
		});
	});

	$(document).on("focusout", "#message", function(){

		var message = $("#message").val();

		requestEmail.success( function(data){ 
			if (message == ""){
				$("#message-msg").text("Please enter a message");
			}
			else{
				$("#message-msg").text("");
			}
		});
	});

	$(document).on("keyup", "#name, #address, #city, #zip, #number, #email, #message, #submit", function(){
		var name = $("#name").val();
		var address = $("#address").val();
		var city = $("#city").val();
		var zip = $("#zip").val();
		var phone = $("#number").val();
		var email = $("#email").val();
		var message = $("#message").val();

		if(name && city && zip && number && email && message){

			var contactInfo = {requestType: 'SubmitCheck', name: name, address: address, city: city, zip: zip, phone: phone, email: email, message: message};

			requestSubmit = $.ajax({
				url: 'ajax.php',
				method: 'GET',
				data: contactInfo,
				dataType: 'text',
				error: function(error) {
					console.log(error);
				}
			});

			requestSubmit.success( function(data){ 
				console.log(data);
				if (data === 'Problem'){
					$("#submit").attr("disabled", "disabled");
				}
				if (data === 'NoProblem'){
					$("#submit").removeAttr("disabled");
				}
			});
		}
		else{
			$("#submit").attr("disabled", "disabled");
		}
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
	// 			method: 'GET',
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
// }