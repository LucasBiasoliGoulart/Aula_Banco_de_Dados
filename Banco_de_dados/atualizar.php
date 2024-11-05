<?php 

    require 'conexao.php';

    // Atualizar
    if ($_GET && $_GET['acao']="atualizar") {
        $id = $_GET['id'];
        $resultado = mysqli_query($Link, 'SELECT * FROM tb_info WHERE ID ='.$id);
        while($dados = mysqli_fetch_assoc($resultado)) {
            $id = $dados['id'];
            $servico = $dados['servico'];
            $login = $dados['login'];
            $senha = $dados['senha'];
        }
    }

    if ($_POST) {
        $id = $_POST['id'];
        $servico = $_POST['servico'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        mysqli_query($Link, "UPDATE tb_info SET SERVICO = '$servico', LOGIN = '$login', SENHA = '$senha' WHERE ID =".$id);
        header('location: index.php');
    }

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
    <form method='post' action="atualizar.php">
        <h1>Atualizações</h1>
        <label for="id">ID</label>
        <input type="text" name="id" value="<?php echo $id;?>">
        <label for="serviço">Serviço</label>
        <input type="text" name="servico" placeholder="Digite seu serviço" value="<?php echo $servico;?>">
        <label for="email">Email</label>
        <input type="text" name="login" placeholder="Digite seu email" value="<?php echo $login;?>">
        <label for="senha">Senha</label>
        <input type="text" name="senha" placeholder="Digite sua senha" value="<?php echo $senha;?>">
        <button type='submit'>Atualizar</button>
    </form>
    <br><br>
</body>
</html>