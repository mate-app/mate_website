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
                    <h1 class="hero__heading">News</h1>
                    <h3 class="hero__subheding">
                        Das gibt es neues zu 
                        <br> deiner App. 
                    </h3>
                </section>
            </div>    

            <!-- News Panels -->
            <div class="container container--small">
                <section class="news">
                    <!-- 1. News Panel -->
                    <div class="news__panel panel--aqua">
                        <div class="news__block">
                            <h2 class="news__item"><strong>01</strong> &nbsp; Material</h2>
                            <img src="" alt="Ente" class="news__image">
                            <div class="news__item">
                                <p class="news__text">"Wäre Mate ein Tier, dann eine Ente" - </p>
                                <p>Wissenschaftler der Universität Stockholm 
                                    haben diese Erkenntnis kürzlich erlangt.</p>                
                            </div>
                        </div>
                    </div>

                    <!-- 2. News Panel -->
                    <div class="news__panel panel--aqua">
                        <div class="news__block">
                            <h2 class="news__item"><strong>Update</strong></h2>
                            <div class="news__text">
                                <p class="news__text">30.05.2020</p>
                                <p>Platzhaltertext asdf</p>
                                <p>Platzhaltertext vbnm</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3. News Panel -->
                    <div class="news__panel panel--black">
                        <img src="" alt="Smartphone with BLM content" class="news__image">
                        <div class="news__block">
                            <h2 class="news__item">#blacklivesmatter</h2>
                            <div class="news__text">
                                <p class="news__text">30.05.2020</p>
                                <p>Platzhaltertext asdf</p>
                                <p>Platzhaltertext vbnm</p>
                                    <div class="news__item">
                                        <a href="#" class="news__tag">
                                            <span class="news__dot"></span>
                                            <div class="news__text">mehr dazu</div>
                                        </a>                
                                    </div>
                            </div>
                        </div>   
                    </div>
                    
                </section>

                <!-- read more -->
                <section class="news">
                    <div class="news__text">
                        <a class="news__linktext" href="#">mehr News anzeigen</a>
                    </div>
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>