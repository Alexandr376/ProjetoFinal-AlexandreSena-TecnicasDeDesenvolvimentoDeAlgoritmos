<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome'];
			$nacionalidade	= $_POST['nacionalidade'];

			$sql = "INSERT INTO autores (nome, nacionalidade)
					VALUES ('{$nome}', '{$nacionalidade}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}
			break;
		
		case 'editar':
			$nome = $_POST['nome'];
			$nacionalidade = $_POST['nacionalidade'];

			$sql = "UPDATE autores SET nome= '{$nome}', nacionalidade='{$nacionalidade}' WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM autores WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('excluir com sucesso');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-autores';</script>";
			}
			break;
	}
?>