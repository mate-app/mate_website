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
                    <h1 class="hero__heading">Impressum</h1>
                    <h3 class="hero__subheding">
                        Du möchtest uns Kontaktieren
                        oder mehr über uns und unser Unternehmen erfahren?
                        Schreibe uns gerne eine E-Mail. 
                    </h3>
                </section>
            </div>

            <!-- site notice content -->

            <div class="container container--small">
                <section class="datagb">
                    <p class="datagb__text"><strong class="datagb__company">mate GmbH</strong> <br>Kirchhofalle 5 <br>24103 Kiel <br> Deutschland</p>
                    <p class="datagb__text">
                        Tel. <a class="datagb__link" href="tel: 4943190700390">+49 15141567833</a><br>
                        E-Mail: <a class="datagb__link" href="mailto: contact@mate-app.de">contact@mate-app.de</a>
                    </p>
                    <p class="datagb__text">Geschäftsführende Gesellschafter: <br> Mathis Fandré, Ramin Nobakht, Tobias Pörtner</p>
                    <p class="datagb__text">Amtsgericht Kiel, HRB 17855 KI <br> Umsatzsteuer-ID: DE306739068</p>
                    <p class="datagb__text">Verantwortlicher Ansprechpartner für diese Website: Mathis Fandré</p>
                    <p class="datagb__text">
                        Für anfragen bezüglich Datenschutz und Recht: <a class="datagb__link" href="mailto: contact@mate-app.de"></a>legal@mate-app.de</a> <br>
                        Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.
                    </p>
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>