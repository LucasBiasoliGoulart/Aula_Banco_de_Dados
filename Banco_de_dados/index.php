<?php
   /*echo '<pre>';
   print_r($_POST);
   echo '</pre>';*/

   require 'conexao.php';

   if($_POST) {
    // Captura das variaveis do POST
    $servico = $_POST['servico'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
 
    // Create
    mysqli_query($Link, "INSERT INTO tb_info(servico, login, senha) values('$servico', '$login', '$senha')"); 
    unset($_POST);
    header('location: index.php'); 
   }

   // Read
   $resultado = mysqli_query($Link, 'SELECT * FROM tb_info');

   // Delete
   if ($_GET['acao'] = 'excluir') {
    print_r('excluir');
   }

   mysqli_query($Link, 'DELETE FROM tb_info WHERE id = '.$_GET['id']);

   

   //print_r($resultado);  

   //if($Link) {
   // echo 'Banco conectado';
   //}

    // Criar banco
   //mysqli_query($Link, 'CREATE DATABASE IF NOT EXISTS B_DADOS');

   // Criando Tabela
   //mysqli_query($Link, 'CREATE TABLE IF NOT EXISTS tb_info(
   //id int primary key auto_increment,
   //servico varchar(50) not null,
   //login varchar(50) not null,
   //senha varchar(50) not null
   //)');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aula de Banco de Dados</title>
</head>
<body>
    <form method='post' action="index.php">
        <h1>Cadastro</h1>
        <label for="serviço">Serviço</label>
        <input type="text" name="servico" placeholder="Digite seu serviço">
        <label for="email">Email</label>
        <input type="text" name="login" placeholder="Digite seu email">
        <label for="senha">Senha</label>
        <input type="text" name="senha" placeholder="Digite sua senha">
        <button type='submit'>Cadastre-se</button>
    </form>
    <br><br>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Serviço</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Gerenciador</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($dados = mysqli_fetch_assoc($resultado)) {
            echo '<tr>';
                echo '<td>'.$dados["id"].'</td>';
                echo '<td>'.$dados["servico"].'</td>';
                echo '<td>'.$dados["login"].'</td>';
                echo '<td>'.$dados["senha"].'</td>';
                echo '<td><button><a href="index.php?acao=excluir&id='.$dados['id'].'">Excluir</a></button> <button><a href="">Editar</a></button></td>';
            echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <style>
       table{
           width: 70%;
           background-color: gray;
        }

        tr, td{
            height: 30px;
            background-color: white;
            padding: 5px;
        }

        button{
            padding: 10px; 
            margin-left: 5px;
            border: none;
            background-color: black;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        a{
            text-decoration: none;
            color: white;
        }
    </style>
</body>
</html>