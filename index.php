<!DOCTYPE html>
<?php

require_once 'database/config_database.php';
?>

<html>

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles/main.css">
    <title>Arcadia</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-white bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand custom-nav-link" href="/">Arcadia, le zoo écolo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/services">Les services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/habitats">Les habitats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/connexion">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    <main id="main-page">
        <!--contenu de la page-->
    </main>
    <footer class="bg-primary text-white text-center footer">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h3 class="text-white">Nos horaires</h3>
                <p>Tous les jours</p>
                <p>10:00-20:00</p>
            </div>
            <div class="col-6 col-lg-4">
                <p>Arcadia <br />
                    18 rue de la réussite <br />
                    31150 Brocéliande <br />
                    05 33 33 33 33 <br />
                </p>
            </div>
            <div class="col-6 col-lg-4">
                <p>ECF - Studi - Graduate developper Flutter 2023/2029</p>
            </div>
        </div>
    </footer>
    <script type="module" src="Router/router.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
