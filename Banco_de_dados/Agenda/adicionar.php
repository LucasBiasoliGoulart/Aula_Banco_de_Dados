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
    <header>
        <form action="adicionar.php" method="post">
        <h2>Adicionar Novo Contato</h2>
            <div class="inputs">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome do contato">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" placeholder="Digite o número de telefone">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Digite o email">
            </div>
            <button type="submit">Adicionar</button>
        </form>
    </header>
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
            width: 50%;
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
            height: 40px;
            padding: 0 10px;
            margin-bottom: 30px;
        }
    </style>
</body>
</html>