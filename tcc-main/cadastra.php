<?php
require "/conexaoCadastrar.php";

session_start(); 
if(!isset($_SESSION['login'])){
    header('Location: ../processaCadastrar.php');
}
$sql = 'SELECT * FROM tb_usuarios WHERE id_usuarios = ?';
$stm = $banco->prepare($sql);
$stm->bindValue(1, $_GET["id_usuarios"]);

$stm->execute();
$usuarios = $stm->fetch(PDO::FETCH_ASSOC);

?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>cadastro
        </title>
        <link rel="stylesheet"  href="css/estilo.css">
    </head>

        <body>
            <div id="corpo-form-cad">
            <h1> Cadastrar </h1>
            <form method="post">
            <input type="nome" name="nome" placeholder="Digite seu nome" maxlength="30">
                <input type="email" name="email" placeholder="Digite seu email"maxlength="40">
                <input type="telefone" name="telefone" placeholder="Seu telefone"maxlength="11">
                <input type="password" name="senha" placeholder="Digite uma senha"maxlength="32">
                <input type="password" name="confirma_senha" placeholder="Confirma senha"maxlength="32">
                <input type="submit" value="Cadastrar">
               
            </div>
           
        </body>
    
</html>