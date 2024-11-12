<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatost</title>
</head>
<body>
    <nav>
        <h1>Agenda de Contatos</h1>
        <a href="./adicionar.php">Adicionar</a>
    </nav>
    <header>
        <div class="mensagem">
            <h2>Deletado com Sucesso</h2>
            <a href="./index.php">Voltar para lista de contatos</a>
        </div>
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

        header{
            width: 100%;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mensagem{
            width: 40%;
            padding: 17px;
            border-radius: 5px;
            border: 1px solid black;
            background-color: white;
        }

        h2{
            font-size: 30px;
            font-weight: 400;
        }

        a{
            text-decoration: none;
            color: black;
            font-size: 17px;
        }
        
        a:hover{
            color: dodgerblue;
        }
    </style>
</body>
</html>