<?php

    if($_POST) {
        // Captura das variaveis do POST
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
 
        // Create
   }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>
<body>
    <nav>
        <h1>Agenda de Contatos</h1>
        <a href="./adicionar.php">Adicionar</a>
    </nav>
    <header>
        <h2>Buscar Contato</h2>
        <div class="pesquisa">
            <input type="text" placeholder="Digite o nome do contato">
            <button>Buscar</button>
        </div>
    </header>
    <div class="tabela">
        <h2>Tabela de Contatos</h2>
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Email</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <!--<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="excluir">Excluir</button> <button class="editar">Editar</button></td>
                </tr>-->
                <?php
                    while($dados = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                        echo '<td>'.$dados["nome"].'</td>';
                        echo '<td>'.$dados["telefone"].'</td>';
                        echo '<td>'.$dados["email"].'</td>';
                        echo '<td><button class="excluir"><a href="index.php?acao=excluir&id='.$dados['id'].'">Excluir</a></button> 
                        <button class="editar"><a href="atualizar.php?id='.$dados['id'].'">Editar</a></button></td>';
                    echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
            background: #EEEEEE;
        }

        nav{
            width: 100%;
            height: 12vh;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background: black;
            color: white;
        }

        nav h1{
            font-size: 30px;
            font-weight: 400;
        }

        nav a{
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            font-size: 20px;
            background: dodgerblue;
            border-radius: 10px;
        }

        header{
            width: 100%;
            height: 20vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        header h2{
            font-size: 30px;
            font-weight: 400;
            margin-left: -37%;
        }

        .pesquisa{
            width: 50%;
            padding: 10px;
        }

        .pesquisa input{
            width: 80%;
            height: 35px;
            padding: 0px 10px;
        }

        .pesquisa button{
            padding: 12px 40px;
            border: none;
            border-radius: 5px;
            background: black;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .tabela{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .tabela h2{
            font-size: 30px;
            font-weight: 400;
        }

        table{
           width: 90%;
        }

        tr, td{
            width: 10%;
            height: 30px;
            padding: 5px;
            background-color: white;
            border: 1px solid black;
        }

        button{
            padding: 10px 30px;
            border: none;
            font-size: 17px; 
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .excluir{
            background: red;
        }

        .editar{
            background: green;
        }
    </style>
</body>
</html>