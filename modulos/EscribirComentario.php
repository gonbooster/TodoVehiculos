<!--ESCRIBIR COMENTARIO :: VISIBLES PARA USUARIOS CONECTADOS ****** -->
<?php if (isset($_SESSION['Email'])){ ?>
	<div id="formulario">
<div class="info"><span><h1>Escriba un comentario</h1></span></div>
<form  id="comentariosForm">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
<table width="200" border="0" class="content">
<tr>
  <td colspan="2">
    <textarea tabindex="50" name="comentario" id="c_comentario" cols="100" re rows="5"
     onKeyDown="ContarTexto(comentariosForm.comentario,comentariosForm.cajita,500);"
     onKeyUp="ContarTexto(comentariosForm.comentario,comentariosForm.cajita,500);"></textarea>
      <!-- mensaje de validación comentario-->
      <div id="mensaje6" class="error">*Introduce un comentario</div>
	</td>
</tr>
    <tr>
    <td colspan="3"><button id="enviarComentario" type="button">Enviar</button> </td>
  </tr>
</table>
        <div id="exito" style="display:none">
            Sus datos han sido recibidos con éxito.
        </div>
        <div id="fracaso" style="display:none">
            Se ha producido un error durante el envío de datos.
        </div>
</form>
</div>
<?php } ?>