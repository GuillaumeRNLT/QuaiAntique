
/*(function () {
	'use strict'

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
		.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
					event.preventDefault()
					event.stopPropagation()
				}

				form.classList.add('was-validated')
			}, false)
		})
})()*/




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
