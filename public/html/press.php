<?php include '../config/config.php';?>

<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="utf-8">
        <title><?=$TITLE?></title>

        <!-- SEO Meta -->
        <meta name="robots" content="index, follow">

        <meta name="og:site_name" content="Mate App">
        <meta name="og:locale" content="de_DE">
        <meta name="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@officialmateapp">

        <!-- other Meta-->
        <meta name="author" content="Mathis Fandre; Ramin Nobakht; Tobias Poertner">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- FavIcon -->

        <!-- Styles -->
        <link rel="stylesheet" href="../css/main.css" media="screen">
	</head>
	<body>

        <?php include 'common/header.php';?>


        <main>
            <div class="container container--small">
                <section class="hero hero--nocontent">
                    <h1 class="hero__heading">Presse</h1>
                    <h3 class="hero__subheading">
                        Guidelines zur Vorbereitung <br> auf den Medialen Impuls.
                    </h3>
                </section>
            </div>

            <!-- press panels -->

            <div class="container container--small">
                <section class="guidelines">
                    <!-- 01 Material Panel -->
                    <div class="panel guidelines__panel panel--primary">
                        <h2 class="panel__heading"><strong>01</strong> &nbsp; Material</h2>
                        <p class="panel__text">Achte bei der Nutzung unseres Logos oder 
                            anderer vom Mate Team erstellten Materialien auf die 
                            unveränderte Verwendung der von uns, als frei 
                            verfügbaren gestellten Materialien, im richtigen 
                            Kontext.</p>
                    </div>

                    <!-- 02 Wordmarke Panel -->
                    <div class="panel guidelines__panel panel--secondary">
                        <h2 class="panel__heading"><strong>02</strong> &nbsp; Wordmarke</h2>
                        <p class="pannel__text">Achte bei der Nutzung unseres Logos oder 
                            anderer vom Mate Team erstellten Materialien auf die 
                            unveränderte Verwendung der von uns, als frei 
                            verfügbaren gestellten Materialien, im richtigen 
                            Kontext.</p>
                    </div>

                    <!-- 03 Kontakt Panel -->
                    <div class="panel guidelines__panel panel--tertiary">
                        <h2 class="panel__heading"><strong>03</strong> &nbsp; Kontakt</h2>
                        <p class="panel__text">Um es ganz einfach zu machen:
                            Wenn du mit Mate arbeiten möchtest schreib uns,
                            oder lies in der ausführlichen Dokumentation nach.
                            Wir freuen uns über dein Interesse!</p>
                    </div>
                </section>
            </div>  
            
            <!-- Presse Downloads -->
            <div class="container container--small">
                <section class="download">
                    <h1 class="download__heading">Download</h1>
                    <h3 class="download__subheading">Das ganze Pressekit mit <br> einem Klick.</h3>
                    <a class="download__button btn">Herunterladen</a>
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>