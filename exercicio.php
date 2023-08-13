<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="stylesheet" href="./assets/exercicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="exercicio">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="nav">
        <a href="" class="btnVerde">Sem formatação</a>
        <a href="index.php" class="btnVermelho">Voltar</a>

    </nav>

    <main class="main">
        <div class="conteudo">
            <?php
            //include("./teste/teste.php") //considered hard code. See the ex. bellow
            //include($_GET['dir'] . "/teste.php"); //and we can pass the file via get too... 
            //include($_GET['dir'] . "/" . $_GET['file'] . ".php"); //but there is an even better way...
            //include("{$_GET['dir']}/{$_GET['file']}.php"); //the dir and file parameters would be passed down as href of the HTML links in index.php
            //but there is another way...check it out
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")

            ?>

        </div>
    </main>

    <fotter class="footer"> COD3R & ALUNOS 2023 </fotter>
</body>

</html>