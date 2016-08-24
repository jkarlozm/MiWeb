$(menuUno(), muestraSeisTrabajos(), menuInferior(), menuDos(), pagination(1), mostrarComentarios($("#idtrabajo").val()));

$(function() {
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

	// Ir a la sección de comentarios
	$(document).ready(function () {
		$("#irComentario").click(function (){
			$('body, html').animate({
				scrollTop: $("#hacerComentario").offset().top - document.body.clientHeight + $("#hacerComentario").height()
			}, 1000);
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
});

/*Formulario de Contacto*/
	$(document).ready( function(){
		//Validación de campos
		$("#nombre").keyup(validarNombre);
		$("#correo").keyup(validarCorreo);
		$("#mensajecorreo").keyup(validarMensaje);

		//Funciones de validación
		function validarNombre() {
			//Validar campos formulario contacto
			if ( $("#nombre").val() == null || $("#nombre").val().length == 0 || /^\s+$/.test( $("#nombre").val() ) ) {
				$("#iconInput").remove();
				$("#nombre").parent().removeClass("has-success").addClass("has-warning has-feedback");
				$("#nombre").parent().append("<span id='iconInput' class='glyphicon glyphicon-remove-circle form-control-feedback'></span>");
				return false;
			}
			else{
				$("#iconInput").remove();
				$("#nombre").parent().removeClass("has-warning").addClass("has-success has-feedback");
				$("#nombre").parent().append("<span id='iconInput' class='glyphicon glyphicon-ok-circle form-control-feedback'></span>");
				return true;
			}
		};
		function validarCorreo() {
			//Validar campos formulario contacto
			if ( !/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( $("#correo").val() ) || $("#correo").val() == null || $("#correo").val().length == 0 || /^\s+$/.test( $("#correo").val() ) ) {
				$("#iconInput1").remove();
				$("#correo").parent().removeClass("has-success").addClass("has-warning has-feedback");
				$("#correo").parent().append("<span id='iconInput1' class='glyphicon glyphicon-remove-circle form-control-feedback'></span>");		
				return false;
			}
			else{
				$("#iconInput1").remove();
				$("#correo").parent().removeClass("has-warning").addClass("has-success has-feedback");
				$("#correo").parent().append("<span id='iconInput1' class='glyphicon glyphicon-ok-circle form-control-feedback'></span>");
				return true;
			}
		};
		function validarMensaje() {
			//Validar campos formulario contacto
			if ( $("#mensajecorreo").val() == null || $("#mensajecorreo").val().length == 0 || /^\s+$/.test( $("#mensajecorreo").val() ) ) {
				$("#iconInput3").remove();
				$("#mensajecorreo").parent().removeClass("has-success").addClass("has-warning has-feedback");
				$("#mensajecorreo").parent().append("<span id='iconInput3' class='glyphicon glyphicon-remove-circle form-control-feedback'></span>");		
				return false;
			}
			else{
				$("#iconInput3").remove();
				$("#mensajecorreo").parent().removeClass("has-warning").addClass("has-success has-feedback");
				$("#mensajecorreo").parent().append("<span id='iconInput3' class='glyphicon glyphicon-ok-circle form-control-feedback'></span>");
				return true;
			}
		};

		//Botón para enviar mensaje
		$("#enviarCorreo").click(function () {
			if( validarNombre() && validarCorreo() && validarMensaje() && $("#codigoCaptcha").val().length > 0 ) {
				$.ajax({
					type: "POST",
					url: "librerias/correo.php",
					data: {name: $("#nombre").val(), email: $("#correo").val(), telphone: $("#telefono").val(), siteWeb: $("#siteweb").val(), msj: $("#mensajecorreo").val(), codCapt: $("#codigoCaptcha").val()},
					success: function(response){
						switch(response){
							case "1":
								$("#mensajeAlerta").append('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p class="text-center">"Mensaje Enviado"</p></div>');
								$("#formContacto")[0].reset();
								$("#iconInput, #iconInput1, #iconInput2, #iconInput3").remove();
								$("#nombre, #correo, #siteWeb, #mensajecorreo").parent().removeClass("has-success");
								break;
							case "2":
								$("#mensajeAlerta").append('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p class="text-center">"El Mensaje no se a podido enviar"</p></div>');
								break;
							case "3":
								$("#mensajeAlerta").append('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p class="text-center">"El código catpcha es incorrecto"</p></div>');
								$("#codigoCaptcha").val('');
								break;
						}
					}
				})
			}
			else{
				validarNombre();
				validarCorreo();
				validarMensaje();
				$("#mensajeAlerta").append('<div class="alert alert-dismissible alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <p class="text-center">"Hay campos vacios"</p></div>');
			}
		})

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