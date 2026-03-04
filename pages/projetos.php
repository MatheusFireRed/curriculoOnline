<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Projetos - Matheus de Oliveira Timotheo</title>

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/styleProjetos.css">
    <link rel="stylesheet" href="../style/styleMobile.css">
</head>
<body>


    <!--  $_SERVER['DOCUMENT_ROOT'], PEGA A PASTA RAIZ DE ONDE SE ENCONTRA O DOCUMENTO !-->    
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/paginapessoal/generic/menuHorizontal.php';
    ?>

    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/paginapessoal/generic/menuVertical.php';
    ?>
    
    <main class="display-flex align-itens-center justify-center width100">

        <h2>Bem-vindo a minha página de projetos!</h2>

        <div class="box-filtro">
            <h3>Filtrar</h3>
            <button id="btnFiltro"><img src="http://localhost/paginapessoal/img/caret-down.svg" alt="Seta para abaixar o filtro." width="40px"></button>
        </div>

        <div class="box-projetos">
            
        </div>

    </main>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/paginapessoal/generic/footer.php';
    ?>
</body>
</html>