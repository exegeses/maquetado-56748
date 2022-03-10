<?php
    $cifra1 = '459,055,724';
    $p = '+9,48%';
    $cifra2 = '260,363 mp';
    $cifra3 = '1,105,801,830 ust';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Desarrollo Fullstack</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <div id="top">
            <!-- marca -->
            <a href="index.html" id="brand">Webcast</a>
            <!-- menu -->
            <nav>
                <a href="fullstack.html">FullStack</a>
                <a href="backend.html">Backend</a>
                <a href="frontend.html">Frontend</a>
                <a href="uxui.html">UX/UI</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
    </header>
    <div id="hero">
        Desarrollo Fullstack
    </div>
    <main>
        <h1>Desarrollo Backend</h1>

        <article id="donut">
            <img src="imgs/pie-chart-web.png">
            <h2>Lorem Ipsum</h2>
            <span id="cifraBig"> <?= $cifra1 ?> </span>
        </article>
        <!-- columna derecha -->
        <div>
            <article id="graph">

                <div>
                    lorem
                    <span class="pill"> <?= $p ?> </span>
                    <span class="cifraSmall"> <?= $cifra2 ?> </span>
                </div>
                <div>
                    lorem ipsum dolor
                    <span class="cifraSmall"> <?= $cifra3 ?> </span>
                </div>
                <img src="imgs/graph-web.png">

            </article>
            <article id="extra">

            </article>
        </div>
    </main>
    <footer>
        <!-- menu -->
        <nav>
            <a href="fullstack.html">FullStack</a>
            <a href="backend.html">Backend</a>
            <a href="frontend.html">Frontend</a>
            <a href="uxui.html">UX/UI</a>
            <a href="contacto.html">Contacto</a>
        </nav>
        <!-- redes sociales -->
        <a href="#">
            <img src="imgs/instagram.png">
        </a>
        <a href="#">
            <img src="imgs/twitter.png">
        </a>
        <a href="#">
            <img src="imgs/facebook.png">
        </a>
        <a href="#">
            <img src="imgs/reddit.png">
        </a>
        <a href="#">
            <img src="imgs/linkedin.png">
        </a>

    </footer>
</body>
</html>