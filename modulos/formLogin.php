      <div id="headings">
         <?php if (isset($_SESSION['Email'])){?>
	<a href='modulos/configurarUsuario.php'><img  id="menuTop" src="images/usuario.png" width="25px" height="25px" title="Configurar usuario"/></a>
	<a href="modulos/ConfigurarVehiculos.php"><img id="menuTop" id="garaje" src="images/llave.png"  width="25" height="25" name="garaje" title="Configurar vehículos en venta/alquiler"/></a>
	<a href='mensajeria.php?id=0'><img id="menuTop" src="images/email.png" width="25px" height="25px" title="Buzon de entrada"/></a>
	<a href="modulos/desconectarse.php"><img id="menuTop" id="desconectarse" src="images/desconectar.png"  width="25" height="25" name="desconectarse" title="Desconectarse"/></a>
	<?php }else{?>
        <h2><img src="images/create_indi_usr.jpg" alt="" width="25" height="22" /> <a href="#register-box" style="color:#009933" class="register-window">Crear cuenta</a> </h2>
         Registrate y haz tu pedido!!!
      </div>
      <div id="login">
        <p><strong>Ya estas registrado ?</strong> Logeate aquí con tus datos.</p>
        <div id="loginForm">
          <form id="loginFormm" method="post" action="modulos/procesarLogin.php">
            <div class="formblock">
              <label>Correo</label>
              <input id="l_correoL" name="l_correo" type="text" class="correo" />
            </div>
            <div class="formblock">
              <label>Contraseña</label>
              <input id="l_password" name="l_password" type="password" class="password"/>
            </div>
            <div class="formblock">
             <button id="btnLogin" type="button">Enviar</button>
            </div>
            <div id="errorLogin" class="error">*Campos incorrectos</div>
            <div class="clear">&nbsp;</div>

          </form>
        </div>
                <?php }?>