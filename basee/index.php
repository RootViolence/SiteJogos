<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK GAMES</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon shortcut" href="imagens/logos/TachPlayINVETIDO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="nav">

            <a class="logo" href="home">SK GAMES</a>

            <ul class="nav-list">

                <li><a href="equipe">EQUIPE</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="contato">CONTATO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php

        if (isset($_GET["param"])) {

            $param = $_GET["param"];

            //separar o parametro por "/"
            $p = explode("/", $param);

            //print_r($p);

        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php}";
        }

        //verificcar se a pagina exite
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/404.php";
        }
        ?>
    </main>
</body>
<footer>

    <p>Desenvolvido Por : <a href="#" target="_blank">Guilherme Mendes</a></p>

</footer>

</html>