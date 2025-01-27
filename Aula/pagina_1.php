<?php
    $i = 0;

    for($i = 0; $i < 1000000; $i++);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Requisições</title>
</head>
<body>
    <nav class="menu">
        <h3>Requisições sincronas e assincronas</h3>
    </nav>
    <div class="botoes">
        <a href="#">Página 1</a>
        <a href="./pagina_2.html">Página 2</a>
        <a href="./pagina_3.html">Página 3</a>
    </div>
    <?php echo $i?>
    <div class="principal">
        <div class="card">
            <div class="titulo">
                <h2>Notícia 1</h2>
            </div>
            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
            <p>Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content. It is essentially nonsense text that still gives an idea of what real words will look like in the final product. It may be used as a placeholder before final copy is available.</p>
        </div>
    </div>
</body>
</html>