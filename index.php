<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main class="main">
        <div class="conteudo">
            <nav class="modulosCurso">
                <!--é um flex container pois tem display flex-->
                <div class="modulo blue">
                    <!--all childrem are flex items-->
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&&file=teste">Exercício A</a></li>
                       
                    </ul>

                </div>
                
            </nav>
        </div>
    </main>

    <fotter class="footer"> COD3R & ALUNOS <?= date('y');?> </fotter>
</body>

</html>