
        <div class="tab">
          <h1>Escribir Mensaje</h1>
        </div>
        <div class="container">
        	  <div class="home_sidebar">
          <form id="formMensajeria" method="post" action="modulos/procesarMensajeria.php?id=2">
            <table class="search_form" style="width:100%; border:none;">
              <tr>
               <td class="label">Usuario destinatario</td>
                <td><label>
                    <input type="text" name="msj_destinatario" id="msj_destinatario" class="text">             
                  </label></td>
                                </tr>

                <tr>
                <td width="14%" class="label">Asunto</td>
                <td width="42%"><input type="text" name="msj_asunto" id="msj_asunto" class="text" /></td>
              </tr>

                <tr>
                <td class="label">Mensaje</td>
                <td><label><textarea  class="textarea" tabindex="50" name="msj_mensaje" id="msj_mensaje" cols="50" rows="19
                	onKeyDown="ContarTexto(formMensajeria.msj_mensaje,formMensajeria.cajita,500);"
     onKeyUp="ContarTexto(formMensajeria.msj_mensaje,formMensajeria.cajita,500);"></textarea></label></td>
                              </tr>

                <tr>
                <td class="label"></td>
                <td><input type="image" src="images/siguiente.jpg"  name="msj_enviar" id="msj_enviar" value="Submit" />
                </label>
                </td>
              </tr>
            </table>
          </form>
        </div>
         </div>
