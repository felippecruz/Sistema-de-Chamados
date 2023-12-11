<?php 
require_once 'conecta.php';

//CRIAR TABELA SQL
$sql = "CREATE TABLE IF NOT EXISTS `logintela` 
(`email` VARCHAR(50) NULL DEFAULT NULL , `senha` INT(20) NULL DEFAULT NULL ) ENGINE = InnoDB";
mysqli_query($conn, $sql);

//INSERIR DADOS NA TABELA
$sql = "INSERT INTO logintela (email, senha) VALUES('', '')";
if ($conn->query($sql)===TRUE){
    echo "Dados inseridos na tabela com sucesso!";
} else {
    echo "Erro, favor preencha os dados corretamente" . $conn->error;
    header('Location: ../systempainel.php');
}