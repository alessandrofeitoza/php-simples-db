<?php

$conexao = include 'conexao.php';

$sql = 'SELECT * FROM tb_bebidas';

$query = $conexao->prepare($sql);
$query->execute();

$bebidas = $query->fetchAll();

include 'paginas-html/tabela.phtml';