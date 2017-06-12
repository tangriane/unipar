<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome" 
			value="<?=$cliente->getNome()?>">
	</td>
</tr>
<tr>
<tr>
	<td>Endereço</td>
	<td>
		<input class="form-control" type="text" name="endereco" 
			value="<?=$cliente->getEndereco()?>">
	</td>
</tr>
<tr>
	<td>Idade</td>
	<td>
		<input class="form-control" type="text" name="idade" 
			value="<?=$cliente->getIdade()?>">
	</td>
</tr>
<tr>
	<td>Cidade</td>
	<td>
		<select name="cidadeid" class="form-control">
			<?php
			foreach($cidades as $cidade) : 
				$essaEhACategoria = $cliente->getCidadeid() == $cidade->getId();
				$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
				<option value="<?=$cidade->getId()?>" <?=$selecao?>>
					<?=$cidade->getNome()?>
				</option>
			<?php 
			endforeach
			?>
		</select>
	</td>
</tr>
<tr>  
	
<td>Cep</td>
	<td>
		<input class="form-control" type="text" name="cep" 
			value="<?=$cliente->getCep()?>"> 
	</td>
</tr>
<tr>

<tr>
    <td>Tipo de Cliente</td>
    <td>
        <select name="tipoCliente" class="form-control">
            <?php 
            $tipos = array("Cliente", "Pessoa Fisica", "Pessoa Juridica");
            foreach($tipos as $tipo) : 
                $tipoSemEspaco = str_replace(' ', '', $tipo);
                $esseEhOTipo = get_class($cliente) == $tipoSemEspaco;
                $selecaoTipo = $esseEhOTipo ? "selected='selected'" : "";
            ?>
            <?php if ($tipo == "Pessoa Fisico") : ?>
					<optgroup label="Pessoa">
				<?php endif ?>
						<option value="<?=$tipoSemEspaco?>" <?=$selecaoTipo?>>
							<?=$tipo?>
						</option>
				<?php if ($tipo == "Pessoa Juridica") : ?>
					</optgroup>
				<?php endif ?>
			<?php endforeach ?>
		</select>
    </td>
</tr>


<tr>
	<td>CPF (caso seja um Fisica)</td>
	<td>
		<input type="text" name="cpf" class="form-control" 
			value="<?php if ($cliente->temCpf()) { echo $cliente->getCpf(); } ?>" >
	</td>
</tr>
</tr>
<tr>
	<td>CNPJ (caso seja um Juridico)</td>
	<td>
		<input type="text" name="cnpj" class="form-control" 
			value="<?php if ($cliente->temCnpj()) { echo $cliente->getCnpj(); } ?>" >
	</td>
</tr>