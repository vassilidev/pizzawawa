<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="<?= $page->getDescription() ?>"/>
    <meta name="author" content="<?= $app->getAuthor() ?>"/>
    <title><?= $page->getTitle() ?></title>
    <link href="<?= CSS_URL ?>styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= CSS_URL ?>lity.min.css"/>
    <link rel="stylesheet" href="<?= CSS_URL ?>aos.css"/>
    <script data-search-pseudo-elements defer
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
            crossorigin="anonymous"></script>
</head>
<body>
<div id="layoutDefault">
    <div id="layoutDefault_content">
        <main>
            <nav class="navbar navbar-marketing navbar-expand-lg bg-black fixed-top navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="<?= URL ?>">
                        <img src="<?= IMG_URL ?>logo.png" class="img-fluid" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-pizza-slice text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mr-lg-5">
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="<?= $router->generate('home') ?>#presentation">
                                    Présentation <i class="fas fa-utensils"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $router->generate('menus') ?>">
                                    Menu <i class="fas fa-book-open"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $router->generate('home') ?>#informations">
                                    Informations <i class="fas fa-info-circle"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $router->generate('livraisons') ?>">
                                    Livraison <i class="fas fa-bicycle"></i>
                                </a>
                            </li>
                        </ul>
                        <a class="btn-red btn rounded-pill px-4 ml-lg-4" href="">
                            Réservez <i class="fas fa-concierge-bell fa-lg"></i>
                        </a>
                    </div>
                </div>
            </nav>
            <?= $page->getContent() ?>
        </main>
    </div>
    <div id="layoutDefault_footer">
        <footer class="footer pt-10 pb-5 mt-auto bg-black footer-dark">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <img src="<?= IMG_URL ?>logo.png" style="height: 5rem" class="img-fluid" alt=""/>
                        <p class="lead">Essayez l'effet wawa !</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-phone-alt"></i> 01 71 39 30 59
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-map-marker-alt"></i> 35 rue Saint Honoré 75001 Paris
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-at"></i> contact@pizzawawa.com
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-at"></i> resa@pizzawawa.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="text-uppercase-expanded text-xs mb-4">Réseaux</div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a class="icon-list-social-link" href="javascript:void(0);">
                                    <i class="fab fa-instagram text-pink fa-2x"></i>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="icon-list-social-link" href="javascript:void(0);">
                                    <i class="fab fa-facebook text-blue fa-2x"></i>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="icon-list-social-link" href="javascript:void(0);">
                                    <i class="fab fa-twitter text-cyan fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="text-uppercase-expanded text-xs mb-4">Liens</div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a href="#presentation">Présentation</a></li>
                            <li class="mb-2"><a href="javascript:void(0);">Menu</a></li>
                            <li class="mb-2"><a href="javascript:void(0);">Livraison</a></li>
                            <li class="mb-2"><a href="javascript:void(0);"
                                                class="btn btn-red btn-sm">Réservation</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <hr class="my-5"/>
                <div class="row align-items-center text-center">
                    <div class="col-md-4 small">Copyright &copy; Pizzawawa.com</div>
                    <div class="col-md-4 small">Made with <i class="text-pink fas fa-heart"></i> by <a href="">Vassili
                            Joffroy</a></div>
                    <div class="col-md-4 small">
                        <a href="javascript:void(0);">Mentions légales</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="<?= JS_URL ?>jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="<?= JS_URL ?>bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= JS_URL ?>scripts.js"></script>
<script src="<?= JS_URL ?>lity.min.js"></script>
<script src="<?= JS_URL ?>aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
