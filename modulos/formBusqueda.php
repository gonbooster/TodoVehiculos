<div id="search">
        <div class="tab">
          <h2>Buscar vehículo</h2>
        </div>
        <div class="container">
          <form id="form_busqueda" method="GET" action="resultadoBusqueda.php?">
			<table class="search_form" style="width:100%; border:none;">
              <tr>
                <td  class="label">Buscar</td>             	
                 <td colspan="4" class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=0');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_todo" id="busq_todo" class="text longfield" value=""></label></div>
 				</td>   
              </tr>
              <tr>
               <td class="label">Modelo</td>
                <td class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=6');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_tipo" id="busq_tipo" class="text"></label></div>
 				</td>
				 <td class="label">Estado</td>
                <td>
                	<label><select name="busq_tipo" id="busq_tipo" class="select_field">
                      <option selected="selected"></option>
                      	<option>Nuevo</option>
                      <option>Seminuevo</option>
                    </select></label>
                  </td>
               </tr>
               <tr>
               <td class="label">Version</td>
                <td class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=2');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_tipo" id="busq_tipo" class="text"></label></div>
 				</td>
                <td class="label">Cambio</td>
                <td>
                	<label><select name="busq_tipo" id="busq_tipo" class="select_field">
                      <option selected="selected"></option>
                      	<option>Manual</option>
                      <option>Automático</option>
                    </select></label>
                  </td>             
               </tr>
              <tr>
               <td class="label">Provincia</td>
                 <td class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=3');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_tipo" id="busq_tipo" class="text"></label></div>
 				</td>                
 				<td class="label">Combustible</td>
                <td>
                	<label><select name="busq_tipo" id="busq_tipo" class="select_field">
                      <option selected="selected"></option>
                      	<option>Gasolina</option>
                      	<option>Diesel</option>
                       	<option>Electrico</option>
                        <option>otros</option>
                    </select></label>
                  </td>
               </tr>
              <tr>
               <td class="label">Antiguedad</td>
                <td class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=4');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_tipo" id="busq_tipo" class="text"></label></div>
 				</td>
                  <td class="label">Disposición</td>
                <td>
                	<label><select name="busq_tipo" id="busq_tipo" class="select_field">
                      <option selected="selected"></option>
                      	<option>Comprar</option>
                      <option>Vender</option>
                    </select></label>
                  </td>
               </tr>
				<tr>
               <td class="label">Precio</td>
                <td class="label"><div onmouseover="iniciarConsulta('modulos/descripcion.php?idDescripcion=5');" onmousemove="cursor('consulta');"
               	onmouseout="esconder('consulta');"><strong><label><input name="busq_tipo" id="busq_tipo" class="text"></label></div>
 				</td>
 				<td class="label">Tipo</td>
                <td>
                	<label><select name="busq_tipo" id="busq_tipo" class="select_field">
                      <option selected="selected"></option>
                      	<option>Coche</option>
                      <option>Moto</option>
                    </select></label>
                  </td>
               </tr>
               <tr>
                <td <td colspan="4"><class="label">
                	<label><input type="image" class="image" src="images/buscar.png"  name="busq_buscar" id="busq_buscar" value="Submit" /></label>
                </td>
              </tr>
            </table>
          </form>
        </div>
        <div class='anuncio' id='consulta'></div>
      </div>