<h1>Cadastrar Livro</h1>
<form action="?page=salvar-livro" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Data de lançamento
			<input type="date" name="ano_lanc" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>