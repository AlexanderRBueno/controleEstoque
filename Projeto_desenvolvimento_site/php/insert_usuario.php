<?php
include 'conexao.php';
$nm_usuario = $_POST['nome'];
$dt_nascimento = $_POST['data'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];


$insert = "INSERT INTO tb_usuario VALUES (NULL, '$nm_usuario', '$dt_nascimento', '$login', '$senha', '$setor')";

$query = $conn->query($insert);

if($query == true){
    echo"<script>alert('SIM'); history.back()</script>";
}
else{
    echo"<script>alert('NÃO'); history.back()</script>";
}