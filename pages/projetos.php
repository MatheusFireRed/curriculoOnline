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

        <div class="filtro">
            <label>
                <input type="checkbox" value="python"><img src="../img/icons/icons8-python-48.png" alt="Filtrar para python.">
            </label>
            
            <label>
                <input type="checkbox" value="html"> <img src="../img/icons/icons8-html-48.png" alt="Filtrar para HTML">
            </label>

            <label>
                <input type="checkbox" value="css"> <img src="../img/icons/icons8-css-48.png" alt="Filtrar para CSS.">
            </label>

            <label>
                <input type="checkbox" value="javascript"><img src="../img/icons/icons8-javascript-48.png" alt="Filtrar para JavaScript.">

            <label>
                <input type="checkbox" value="sql"> <img src="../img/icons/icons8-sql-48.png" alt="Filtrar para SQL.">
            </label>
        </div>

        <div class="box-projetos">
            
            <!-- PASSAR PARA A PÁGINA DE STYLE !-->
            <style>
            .card-projeto{
                border: 1px solid green;
                width: 250px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
            }
            .img-projeto{
                width: 90%;
                height: 50%;
                border: 1px solid yellow;
            }
            .informacoes-projeto{
                width: 90%;
                height: 50%;
                border: 1px solid orange;
            }

            </style>

            <div class="card-projeto">
                <div class="img-projeto">

                </div>
                <div class="informacoes-projeto">
                    <table>
                        <tr>
                            <td>Nome do projeto</td>
                        </tr>
                        <tr>
                            <td>Status do projeto</td>
                        </tr>
                        <tr>
                            <td>linguagens usadas no projeto</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/paginapessoal/generic/footer.php';
    ?>
</body>
</html>