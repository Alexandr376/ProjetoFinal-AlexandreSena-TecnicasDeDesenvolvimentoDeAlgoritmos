<h1>Listar Autor</h1>
<?php
$sql = "SELECT * FROM autores";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>nacionalidade</th>";
    print "</tr>";
    while( $row = $res->fetch_object() ){       
        print "<tr>";      
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->nacionalidade."</td>";
        print "<td>
        <button class='btn btn-success'
        onclick=\"location.href='?page=editar-autores&id={$row->id}';\" >Editar</button>
        <button class='btn btn-danger' onclick=\"if(
        confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar-autores&acao=excluir&id={$row->id}';
        }else{false;}\">Excluir</button>
       </td>";
        print "</tr>";
    }
    print "</table>";  
} else{
    print "<p> Nao encontrou resultado</p>";
}
?>