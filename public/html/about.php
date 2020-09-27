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
                    <h1 class="hero__heading">Über Uns</h1>
                    <h3 class="hero__subheading">
                        Das sind Wir. <br> Jung und voller Innovation 
                    </h3>
                </section>
            </div>    



            <!-- about panels -->

            <div class="container container--small"> 
                <section class="about">
                    <!-- teaser Panel -->
                    <div class="about__panel panel panel--white">
                        <div class="panel__img--center"><img src="" alt="drei Flaschen"></div>
                    <p class="panel__text panel__text--gray">Drei Flaschen die bereit sind, zu tun was nötig ist, 
                            um das Leben Aller zu verbessern.</p>
                        
                    </div>
                    <!-- Philosophy Panel -->
                    <div class="about__panel panel panel--secondary">
                        <h2 class="panel__heading">Unsere <br> Philosophie </h2>
                        <p class="panel__text">"Mate will, dass alle Student*innen ihr
                            gesamtes Studium easy going über unsere App
                            managen."</p>
                    </div>

                    <!-- Revolution Panel -->
                    <div class="about__panel panel panel--secondary">
                        <div class="panel__image panel__image--center"><img src="" alt="Faust"></div>
                        <p class="panel__text">Dabei setzten wir auf eine pazifistische Revolution 
                            und fordern digitales Studium.</p>
                        
                    </div>
                </section>
            </div>  
            
            <!-- Code of Conduct -->
            <div class="container container--small">
                <section class="download">
                    <h1 class="download__heading">Code of Conduct</h1>
                    <h3 class="download__subheading">Dafür stehen wir in und auf!<br> Mate für die Welt.</h3>
                    <div>
                        <p>Hier steht dann ein <strong>Code of Conduct</strong></p>
                    </div>
                </section>
            </div>

            <!-- Team -->
            <div class="class container--small">
                <section class="team">
                    <h1 class="team__heading">Team</h1>
                    <h3 class="team__subheading">Für alle die es<br>interessiert.</h3>
                    <ul class="team__list">
                        <li class="team__item">
                            <img class="team__image" alt="Mathis" src="">
                            <p class="team__name">Mathis</p>
                            <p class="team__function">Founder</p>  
                        </li>
                        <li>
                            <img class="team__image" alt="Ramin" src="">
                            <p class="team__name">Ramin</p>
                            <p class="team__function">Founder</p>  
                        </li>
                            <li class="team__item">
                            <img class="team__image" alt="Tobias" src="">
                            <p class="team__name">Tobias</p>
                            <p class="team__function">Founder</p>  
                        </li>
                    </ul>
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>