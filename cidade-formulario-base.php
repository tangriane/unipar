<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome" 
			value="<?=$cidade->getNome()?>">
	</td>
</tr>
<tr>

	<td>Estado</td>
	<td>
		<select name="estadoid" class="form-control">
			<?php
			foreach($estados as $estado) : 
				$essaEhACategoria = $cidade->getEstadoid() == $estado->getId();
				$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
				<option value="<?=$estado->getId()?>" <?=$selecao?>>
					<?=$estado->getNome()?>
				</option>
			<?php 
			endforeach
			?>
		</select>
	</td>
</tr>

