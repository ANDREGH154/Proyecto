	<td valign="top" class="portada">
			<div>
			<p>Ejemplares</p>
			<span class="float-right"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary">Crear ejemplar</a></span>
			</div>
			<hr>

    		<form>
        		Buscar: <input id="searchTerm" type="text" onkeyup="doSearch()" />
    		</form>
    		<hr>

				<table cellpadding="4" class="ejemplaradmin">
					<tr>
						<th>Titulo</th>
						<th>Autor</th>
						<th>Area</th>
						<th>Categoria</th>
						<th>Opciones</th>
					</tr>
					<?php 
						$i=1;
						foreach ($consulta->result() as $fila) {
					?>
					<tr>
						<td><?php echo $fila->ejem_titulo ?></td>
						<td><?php  ?></td>
						<td><?php  ?></td>
						<td><?php echo $fila->ejem_cate_id?></td>
						<td><?php  ?></td>
					</tr>
					<?php
						}
					 ?>
				</table>
		</td>
	</tr>
</table>
<script type="text/javascript" src="<?php base_url(); ?>assets/js/script.js"></script>
</body>