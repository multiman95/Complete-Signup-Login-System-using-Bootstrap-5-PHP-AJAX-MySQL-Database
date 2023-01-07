$(document).ready(function(){

	$('#loginForm').on('submit', function(e){

		//prevent page from reloading whenever we click on the
		//submit button
		e.preventDefault();

		// assign variables to the input tags
		let firstname = document.getElementById('firstname').value;
		let lastname = document.getElementById('lastname').value;
		let userEmail = document.getElementById('userEmail').value;
		let phone_number = document.getElementById('phone_number').value;
		let userPass = document.getElementById('userPass').value;
		let confirm_pass = document.getElementById('confirm_pass').value;

		// console.log(firstname, lastname, userEmail, phone_number, userPass, confirm_pass)

		//validating the inputs tags.
		// if(firstname == '' || lastname == '' || userEmail == '' || phone_number == '' || userPass == '' || confirm_pass == ''){
		// 	alert('All fields are Required');
		// 	return false;
		// }

		if (firstname == '') {
			alert('firstname is required');
			return false;
		}

		if (lastname == '') {
			alert('lastname is required');
			return false;
		}

		if (userEmail == '') {
			alert('User Email is required');
			return false;
		}

		if (phone_number == '') {
			alert('Phone Number is required');
			return false;
		}

		if (userPass == '') {
			alert('Password required');
			return false;
		}

		if (confirm_pass == '') {
			alert('Confirm Password required');
			return false;
		}

		if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(userEmail)) {}
		else{
			alert('Invalid Email')
		}

		if (phone_number.length < 10) {
			alert('Phone number must be 10 Digit Long');
			return false;
		}

		if (userPass.length < 8) {
			alert('Password must be 8 characters long');
			return false;
		}

		if (userPass != confirm_pass) {
			alert('Password does not match');
			return false;
		}
		
		//ajax call
		$.ajax({
			type: 'POST',
			url : 'function_php/signup.php',
			data: {
					firstname : firstname,
					lastname : lastname,
					userEmail : userEmail,
					phone_number : phone_number,
					userPass : userPass,
					confirm_pass : confirm_pass,
			},
			beforeSend: function(){

			},
			success:function(data){

			}
		});
		  

	});

});