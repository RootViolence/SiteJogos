<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK GAMES</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon shortcut" href="imagens/logos/TachPlayINVETIDO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header mx-auto">
        <nav class="nav ">

            <a class="logo" href="home">SK GAMES</a>

            <ul class="nav-list">

                <li><a href="equipe">EQUIPE</a></li>
                <li><a href="home">GAMES</a></li>
                <li><a href="contato">CONTATO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/404.php";
        }
        ?>

    </main>
</body>
<footer class="text-center container-fluid">

    <p class="text-white">Desenvolvido Por : <a href="https://github.com/RootViolence" target="_blank">Guilherme
            Mendes</a></p>

</footer>

</html>