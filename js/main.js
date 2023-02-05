
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


/*$(document).ready(() => {
	$('.hoverimage h6').hide(2000).
});

$(document).ready(() => {
    $('.hoverimage').animate({width:'500px'}, 2000).delay(1000).animate({height:'500px'}, 2000)
});*/
$(document).ready(function(){
	$('h1 h2 h3').css({"color":red});
 });