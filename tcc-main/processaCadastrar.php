<?php

require("/conexaoCadastrar.php");

session_start();

if(!isset($_SESSION['login'])){
    header('Location: ../cadastra.php');
}

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];


$sql = 'INSERT INTO `tb_usuarios` (`id_usuarios`, `nome`,`telefone`, `email`, `senha`, `confirma_senha`)
VALUES (NULL,?, ?, ?, ?,?)';

$p = $banco->prepare($sql)
$p->bindValue(1, $id_usuarios);
$p->bindValue(2, $nome);
$p->bindValue(3, $telefone);
$p->bindValue(4, $email);
$p->bindValue(5, $senha);
$p->bindValue(6, $confirma_senha);

$p->execute();
header('Location: cadastra.php');
  

?>