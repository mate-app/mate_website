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
                    <h1 class="hero__heading">Datenschutz</h1>
                    <h3 class="hero__subheding">
                        Unserer Überzeugung nach hat Datenschutz einen sehr hohen Stellenwert. Demnach gehen wir nach bestem Gewissen in diesen Belangen vor, was für uns bedeutet: höchste Datenschutz Standards, umfassende Transparenz und alles nach deinem Willen.
                    </h3>
                </section>
            </div>

            <!-- site notice content -->

            <div class="container container--small">
                <section class="privacy">
                    <h3 class="privacy__heading">Datenschutzerklärung</h3>
                    <p class="privacy__text">
                    Hier folgt eine super sichere Datenschutzerklärung
                    </p>
                    
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>