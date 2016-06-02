//Carga las Funciones Principales
$(document).ready(muestraTodosUsuarios(), paginationAdmin(1), muestraComentariosManager(), muestraHerramientas(), mostrarOpcionesMenu(), muestraMenuAdmin());

/* ==========================================================================
   CRUD Usuarios
   ========================================================================== */
//Muestra todos los usuarios
function muestraTodosUsuarios(){
	$.ajax({
		type: "POST",
		url: "../librerias/libUsuarios.php",
		data: {type: 1},
		success: function(response){			
			$("#muestraUsuarios").html(response);
		}
	})
};

//Muestra modal registro
$("#nuevoUsuario").click(function(){
	$("#txt_NameUsuario, #txt_NombreUsuario").val('');
	$("#actualizarUsuario, #actualizarContrasena").hide();
	$("#txt_NameUsuario, #txt_NombreUsuario, #txt_PasswordUsuario, #txt_PasswordrUsuario, #resgistrarUsuario").show();
	$("#myModal").modal('show');	
});

//Registrar Usuarios
$("#resgistrarUsuario").click(function(){
	var comprobar = $("#txt_NombreUsuario").val().length * $("#txt_NameUsuario").val().length * $("#txt_PasswordUsuario").val().length * $("#txt_PasswordrUsuario").val().length;
	if (comprobar != 0) {		
		if($("#txt_PasswordUsuario").val() == $("#txt_PasswordrUsuario").val()){
			$.ajax({
				type: "POST",
				url: "../librerias/libUsuarios.php",
				data: {type: 2, nombre: $("#txt_NombreUsuario").val(), name: $("#txt_NameUsuario").val(), pass: $("#txt_PasswordUsuario").val() },
				success: function(response){
					switch(response){
						case '1':
							$("#txt_NombreUsuario, #txt_NameUsuario, #txt_PasswordUsuario, #txt_PasswordrUsuario").val('');
							$("#myModal").modal('hide');
							$("#mensajeUsuarios").addClass("alert alert-success alert-dismissible");
							$("#mensajeUsuarios").html("Usuario Agregado de manera correcta");
							$("#mensajeUsuarios").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
							muestraTodosUsuarios();
							break;
						case '2':
							$("#mensajeUsuarios2").addClass("alert alert-info alert-dismissible");
							$("#mensajeUsuarios2").html("¡Error! al registrar usuario");
							$("#mensajeUsuarios2").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
							break;
					}
				}
			})
		}
		else{
			swal("Las contraseñas no son iguales", "Vuelve a ingresar las contraseñas", "info");
		}

	} 
	else {
		swal("Hya campos vacios", "Favor de llenar todos los campos", "info");
	}
});

//Eliminar Usuario
function eliminarUsuario(idUsuarioEliminar){
	swal({
		title: "El usuario sera elimindado",
		text: "¿Desea continuar?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Sí, Eliminarlo",
		closeOnConfirm: true
	},
	function(){
		$.ajax({
			type: "POST",
			url: "../librerias/libUsuarios.php",
			data: {type: 3, idUsuario: idUsuarioEliminar},
			success: function(response){				
				switch(response){					
					case "1":
						$("#mensajeUsuarios").addClass("alert alert-success alert-dismissible");
						$("#mensajeUsuarios").html("Usuario eliminada correctamente");
						$("#mensajeUsuarios").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						muestraTodosUsuarios();
						break;
					case "2":
						$("#mensajeUsuarios").addClass("alert alert-success alert-dismissible");
						$("#mensajeUsuarios").html("El usuario no se pudo eliminar");
						$("#mensajeUsuarios").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	});
}

//Mostrar usuario para modificar
function modificarUsuario(idUsuarioMostrar){
	$.ajax({
		type: "POST",
		url: "../librerias/libUsuarios.php",
		data: {type: 4, idUsuario: idUsuarioMostrar},
		dataType: "json",
		success: function(response){
			$("#txt_PasswordUsuario, #txt_PasswordrUsuario, #resgistrarUsuario, #actualizarContrasena").hide();
			$("#actualizarUsuario, #txt_NombreUsuario, #txt_NameUsuario").show();
			$("#txt_NombreUsuario").val(response.nombre);
			$("#txt_NameUsuario").val(response.usuario);
			$("#txt_idUsuario").val(response.id);
			$("#myModal").modal('show');
		}
	})
};

//Actualizar Datos de Usuarios
$("#actualizarUsuario").click(function(){
	var confirmar = $("#txt_NombreUsuario").val().length * $("#txt_NameUsuario").val().length;
	if (confirmar != 0) {
		$.ajax({
			type: "POST",
			url: "../librerias/libUsuarios.php",
			data: {type: 5, nombre: $("#txt_NombreUsuario").val(), user: $("#txt_NameUsuario").val(), id: $("#txt_idUsuario").val()},
			success: function(response){				
				switch(response){					
					case '1':
						$("#mensajeUsuarios").addClass("alert alert-success alert-dismissible");
						$("#mensajeUsuarios").html("Se actualizo el usuario correctamente");
						$("#mensajeUsuarios").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						$("#myModal").modal('hide');
						muestraTodosUsuarios();
						break;
					case '2':
						$("#mensajeUsuarios2").addClass("alert alert-warning alert-dismissible");
						$("#mensajeUsuarios2").html("¡Error! al actualizar usuario");
						$("#mensajeUsuarios2").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	} else {
		swal("Hay campos vacios", "Son necesarios todos los campos", "info");
	}
});

//Actualizar contraseña usuario
function cambiarContrasena(idUsuarioContrasena){
	$("#txt_PasswordUsuario, #txt_PasswordrUsuario, #actualizarContrasena").show();
	$("#txt_idUsuario").val(idUsuarioContrasena);
	$("#txt_NombreUsuario, #txt_NameUsuario, #resgistrarUsuario, #actualizarUsuario").hide();	
	$("#myModal").modal('show');
};

$("#actualizarContrasena").click(function (){
	var comparar = $("#txt_PasswordUsuario").val().length * $("#txt_PasswordrUsuario").val().length;
	if (comparar != 0) {
		if ($("#txt_PasswordUsuario").val() == $("#txt_PasswordrUsuario").val()) {
			$.ajax({
				type: "POST",
				url: "../librerias/libUsuarios.php",
				data: {type: 6, pass: $("#txt_PasswordUsuario").val(), id: $("#txt_idUsuario").val()},
				success: function(response){
					console.log(response);
					switch(response){
						case "1":
							$("#mensajeUsuarios").addClass("alert alert-success alert-dismissible");
							$("#mensajeUsuarios").html("Se actualizo la contraseña de manera correcta");
							$("#mensajeUsuarios").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
							$("#myModal").modal('hide');
							break;
							$("#mensajeUsuarios2").addClass("alert alert-warning alert-dismissible");
							$("#mensajeUsuarios2").html("¡Error! al actualizar la contraseña");
							$("#mensajeUsuarios2").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						case "2":
							break;
					}
				}
			})
		} else {
			swal("Las contraseñas no coinciden","Ingreselas de nuevo","info");
		}		
	} else {
		swal("Hay campos vacios", "Favor de llenar todos los campos", "info");
	}
});

/* ==========================================================================
   Inicio y Cierre de Sesión
   ========================================================================== */
//Log in
$("#login").click(function () {
	if (($("#user").val() != "") && ($("#pass").val() != "")) {
		$.ajax({
			data: {u: $("#user").val(), p: $("#pass").val(), type: 1},
			url: '../librerias/sesion.php',
			type: 'POST',
			success: function (response) {
				console.log(response);
				switch(response){
					case '1':
						window.location='trabajos.php';
						break;
					case '2':
						window.location='index.php';
						break;
				}
			}
		});
	} 
	else{ swal("UPS!!", "Hay campos vacios", "info");}
});
//Sing Out
function  cerrarSesion() {	
	$.ajax({
		data: {type: 2},
		url: '../librerias/sesion.php',
		type: 'POST',
		success: function (response) {
			window.location='index.php';
		}
	});
};

/* ==========================================================================
   CRUD Trabajos
   ========================================================================== */
//Botones de acciones para los trabajos
$(document).ready(function () {
	$("#title").val("");
	$("#image").val("");
	$("#description").val("");
	$("#tools").val("");
	$("#url").val("");
	$("#updatework").attr("disabled", true);
});

//Eliminar Trabajo
function eliminarTrabajo(idTrabajo) {
	var parametros = {"idt": idTrabajo, type: 4};		
	swal({   title: "¿Estas seguro?",
		text: "El registro "+idTrabajo+" se eliminara!", 
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Si, eliminarlo!",
		cancelButtonText: "¡No, cancelar!",
		closeOnConfirm: true, 		
	},
	function(){
		$.ajax({
			data: parametros,
			url: '../librerias/libTrabajos.php',
			type: 'POST',
			success: function (response) {
				//console.log(response);
				switch(response){
					case "1":
						$("#mensajeTrabajoManger").addClass("alert alert-success alert-dismissible");
						$("#mensajeTrabajoManger").html("El trabajo se elimino correctamente");
						$("#mensajeTrabajoManger").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						paginationAdmin(1);
						break;
					case "2":
						$("#mensajeTrabajoManger").addClass("alert alert-warning alert-dismissible");
						$("#mensajeTrabajoManger").html("¡Error! al eliminar el registro");
						$("#mensajeTrabajoManger").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
					case "3":
						$("#mensajeTrabajoManger").addClass("alert alert-warning alert-dismissible");
						$("#mensajeTrabajoManger").html("¡Error! al eliminar el archivo");
						$("#mensajeTrabajoManger").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		});
	});
};
	
//Registrar Trabajo
$(function(){	
	$("#subirTrabajo").submit(function(){		
		var comprobar = $("#title").val().length * $("#image").val().length * $("#description").val().length * $("#url").val().length;
		if(comprobar > 0){			
			var formulario = $("#subirTrabajo");
			var datos = formulario.serialize();
			var archivos = new FormData();
			var url = "../librerias/libAgregarTrabajo.php";
			for (var i = 0; i < (formulario.find('input[type=file]').length); i++) {
           		archivos.append((formulario.find('input[type="file"]:eq('+i+')').attr("name")),((formulario.find('input[type="file"]:eq('+i+')')[0]).files[0]));
  		 	}
  		 	$.ajax({
  		 		url: url+'?'+datos,
  		 		type: "POST",
  		 		contentType: false,
  		 		data: archivos,
  		 		processData: false,
  		 		success: function(response){  		 			
  		 			switch(response){
  		 				case "1":
  		 					$("#mensajeSubirTrabajo").addClass("alert alert-warning alert-dismissible");
  		 					$("#mensajeSubirTrabajo").html("¡Error! al subir el archivo");
  		 					$("#mensajeSubirTrabajo").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
  		 					break;
  		 				case "2":
  		 					$("#mensajeSubirTrabajo").addClass("alert alert-info alert-dismissible");
  		 					$("#mensajeSubirTrabajo").html("El archivo que intenta subir no es una imagen");
  		 					$("#mensajeSubirTrabajo").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
  		 					break;
  		 				case "3":
  		 					$("#mensajeSubirTrabajo").addClass("alert alert-danger alert-dismissible");
  		 					$("#mensajeSubirTrabajo").html("¡Error! al subir el archivo al servidor");
  		 					$("#mensajeSubirTrabajo").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
  		 					break;
  		 				case "4":
  		 					$("#mensajeSubirTrabajo").addClass("alert alert-success alert-dismissible");
  		 					$("#mensajeSubirTrabajo").html("El trabajo a sido registrado satisfactoriamente");
  		 					$("#mensajeSubirTrabajo").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
  		 					$("#subirTrabajo")[0].reset();
  		 					break;
  		 				case "5":
  		 					$("#mensajeSubirTrabajo").addClass("alert alert-warning alert-dismissible");
  		 					$("#mensajeSubirTrabajo").html("¡Error! al registrar el trabajo en la base da datos");
  		 					$("#mensajeSubirTrabajo").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
  		 					break;
  		 			}
  		 			return false;  		 			
  		 		}
  		 	});
  		 	return false;
		}
		else{
			swal("Hey!!", "Hay campos vacios", "info");
			return false;
		}
	});
});

//Cargar datos
$("button[class*=editart]").click( function () {
	var identificador = $(this).attr('id');
	var parametros = {"idt": identificador, type: 2};
	$.ajax({			
		data: parametros,
		url: '../librerias/trabajos.php',
		type: 'POST',
		dataType: "json",
		success: function (response) {
			$("#idtrabajo").val(response.id);
			$("#title").val(response.title);
			$("#image").val(response.img);
			$("#description").val(response.desc);
			$("#tools").val(response.tools);
			$("#url").val(response.url);
			$("#savework").attr("disabled", true);
			$("#updatework").attr("disabled", false);
		}
	});
});

//Actualizar trabajos
$("#updatework").click(function () {
	if (($("#title").val() != "") && ($("#image").val() != "") && ($("#description").val() != "") && ($("#tools").val() != "") && ($("#url").val() != "")) {
		$.ajax({
			data: {id: $("#idtrabajo").val(), ti: $("#title").val(), im: $("#image").val(), des: $("#description").val(), to: $("#tools").val(), ur: $("#url").val(), type: 5},
			url: '../librerias/trabajos.php',
			type: 'POST',
			success: function () {
				swal({   title: "Good Job!",
						text: "El registro a sido actualizado", 
						type: "success",							
						confirmButtonColor: "#DD6B55",
						confirmButtonText: "Ok",							
						closeOnConfirm: false,							
					},
					function(isConfirm){
						if (isConfirm) {
							window.location="trabajos.php";
						}
					});
			}
		});
	} 
	else{
		swal("Hey!!", "Hay campos vacios", "warning");
	}
});

//Paginado de Trabajos
function paginationAdmin(partidaAdmin){	
	$.ajax({
		type: "POST",
		url: "../librerias/libTrabajos.php",
		data: {partidaAdmin: partidaAdmin, type:3},
		dataType: "json",
		success: function(response){			
			$("#muestraTrabajosManager").html(response.trabajoAdmin);
			$("#paginadoManager").html(response.paginadoAdmin);
		}
	})
};

/* ==========================================================================
   Comentarios
   ========================================================================== */
//Respuesta a Comentarios
function pasarId(idComentario) {
	$("#txtid_c").val(idComentario);
};

//Agregar Respuesata a Comentario
$("#btnrespcom").click(function () {
	if ($("#txtrespcom").val() != "") {
		$.ajax({
			data: {txtrc: $("#txtrespcom").val(), id_c: $("#txtid_c").val(), type: 4},
			url: '../librerias/libComentarios.php',
			type: 'POST',
			success: function (response) {				
				switch(response){
					case "1":
						muestraComentariosManager();
						$("#myModal").modal('hide');
						$("#alertaComentariosManager").addClass("alert alert-success alert-dismissible");
						$("#alertaComentariosManager").html("Comentario Registrado correctamente");
						$("#alertaComentariosManager").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');						
						$("#txtrespcom").val("");
						break;
					case "2":
						$("#alertaComentariosManager").addClass("alert alert-success alert-dismissible");
						$("#alertaComentariosManager").html("¡Error! al registrar la respuesta al comentario");
						$("#alertaComentariosManager").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	} 
	else{
		swal("Ups!","El campo esta vacio", "info");
	};
});

//Mustra todos los comentarios
function muestraComentariosManager(){	
	$.ajax({
		type: "POST",
		url: "../librerias/libComentarios.php",
		data: {type: 3},
		success: function(response){			
			$("#muestraComentarioManager").html(response);
		}
	})
};

/* ==========================================================================
   CRUD Herramientas Web
   ========================================================================== */
//Muestra Formulario Herramientas Web
$("#muestraFormulario").click(function(){
	$(this).toggleClass('glyphicon-collapse-up');
	$("#formHerramientas").toggle('slow');
	$("#actualizarHerramienta, #cancelarActualizacion").hide();
	$("#guardarHerramienta").show();
	$("#txt_nombreHerramienta, #txt_iconoHerramienta").val('');
});

//Agregar Nueva Herramienta Web
$("#guardarHerramienta").click(function(){
	var confirmar = $("#txt_nombreHerramienta").val().length * $("#txt_iconoHerramienta").val().length;
	if(confirmar != 0){
		$.ajax({
			type: "POST",
			url: "../librerias/libHerramientasWeb.php",
			data: {type: 1, nombre: $("#txt_nombreHerramienta").val(), icono: $("#txt_iconoHerramienta").val()},
			success: function(response){
				switch(response){
					case "1":
						$("#mensajeHerramientas").addClass("alert alert-success alert-dismissible");
						$("#mensajeHerramientas").html("Herramienta guardada de manera correcta");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						$("#txt_nombreHerramienta, #txt_iconoHerramienta").val('');
						muestraHerramientas();
						break;
					case "2":
						$("#mensajeHerramientas").addClass("alert alert-warning alert-dismissible");
						$("#mensajeHerramientas").html("¡Error! al guardar el registro");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	}
	else{
		swal("Hay campos vacios", "Favor de llenar todos", "info");
	}
});

//Muestra Herramientas Web en Tabla
function muestraHerramientas(){
	$.ajax({
		type: "POST",
		url: "../librerias/libHerramientasWeb.php",
		data: {type: 2},
		success: function(response){
			$("#muestraHerramientas").html(response);
		}
	})
};

//Eliminar Herramienta
function eliminarHerramienta(idHerramienta){
	swal({
		title: "El elemento sera elimindado",
		text: "¿Desea continuar?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Sí, Eliminarlo",
		closeOnConfirm: true
	},
	function(){
		$.ajax({
			type: "POST",
			url: "../librerias/libHerramientasWeb.php",
			data: {type: 3, idHerramientaEliminar: idHerramienta},
			success: function(response){				
				switch(response){
					case "1":
						$("#mensajeHerramientas").addClass("alert alert-success alert-dismissible");
						$("#mensajeHerramientas").html("Herramienta eliminada correctamente");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						muestraHerramientas();
						break;
					case "2":
						$("#mensajeHerramientas").addClass("alert alert-success alert-dismissible");
						$("#mensajeHerramientas").html("La herramienta no se puedo eliminar");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	});
};

//Cargar Datos a Modificar en el Fomulario
function modificarHerramienta(idHerramientaM){
	$.ajax({
		type: "POST",
		url: "../librerias/libHerramientasWeb.php",
		data: {type: 4, idHerramientaM: idHerramientaM},
		dataType: "json",
		success: function(response){
			$("#muestraFormulario").toggleClass("glyphicon-collapse-up");
			$("#formHerramientas").toggle('slow');
			$("#guardarHerramienta").hide();
			$("#actualizarHerramienta, #cancelarActualizacion").show();
			$("#txt_idHerramientaWeb").val(response.idh);
			$("#txt_nombreHerramienta").val(response.nombreh);
			$("#txt_iconoHerramienta").val(response.iconoh);
		}
	})
};

//Actualiza Herramientas web
$("#actualizarHerramienta").click(function(){
	console.log("click actualizar");
	var confirmar = $("#txt_nombreHerramienta").val().length * $("#txt_iconoHerramienta").val().length;
	if(confirmar != 0){
		$.ajax({
			type: "POST",
			url: "../librerias/libHerramientasWeb.php",
			data: {type: 5, nombre: $("#txt_nombreHerramienta").val(), icono: $("#txt_iconoHerramienta").val(), id: $("#txt_idHerramientaWeb").val()},
			success: function(response){				
				switch(response){
					case "1":
						$("#mensajeHerramientas").addClass("alert alert-success alert-dismissible");
						$("#mensajeHerramientas").html("Herramienta actualizada de manera correcta");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						$("#txt_nombreHerramienta, #txt_iconoHerramienta").val('');
						muestraHerramientas();
						break;
					case "2":
						$("#mensajeHerramientas").addClass("alert alert-warning alert-dismissible");
						$("#mensajeHerramientas").html("¡Error! al actualizar el registro");
						$("#mensajeHerramientas").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						break;
				}
			}
		})
	}
	else{
		swal("Hay campos vacios", "Favor de llenar todos", "info");
	}
});

//Cancela Actualización de Herramienta Web
$("#cancelarActualizacion").click(function(){
	$("#formHerramientas").toggle('slow');
	$("#muestraFormulario").toggleClass('glyphicon-collapse-up');
});

/* ==========================================================================
   CRUD Opciones de Menú
   ========================================================================== */
//Muestrar Todas las Opciones del Menú
function mostrarOpcionesMenu(){
	$.ajax({
		type: 'POST',
		url: '../librerias/libMenus.php',
		data: {type: 4},
		success: function(response){			
			$("#muestraOpcionesMenu").html(response);
		}
	})
};

//Registrar Opción de Menú
$("#registrarOpcionMenu").click(function(){
	var comparar = $("#txtTitulo").val().length * $("#txtEnlace").val().length * $("#txtPrivilegio").val();
	if (comparar != 0) {
		$.ajax({
			type: 'POST',
			url: '../librerias/libMenus.php',
			data: {type: 5, titulo: $("#txtTitulo").val(), enlace: $("#txtEnlace").val(), privilegio: $("#txtPrevilegio").val(),},
			success: function(response){
				console.log(response);
				switch(response){
					case "1":
						$("#formMenu")[0].reset();
						$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("Opcion insertada correctamente");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						mostrarOpcionesMenu();
						break;
						$("#mensajeOpciones").addClass("alert alert-info alert-dismissible");
						$("#mensajeOpciones").html("¡Error! al registrar la opcion");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');						
					case "2":
						break;
				}
			}
		})
	} else {
		swal("Hay campos vacios", "Favor de llenar todos", "info");
	}
});

//Eliminar Opción Menú
function eliminarOpcionMenu(idMenuEliminar){
	swal({
		title: "El elemento sera elimindado",
		text: "¿Desea continuar?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Sí, Eliminarlo",
		closeOnConfirm: true
	},
	function(){
		$.ajax({
			type: "POST",
			url: "../librerias/libMenus.php",
			data: {type: 6, idMenuEliminar: idMenuEliminar},
			success: function(response){
				console.log(response);
				switch(response){
					case "1":
						$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("Opción eliminada correctamente");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						mostrarOpcionesMenu();
						break;
					case "2":
						$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("¡Error! al eliminar la opción");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');						
						break;
				}
			}
		})
	});
};

//Activar o Desactivar una Opción del Menú
function activarOpcionMenu(idOpcionMenu){	
	$.ajax({
		type: "POST",
		url: "../librerias/libMenus.php",
		data: {type: 7, idOpcionMenu: idOpcionMenu},
		success: function(response){			
			switch(response){
				case "1":
					$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("Opción desactivada correctamente");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						mostrarOpcionesMenu();
					break;
				case "2":
					$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("Opción activada correctamente");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						mostrarOpcionesMenu();
					break;
				case "3":
					$("#mensajeOpciones").addClass("alert alert-info alert-dismissible");
					$("#mensajeOpciones").html("¡Error! al actualizar el estado de la opción");
					$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
					break;
			}
		}
	})
};

//Mostar Datos de la Opción del Menú
function mostrarDatosOpcion (idOpcionDatos){
	$.ajax({
		type: "POST",
		url: "../librerias/libMenus.php",
		data: {type: 8, idOpcionDatos: idOpcionDatos},
		dataType: "json",
		success: function(response){
			$("#muestraFormularioMenu").toggleClass('glyphicon-collapse-up');			
			$("#registrarOpcionMenu").hide();
			$("#cancelarOpcionMenu, #actualizarOpcionMenu").show();
			$("#txtTitulo").val(response.titulo);
			$("#txtEnlace").val(response.enlace);
			$("#txtPrevilegio").val(response.privilegio);
			$("#txtIdOpciones").val(idOpcionDatos);
			$("#formMenu").toggle('slow');
		}
	})
};

//Actualizar Datos de Opción de Menú
$("#actualizarOpcionMenu").click(function () {
	var comprobar = $("#txtTitulo").val().length * $("#txtEnlace").val().length * $("#txtPrevilegio").val();
	if (comprobar != 0) {
		$.ajax({
			type: "POST",
			url: "../librerias/libMenus.php",
			data: {type: 9, titulo: $("#txtTitulo").val(), enlace: $("#txtEnlace").val(), privilegio: $("#txtPrevilegio").val(), id: $("#txtIdOpciones").val()},
			success: function(response){
				switch(response){
					case "1":
						$("#formMenu")[0].reset();
						$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("Opción actualizada correctamente");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
						mostrarOpcionesMenu();
						break;
					case "2":
						$("#mensajeOpciones").addClass("alert alert-success alert-dismissible");
						$("#mensajeOpciones").html("¡Error! al actualizar la opción");
						$("#mensajeOpciones").append('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');						
						break;
				}
			}
		})
	} else {
		swal("Hay campos vacios", "Son necesarios todos los campos", "info");
	}
});

//Muestra Formulario Opciones Menú
$("#muestraFormularioMenu").click(function () {
	$(this).toggleClass('glyphicon-collapse-up');
	$("#actualizarOpcionMenu, #cancelarOpcionMenu").hide();
	$("#registrarOpcionMenu").show();
	$("#formMenu").toggle('slow');
});

//Cancelar Actualizacion Opción Menú
$("#cancelarOpcionMenu").click(function(){
	$("#formMenu")[0].reset();
	$("#muestraFormularioMenu").toggleClass('glyphicon-collapse-up');
	$("#formMenu").toggle('slow');
});

//Muestra Menú
function muestraMenuAdmin(){
	$.ajax({
		type: "POST",
		url: "../librerias/libMenus.php",
		data: {type:10},
		success: function(response){			
			$("#menuAdmin").html(response);
		}
	})
};