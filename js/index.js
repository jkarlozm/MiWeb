$(menuUno(), muestraSeisTrabajos(), menuInferior(), menuDos(), pagination(1), mostrarComentarios($("#idtrabajo").val()));

$(function  () {
	/*Descarga currículum*/
	$("#downcurriculum").click(function () {
		document.location = "Currículum.zip";
	});

	/*Animacion flecha abajo*/
	$("#flecha").on('click', function(e){
		e.preventDefault();
		$("html, body").animate({
			scrollTop: $("#index2").offset().top
		}, 1000);
	});

	//animacion boton volver arriba
	$(document).ready(function () {
		$("#irarriba").hide();
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 200) {
					$("#irarriba").fadeIn();
				} else{
					$("#irarriba").fadeOut();
				}
			});
			$("#irarriba").click(function (){
				$('body, html').animate({
					scrollTop: 0
				}, 1000);
				return false;
			});
		});
	});

	/*Insertar Comentarios*/
	$("#instcomen").click(function () {
		if ($("#nombre").val() != "") {
			if ($("#correo").val() != "") {
				if ($("#comentario").val() != "") {
					$.ajax({						
						url: 'librerias/libComentarios.php',
						type: 'POST',
						data: {n: $("#nombre").val(), c: $("#correo").val(), com: $("#comentario").val(), idt: $("#idtrabajo").val(), type: 1},
						success: function  (response) {							
							if(response == 1){
								swal("Good Job", "Tu Comentario se a publicado exitosamente", "success");
								$("#nombre").val("");
								$("#correo").val("");
								$("#comentario").val("");
								mostrarComentarios($("#idtrabajo").val());
							}
							if (response == 2) {
								swal("Error!!", "Tu Comentario no se a podido publicar", "error");
							}
						}
					});
				}
				else { swal("Ingresa tú Comentario", "", "info");}
			}			
			else {swal("Ingresa tú correo", "", "info");}
		}
		else { swal("Ingresa tú nombre", "", "info");}
	});	

	/*Formulario de Contacto*/
	$("#enviarCorreo").click(function () {
		if ($("#nombre").val() != "") {
			if ($("#correo").val() != "") {
				if ($("#telefono").val() != "") {
					if ($("#mensajecorreo").val() != "") {
						$.ajax({
							url: 'librerias/correo.php',
							type: 'POST',
							data: {name: $("#nombre").val(), mail: $("#correo").val(), phone: $("#telefono").val(), msj: $("#mensajecorreo").val()},
							success: function (response) {								
								if (response == 1) {
									$("#alertaCorreo").addClass("alert alert-info alert-dismissible");
									$("#alertaCorreo").html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Tu mensaje fue enviado correctamente');
									$("#nombre").val("");
									$("#correo").val("");
									$("#telefono").val("");
									$("#mensajecorreo").val("");
								}
								if(response == 2){
									$("#alertaCorreo").addClass("alert alert-warning alert-dismissible");
									$("#alertaCorreo").html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Fallo el envio de tu mensaje');
								}								
							}
						});
					}
					else{swal("No has escrito tu mensaje", "", "info");}
				}
				else{
					swal("Ingresa un número de telefono", "", "info");
				}
			}
			else{
				swal("Ingresa un Correo", "", "info");
			}
		}
		else{ swal("Ingresa un nombre", "", "info");}
	});
});

//Menú index
function menuUno(){
	$.ajax({
		type: "POST",
		url: "librerias/libMenus.php",
		data: {type: 1},
		success: function(response){			
			$("#menu1").html(response);
		}
	})
};

//Menú Inferior
function menuInferior(){
	$.ajax({
		type: "POST",
		url: "librerias/libMenus.php",
		data: {type: 2},
		success: function(response){
			$("#menuInferior").html(response);
		}
	})
};

//Menú Dos
function menuDos(){
	$.ajax({
		type: "POST",
		url: "librerias/libMenus.php",
		data: {type: 3},
		success: function(response){
			$("#menuDos").html(response);
		}
	})
}

//Paginado
function pagination(partida){	
	$.ajax({
		type: "POST",
		url: "librerias/libTrabajos.php",
		data: {partida: partida, type:2},
		dataType: "json",
		success: function(response){
			//console.log(response);
			$("#muestraTrabajosPortafolio").html(response.trabajo);
			$("#paginado").html(response.paginado);
		}
	})
};

//Muetras seis trabajos en el index
function muestraSeisTrabajos(){
	$.ajax({
		type: "POST",
		url: "librerias/libTrabajos.php",
		data: {type: 1},
		success: function(response){
			$("#muestraSeisTrabajos").html(response);
		}
	})
};

/*Mostrar Comentarios*/
function mostrarComentarios (idcomentario) {
	var id = idcomentario;	
	var parametros = {"idt": id, type: 2 };
	$.ajax({
		data: parametros,
		url: 'librerias/libComentarios.php',
		type: 'POST',
		success: function (response) {			
			$("#grupo-comentarios").html(response);
		}
	});
};

function mustraRespComentario(){	
	$("#respuestaComentario").toggle('slow');
};