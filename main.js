const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("email");

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.username;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.checkbox = "";
  }
}
  






$(document).ready(function(){
	$(".needs-validation").validate({
		rules:{
			name:"required",
			surname:"required",
			email:"required",
			password:{
				required: true,
				minlength: 8
			},
		},messages:{
				name: "Veuillez saisir votre nom",
				surname: "Veuillez saisir votre Prenom",
				email: "Veuillez saisir une adresse email valide",
				password:{
					required:"Veuillez saisir un mot de passe",
					minlength: "Le mot de passe doit avoir au moins 8 caractères"
		},
		
		}
	}
	);
  });


