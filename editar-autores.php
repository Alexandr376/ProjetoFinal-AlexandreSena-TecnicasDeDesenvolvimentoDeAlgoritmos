<h1>Editar Autor</h1>
<?php
$id = (int) $_REQUEST['id']; 
$sql = "SELECT * FROM autores WHERE id=" . $id; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-autores" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
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