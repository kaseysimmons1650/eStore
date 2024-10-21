
function feedbackFormValidate(){

	var form = document.getElementById("contact");
	var firstName = form.first.value;
	var lastName = form.last.value;
	var phone = form.phone.value;
	var email =  form.email.value;
	var everythingOK = true;

	if(!validateName(firstName)){
		everythingOK = false;
		alert("Error: Invalid first name.");
	}

	else if(!validateName(lastName)){
		everythingOK = false;
		alert("Error: Invalid last name.");
	}

	else if(!validatePhone(phone)){
		everythingOK = false;
		alert("Error: Invalid phone number.");
	}

	else if(!validateEmail(email)){
		everythingOK = false;
		alert("Error: Invalid email address.");
	}

	else if(everythingOK){
		alert("All the information looks good.");
	}
	else{
		return false;
	}
}

function validateName(name){
	var p = name.search(/^[-'\w\s]+$/);
	if(p == 0){
		return true;
	}
	else{
		return false;
	}
}

function validatePhone(phone){
	var phone1 = phone.search(/^d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
	if(phone1 == 0){
		return true;
	}

	else{
		return false;
	}
}

function validateEmail(address){
	var ea = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
	if(ea == 0){
		return true;
	}
	else{
		return false;
	}
}