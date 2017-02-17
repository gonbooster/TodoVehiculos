var expr = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;

$(document).ready(function() {
	
	/* REGISTER FUNCTIONS */
	
	function validar_nombre(){
		var nombre = $("#r_Nombre").val(); // asigna a la variable nombre el valor que tiene la id nombre
		if(nombre.length<3){
			return false; // evita que se manden los datos
		}else{
			return true;
		}
	}
	
	function validar_Usuario(){
		var alias = $("#r_Usuario").val();
		if(alias.length<3){
			return false; 
		}else{
			return true;
		}
	}
	function validar_apellidos(){
		var apellido1 = $("#r_Apellido1").val();
		var apellido2 = $("#r_Apellido2").val();
		if((apellido1.length<3) &&(apellido2.length<3) ){
			return false; 
		}else{
			return true;
		}
	}
	
		
	function validar_email(){
		var correo = $("#r_Correo").val();
		var repetirCorreo = $("#r_RepetirCorreo").val();
		if(!expr.test(correo) || correo != repetirCorreo){
			$("#mensaje1").fadeIn();
				if(correo != repetirCorreo){
					$("#mensaje2").fadeIn();
				}else
				$("#mensaje2").fadeOut();
				
			return false;
		}else if(expr.test(correo) && correo == repetirCorreo){
			$("#mensaje1").fadeOut();
			$("#mensaje2").fadeOut();			
			return true;
		}				
	}
	
		$('#r_Correo').change(function(){
		validar_email();
	})
		$('#r_RepetirCorreo').change(function(){
		validar_email();
	})
	
		function validar_password(){
		var password = $("#r_Password").val();
		var repetirPassword = $("#r_RepetirPassword").val();
		if(password.length<3 || password != repetirPassword){
			$("#mensaje3").fadeIn();
				if(password != repetirPassword){
					$("#mensaje4").fadeIn();
				}else
				$("#mensaje4").fadeOut();
				
			return false;
		}else if(password == repetirPassword){
			$("#mensaje3").fadeOut();
			$("#mensaje4").fadeOut();			
			return true;
		}				
	}
	
	$('#r_Password').change(function(){
		validar_password();
	})
		$('#r_RepetirPassword').change(function(){
		validar_password();
	})
	
	
	$('#registroEnviar').click(function(){
		no_error = validar_nombre() & validar_Usuario() & validar_apellidos() & validar_email() & validar_password();
		if (no_error) {
			$('#registroForm').submit();
		} else {
			$('#ok').fadeIn();
		}	
	});
	
	function validar_comentario(){
		var comentario = $("#c_comentario").val();
		if(comentario.length<1){
			$("#mensaje6").fadeIn();
			return false; 
		}else{
			$("#mensaje6").fadeOut();
			return true;
		}
	}
	
		$('#enviarComentario').click(function(){
		no_error = validar_comentario();
		if (no_error) {
			var comentid = $("input#id").val();
            $.ajax({
		        url: 'modulos/procesarComentarios.php',
		        type: 'post',
		        dataType: 'json',
		        data: $('#comentariosForm').serialize(),
		        success: function() {
		        	$('#c_ImprimirComentarios').load("mostrarComentarios.php?id="+ comentid);
		    		return false;
		        }
	        });
		}
	});
	
	
	
	function validar_correoLogin(){
		var correo = $("#l_correo").val();
		if(!expr.test(correo)){
			return false;
		}else if(expr.test(correo)){		
			return true;
		}				
	}
	
	function validar_passwordLogin(){
		var password = $("#l_password").val();
		if(password.length<3 ){
			return false;
		}else {		
			return true;
		}				
	}
	
	$('#btnLogin').click(function(){
		no_error = validar_passwordLogin();
		if (no_error) {
			$('#loginFormm').submit();
		} else {
			$('#errorLogin').fadeIn();
		}	
		});


function ContarTexto(actual, cajita, max) 
{
	if (actual.value.length > max)
		actual.value = actual.value.substring(0, max);
	else
		cajita.value = max - actual.value.length;
}


function iniciarConsulta(datos)
{
	divConsulta = document.getElementById('consulta');
	ajax = objetoAjax();
	ajax.open("GET", datos);
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState == 4)
		{
		divConsulta.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

});
