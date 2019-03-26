function procesform() {
	
	var email = document.getElementById("email");
	var t=validate(email);
	if(t==false){
		document.write("Invalid email");
	}
}

function validate(email)
{
	var emailV = /^[a-zA-Z0-9]+@[a-zA-Z]+.com$/;
	var regex = new RegExp(emailV);
	return emailV.test(email);
}