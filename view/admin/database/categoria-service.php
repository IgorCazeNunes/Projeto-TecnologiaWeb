<?php
class CategoriaService {
    function adicionar($conexao, $nome) {
        $query = "INSERT INTO categoria (nome) VALUES ('{$nome}')";
        return mysqli_query($conexao, $query);
    }
    
    function alterar($conexao, $id, $nome) {
        $query = "UPDATE categoria SET nome = '{$nome}' WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }
    
    function remover($conexao, $id) {
        $query = "DELETE FROM categoria WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
}

?>