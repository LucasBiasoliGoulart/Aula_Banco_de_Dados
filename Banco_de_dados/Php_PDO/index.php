<?php 
   $dsn = 'mysql:host=localhost;dbname=banco_teste';
   $user = 'root';
   $pass = '';

   try{
        $link = new PDO($dsn, $user, $pass);
   }catch(PDOException $e) {
        echo 'Erro'.$e->getCode().'Mensagem'.$e->getMessage();
   }

   $pergunta = 'SELECT * FROM tb_usuario';
   $resultado = $link->query($pergunta);
   $lista = $resultado->fetchAll(PDO::FETCH_ASSOC);
   //echo '<pre>';
   //print_r($lista);
   //echo '</pre>';
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
        <input type="text" name="login" placeholder="Login"> <br>
        <input type="password" name="senha" placeholder="Senha"><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>