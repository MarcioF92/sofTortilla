$(document).on('ready', function(){
	$('#lista_registros').delegate( '.pagina', 'click', function(){
        paginacion($(this).attr("pagina"));
	});

	var paginacion = function(pagina){
		var pagina = 'pagina=' + pagina;
		var nombre = '&nombre=' + $("#nombre").val();
		var pais = '&pais=' + $("#pais").val();
		var ciudad = '&ciudad=' + $("#ciudad").val();
		var registros = '&registros=' + $("#registros").val();

		$.post(_root_ + 'post/pruebaAjax', pagina + nombre + pais + ciudad + registros, function(data){
			$("#lista_registros").html('');
			$("#lista_registros").html(data);
		});
	}

	$("#pais").change(function(){
		var pagina = 'pagina=' + pagina;

		if($("#pais").val() == "x"){
			$("#ciudad").html('');
			$("#ciudad").append('<option value=""> - seleccione ciudad - </option>');
		};

		$.post(_root_ + 'ajax/getCiudades', 'pais=' + $("#pais").val(), function(datos){
			$("#ciudad").html('');
			$("#ciudad").append('<option value=""> - seleccione ciudad - </option>');

			for(var i = 0; i < datos.length; i++){
				$("#ciudad").append('<option value="' + datos[i].idciudad + '">' + datos[i].nombre + '</option>')
			}

		}, 'json');

		paginacion();
	});

	$("#btnEnviar").click(function(){
		paginacion();
	});

	$("#ciudad").change(function(){
		if($("#pais").val()){
			paginacion();
		};
	});

	$('#lista_registros').delegate( '#registros', 'change', function(){
        paginacion();
	});
});