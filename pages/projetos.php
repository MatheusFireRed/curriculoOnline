<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Projetos - Matheus de Oliveira Timotheo</title>

    <link rel="stylesheet" href="/paginapessoal/style/style.css">
    <link rel="stylesheet" href="/paginapessoal/style/styleProjetos.css">
    <link rel="stylesheet" href="/paginapessoal/style/styleMobile.css">
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
        <br>
        <p>Selecione as linguagens para visualisar os projetos</p>
        
        <div class="box-filtro">
            <h3>Filtrar</h3>
            <button id="btnFiltro"><img src="http://localhost/paginapessoal/img/caret-down.svg" class="setafiltro" alt="Seta para abaixar o filtro." width="40px"></button>
        </div>
        
        <script src="../js/mostrarFiltro.js"></script>


        <div class="container-linguagens">
            <label class="checkbox-container display-flex">
                <input type="checkbox" value="python">
                <span class="checkmark">
                    <img src="../img/icons/icons8-python-48.png" class="img-linguagens" alt="Filtrar para python.">
                </span>
            </label>

            <label class="checkbox-container">
                <input type="checkbox" value="html">
                <span class="checkmark">
                    <img src="../img/icons/icons8-html-48.png" class="img-linguagens" alt="Filtrar para HTML.">
                </span>
            </label>

            <label class="checkbox-container">
                <input type="checkbox" value="css">
                <span class="checkmark">
                    <img src="../img/icons/icons8-css-48.png" class="img-linguagens" alt="Filtrar para CSS.">
                </span>
            </label>

            <label class="checkbox-container">
                <input type="checkbox" value="php">
                <span class="checkmark">
                    <img src="../img/icons/php.png" class="img-linguagens" alt="Filtrar para PHP.">
                </span>
            </label>
    
            <label class="checkbox-container">
                <input type="checkbox" value="javascript">
                <span class="checkmark">
                    <img src="../img/icons/icons8-javascript-48.png" class="img-linguagens" alt="Filtrar para JavaScript.">
                </span>
            </label>

            <label class="checkbox-container">
                <input type="checkbox" value="sql">
                <span class="checkmark">
                    <img src="../img/icons/icons8-sql-48.png" class="img-linguagens" alt="Filtrar para SQL.">
                </span>
            </label>

            <label class="checkbox-container">
                <input type="checkbox" value="java">
                <span class="checkmark">
                    <img src="../img/icons/java.png" class="img-linguagens" alt="Filtrar para Java.">
                </span>
            </label>

        </div>

        <div class="box-projetos">

            <div class="card-projeto display-flex align-itens-center">
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