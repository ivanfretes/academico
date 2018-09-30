
/**
	Envia un formulario, mediante AJAX
*/
function sendForm(formIdentifier, urlAction = null, msg = 'Se guardara un registro'){
	let form = $(formIdentifier);
	let formData = formDataToJSON(form);
	
	if (null == urlAction)
		urlAction = form.attr('action');

	//console.log('Enviar');
	console.log(formData);
	if (confirm(msg)){
		$.ajax({
			type: "POST",
			url: urlAction,
			data: formData, // serializes the form's elements.
			headers : {
				"content-type": "application/json",
    			"accept": "application/json",
			},
			success: function(data){
				console.log(data); // show response from the php script.
			},
			error : function(response, textStatus, errorThrown){
				console.log(response);	
			}
		});	
	}
}


/**
	Serializa y convierte los datos de un formulario a un JSON
	@return JSON;
*/
function formDataToJSON(form) {
	let obj = {};
	let formData = form.serialize();
	let formArray = formData.split("&");
	
	for	(inputData of formArray){
		let dataTmp = inputData.split('=');
		obj[dataTmp[0]] = dataTmp[1];
	}
	return JSON.stringify(obj);
}

