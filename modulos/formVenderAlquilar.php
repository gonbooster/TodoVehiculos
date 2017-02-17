
        <div class="tab">
          <h1>Vender o alquilar >> Introduzca los siguientes datos:</h1>
        </div>
        <div class="container">
        	  <div class="home_sidebar">
          <form id="form_vender" method="post" action="modulos/procesarVenderAlquilar.php">
            <table class="search_form" style="width:100%; border:none;">
              <tr>
                <td  class="label">Nombre del vehículo</td>
                <td colspan="3"><label>
                    <input type="text" name="vender_nombre" id="vender_nombre" class="text longfield" />
                  </label></td>
              </tr>
              <tr>
               <td class="label">Tipo</td>
                <td><label>
                    <select name="vender_tipo" id="vender_tipo" class="select_field">
                      <option selected="selected">-</option>
                      	<option>Coche</option>
                      <option>Moto</option>
                    </select>
                  </label></td>
                <td width="14%" class="label">Precio(introduce €)</td>
                <td width="42%"><input type="text" name="vender_precio" id="vender_precio" class="text" /></td>
              </tr>
              <tr>
                <td class="label">Para</td>
                <td><label>
                    <select name="vender_para" id="vender_para" class="select_field">
                      <option value="Comprar" selected="selected">Vender</option>
                      <option>Alquilar</option>
                    </select>
                  </label></td>
                <td class="label">Modelo</td>
                <td><input type="text" name="vender_modelo" id="vender_modelo" class="text" /></td>
              </tr>
              <tr>
                <td class="label">Kms realizados</td>
                <td><label>
                    <input type="text" name="vender_kms" id="vender_kms" class="text smalltextarea" />
                  </label></td>
                <td class="label">Combustible</td>
                <td><label>
                    <select name="vender_combustible" id="vender_combustible" class="select_field">
                      <option selected="selected">-</option>/option>
                      <option>Diesel</option>
                      <option>Gasolina</option>
                      <option>Eléctrico/ Híbrido</option>
                      <option>otros</option>
                    </select>
                  </label></td>
              </tr>
              <tr>
                <td class="label">Antiguedad</td>
                <td><label><input type="text" name="vender_antiguedad" id="vender_antiguedad" class="text" /></label>
                  </td>
                <td class="label">Estado</td>
                <td><label>
                    <select name="vender_estado" id="vender_estado" class="select_field">
                      <option selected="selected">-</option>
                      <option>Nuevo</option>
                      <option>Seminuevo</option>
                    </select>
                  </label></td>
              </tr>
              <tr>
                <td class="label">Carroceria</td>
                <td><label><input type="text" name="vender_carroceria" id="vender_carroceria" class="text" /></label></td>                  
                <td class="label">Cambio</td>
                <td><label>
                    <select name="vender_cambio" id="vender_cambio" class="select_field">
                      <option selected="selected">-</option>
                      <option>Automatico</option>
                      <option>Manual</option>
                    </select>
                  </label></td>
              </tr>
              <tr>
                <td class="label">Equipamiento</td>
                <td><label><input type="text" name="vender_equipamiento" id="vender_equipamiento" class="text" /></label>
                  </td>
                <td class="label">Color</td>
                <td><label>
					<input type="text" name="vender_color" id="vender_color" class="text" /></td>
                  </label></td>
              </tr>
                 <tr>
                <td class="label">Versión</td>
                <td><label><input type="text" name="vender_version" id="vender_version" class="text" /></label>
                  </td>
                <td class="label">URL de la Imagen del vehículo</td>
                <td><label>
					<input type="text" name="vender_URLImagen" id="vender_URLImagen" class="text" /></td>
                  </label></td>
                            <tr>
                <td class="label">Descripción</td>
                <td><label><textarea  class="textarea" tabindex="50" name="vender_descripcion" id="descripcion" cols="50" rows="19" onKeyDown="ContarTexto(form_vender.vender_descripcion,form_vender.cajita,500);"
     onKeyUp="ContarTexto(form_vender.vender_descripcion,form_vender.cajita,500);"></textarea></td></label></td>
                <td class="label"></td>
                <td><input type="image" src="images/siguiente.jpg"  name="vender_aceptar" id="vender_aceptar" value="Submit" />
                </label>
                </td>
                 <span class="nota">**Si dejan algún campo vacio no se realizará el registro.En caso de no estar seguro en algun campo, escribir un " - "(sin comillas).</span>
              </tr>
            </table>
          </form>
        </div>
         </div>
