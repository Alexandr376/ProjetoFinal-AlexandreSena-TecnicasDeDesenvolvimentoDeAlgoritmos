<?php 
	
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$nome	= $_POST['nome'];
			$ano_lanc	= $_POST['ano_lanc'];

			$sql = "INSERT INTO livros (nome, ano_lanc)
					VALUES ('{$nome}', '{$ano_lanc}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não cadastrou');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;
		
		case 'editar':
			$nome = $_POST['nome'];
			$ano_lanc = $_POST['ano_lanc'];

			$sql = "UPDATE livros SET nome= '{$nome}', ano_lanc='{$ano_lanc}' WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não editou');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM livros WHERE id=".$_REQUEST['id'];

			$res = $conn->query($sql);

			if($res == true){
				print "<script>alert('excluir com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não excluiu');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;
	}
?>