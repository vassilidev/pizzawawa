<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mt-4">
                <img class="img-fluid p-4" src="<?= IMG_URL ?>404.svg" alt="">
                <p class="lead">La page demandée n'existe pas ou plus</p>
                <a href="<?= $router->generate('home') ?>">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    Retourner à l'accueil
                </a>
            </div>
        </div>
    </div>
</div>