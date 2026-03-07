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

        <!-- PASSAR PARA A PÁGINA DE STYLE !-->
        <style>
            .img-linguagens{
                width: 45px;
                height: 45px;
            }

            .cb-linguagens{
                background: none;
                outline: none;
            }

            .checkbox-container{
                display: flex;
                align-items: center;
                cursor: pointer;
                font-family: Arial;
                gap: 10px;
                padding: 5px;
            }

            .checkbox-container input{
                display: none;
            }

            .checkmark{
                border-radius: 20px;
                transition: ease-in-out .5s;
                display: flex;
                align-items: center;
                padding: 3px;
            }

            .checkbox-container input:checked + .checkmark{
                background-color: #c0bdb3;
                box-shadow: 1px 1px 5px 3px white;
            }

        </style>

        <div class="checkbox-container">
            <label class="checkbox-container">
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
            

            <style>
            .card-projeto{
                border: 1px solid green;
                width: 250px;
                height: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                background-color: #c0bdb3;
                border-radius: 20px;
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