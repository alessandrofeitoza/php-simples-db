<?php

if (false === empty($_POST)) {
    $nome = $_POST['nome'];
    $qtd = $_POST['quantidade'];

    $conexao = include 'conexao.php';

    $sql = "INSERT INTO tb_bebidas (nome, quantidade) VALUES ('{$nome}', '{$qtd}')";

    $query = $conexao->prepare($sql);
    $query->execute();

    header('location: listar.php');
    exit;
}

include 'paginas-html/form.phtml';