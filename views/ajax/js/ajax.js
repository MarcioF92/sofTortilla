$(document).ready(function(){

	var getCiudades = function(){
		$.post('http://localhost/Frameworks/flight/ajax/getCiudades','pais=' + $("#pais").val(), function(datos){
			$("#ciudad").html('');

			for(var i = 0; i < datos.length; i++){
				$("#cuentas_tr").append('<option value="' + datos[i].idciudad + '">' + datos[i].nombre + '</option>')
			}

		}, 'json');
	}

	$("#pais").change(function(){
		if(!$("#pais").val()){
			$("#ciudad").html('');
		} else {
			getCiudades();
		}
	});

	$("#btn_insertar").click(function(){
		$.post('http://localhost/Frameworks/flight/ajax/insertarCiudad','pais=' + $("#pais").val() + '&ciudad=' + $("#ins_ciudad").val());

		$("#ins_ciudad").val('');

		getCiudades();
	});

});