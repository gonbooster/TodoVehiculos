                <div id="register-box" class="login-popup">
        <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
<form class="signin" id="registroForm" action="modulos/procesarRegistro.php" method="POST">
<fieldset class="textbox">
	<h2>Registro</h2><div id="ok" class="error">*Campos incorrectos</div>
<table width="200" border="0">
  <tr>
    <td><label><span>Usuario:</span><input type="text" name="r_Usuario" id="r_Usuario"/></label></td>
    <td><label><span>Nombre:</span><input type="text"  name="<?php echo'r_Nombre';?>" id="r_Nombre"/></label></td>
  </tr>
  <tr>
    <td><label><span>Apellido1:</span><input type="text" name="r_Apellido1" id="r_Apellido1"/></label></td>
    <td><label><span>Apellido2:</span><input type="text" name="r_Apellido2" id="r_Apellido2"/></label></td>
  </tr>
  <tr>
    <td><label><span>Correo:</span><input type="text" name="r_Correo" id="r_Correo"/></td>
    <td><div id="mensaje1" class="error">*Introduce tu email</div>             </label></td>
  </tr>
  <tr>
    <td><label><span>Repetir correo:</span><input type="text" name="r_RepetirCorreo" id="r_RepetirCorreo"/></td>
    <td><div id="mensaje2" class="error">*Los emails no coinciden</div></label></td>
  </tr>
  <tr>
    <td><label><span>Contraseña:</span><input type="password" name="r_Password" id="r_Password"/></td>
    <td><div id="mensaje3" class="error">*Introduce tu contraseñas</div></label></td>
  </tr>
  <tr>
    <td><label><span>Repetir contraseña:</span><input type="password" name="r_RepetirPassword" id="r_RepetirPassword"/></td>
    <td><div id="mensaje4" class="error">*Las contraseñas no coinciden</div></label></td>
  </tr>
    <tr>
      <td colspan="3"><label><span>Codigo de seguridad:</span><img src="modulos/captcha.php" width="100" height="30" vspace="3"></br>
		  <input name="tmptxt" type="text" size="30"></br><div id="mensaje5" class="error">*Las contraseñas no coinciden</div></label></td>
    </tr>
    <tr>
    <td colspan="3"><button id="registroEnviar" type="button">Registrarse</button> </td>
  </tr>
</table>
</fieldset>
</form>
</div>