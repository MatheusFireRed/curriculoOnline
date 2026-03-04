<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Curricular - Matheus de Oliveira Timotheo</title>

    <link rel="stylesheet" href="/paginapessoal/style/style.css">
    <link rel="stylesheet" href="/paginapessoal/style/styleMobile.css">
</head>
<body class="display-flex align-itens-center justify-center">
        <?php
            include 'generic/menuHorizontal.php';
        ?>

        <?php 
            include 'generic/menuVertical.php';
        ?>
    
    <main class="display-flex align-itens-center justify-center width100">
        <div class="linha espaco-linha-mobile display-flex align-itens-center justify-center">
            <div class="coluna2 display-flex align-itens-center justify-center">
                <img class="fade-up" src="/paginapessoal/img/FotoPrincipal1.jpeg" alt="Foto de Matheus de Oliveira Timotheo." id="ImagemPrincipal">
            </div>
            <div class="coluna2 texto1 fade-up display-flex align-itens-center justify-center">
                <p>Meu nome é Matheus de Oliveira Timotheo, tenho 30 anos e sou estudante de Análise e Desenvolvimento de Sistemas, atualmente cursando o último período, com previsão de conclusão em junho de 2026. Possuo conhecimentos em HTML, CSS, JavaScript, Python e SQL, com foco no desenvolvimento de soluções eficientes e bem estruturadas. Tenho grande interesse em tecnologia, aprendizado contínuo e em aplicar meus conhecimentos na prática por meio de projetos e desafios reais.</p>
            </div>
        </div>

        <div class="linha inverter-itens-mobile display-flex align-itens-center justify-center">
            <div class="coluna2 texto1 fade-up display-flex align-itens-center justify-center">
                <p>Nesta página você encontrará informações sobre minha formação acadêmica, certificações, projetos desenvolvidos e experiências práticas na área de tecnologia. Também disponibilizo links para minhas redes sociais e canais de contato, facilitando a troca de ideias, parcerias e oportunidades profissionais. Este espaço foi criado para compartilhar minha evolução na área de desenvolvimento e demonstrar, na prática, meus conhecimentos e interesses.</p>
            </div>
            <div class="coluna2 display-flex align-itens-center justify-center" id="texto1">
                <img class="fade-up imagemIlustrativa" id="imgSecundaria" src="/paginapessoal/img/imagemIlustrativa1.png" alt="Imagem ilustrativa. Homem progeamando.">
            </div>
        </div>

        <!-- Atributo defer faz com que o script só seja carregado qundo o HTML estiver completamente carregado!-->
        <script src="/paginapessoal/js/fadeinElementos.js" defer></script>
    </main>

    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/paginapessoal/generic/footer.php';
    ?>
</body>
</html>