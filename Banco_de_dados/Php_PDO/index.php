<?php 
   if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $dsn = 'mysql:host=localhost;dbname=banco_teste';
        $user = 'root';
        $pass = '';

        try{
            $link = new PDO($dsn, $user, $pass);

            $pergunta = "select * from tb_usuario where";
            $pergunta.= " usuario = :usuario";
            $pergunta.= " and senha = :senha";

            $resposta = $link->prepare($pergunta);
            $resposta->bindValue(':usuario', $_POST['usuario']);
            $resposta->bindValue(':senha', $_POST['senha']);

            $resposta->execute();

            $usuario = $resposta->fetch();

        }catch(PDOException $e) {
            echo 'Erro'.$e->getCode().'Mensagem'.$e->getMessage();
        }
   }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Login</h1>
        <input type="text" name="usuario" placeholder="Usuario"><br>
        <input type="password" name="senha" placeholder="Senha"><br>
        <button type="submit">Entrar</button>
    </form>
    <?php 
        if(empty($usuario)) {
            echo '<h2>Não Logada</h2>';
        }else {
            echo '<h2>Logado</h2>';
        }
    ?>
    <style>
        body{
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #EEEEEE;
            font-family: Arial;
        }

        form{
            width: 30%;
            border-radius: 10px;
            background-color: #FFFFFF;
            box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1, h2{
            font-weight: 400;
        }

        input{
            width: 70%;
            height: 5vh;
        }

        button{
            width: 70%;
            height: 40px;
            border: none;
            background: dodgerblue;
            margin-bottom: 30px;
            cursor: pointer;
        }
    </style>
</body>
</html>