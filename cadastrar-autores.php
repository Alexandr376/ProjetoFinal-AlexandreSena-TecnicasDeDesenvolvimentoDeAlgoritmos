<h1>Cadastrar Autor</h1>
<form action="?page=salvar-autores" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Nacionalidade
			<input type="text" name="nacionalidade" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>