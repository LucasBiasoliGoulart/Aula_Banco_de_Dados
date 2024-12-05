<?php
    require 'conexao.php';

    // Update
    if ($_GET && isset($_GET['acao']) && $_GET['acao'] = "update") {
        $id = $_GET['id'];
        $resultado = mysqli_query($link, 'SELECT * FROM tb_contatos WHERE ID ='.$id);
        if ($resultado) {
            while ($dados = mysqli_fetch_assoc($resultado)) {
                $id = $dados['id'];
                $nome = $dados['nome'];
                $telefone = $dados['telefone'];
                $email = $dados['email'];
            }
        }
    }

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if ($_POST) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        mysqli_query($link, "UPDATE tb_contatos SET NOME = '$nome', TELEFONE = '$telefone', EMAIL = '$email' WHERE ID =".$id);
        header('location: index.php');
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
        <a href="./index.php">Voltar</a>
    </nav>
    <div class="conta">
        <form action="update.php" method="post">
        <h2>Editar Contato</h2>
            <div class="inputs">
                <label for="id">ID</label>
                <input type="text" name="id" value="<?php echo $id;?>">
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo $nome;?>">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" value="<?php echo $telefone;?>">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $email;?>">
            </div>
            <button type="submit">Enviar</button>
        </form>
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
            justify-content: space-between;
            background: black;
            color: white;
        }

        nav h1{
            font-size: 30px;
            font-weight: 400;
            margin-left: 20px;
        }

        nav a{
            padding: 10px 30px;
            color: white;
            text-decoration: none;
            font-size: 20px;
            background: dodgerblue;
            border-radius: 10px;
            margin-right: 20px;
        }

        .conta{
            width: 100%;
            height: 88vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form{
            width: 40%;
            border-radius: 10px;
            background: white;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 30px;
        }

        h2{
            font-size: 40px;
            font-weight: 400;
        }

        button{
            width: 100%;
            height: 50px;
            border: none;
            color: white;
            border-radius: 10px;
            background: black;
            font-size: 20px;
            cursor: pointer;
        }

        .inputs{
            width: 100%;
        }

        .inputs label{
            font-size: 20px;
        }

        .inputs input{
            width: 95%;
            height: 43px;
            padding: 0 10px;
            margin-bottom: 20px;
            outline: none;
            border: 1px solid gray;
            font-size: 15px;
            border-radius: 5px;
        }

        .inputs input::placeholder{
            color: black;
        }
    </style>
</body>
</html>