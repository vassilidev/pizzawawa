<header class="page-header page-header-dark bg-img-cover overlay"
        style='background-image: url("https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,g_auto:subject,q_auto,f_auto/restaurant/1d057d45-82b6-4a6f-8f6e-909717baa700/82fec2d8-3403-40e0-9408-ec1223988305.jpg")'>
    <div class="page-header-content py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <div data-aos="fade-up">
                        <p class="page-header-title">Antipasti, pizze, dolci e basta cosi !</p>
                        <p class="page-header-text">Restaurant italien au coeur de Paris.</p>
                    </div>
                    <a href="#presentation" class="btn btn-marketing rounded-pill btn-green" data-aos="fade-up"
                       data-aos-delay="100">
                        Découvrir <i class="fas fa-arrow-down fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
             fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
        </svg>
    </div>
</header>
<section id="presentation" class="bg-white pt-2">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= IMG_URL ?>midi.jpg" alt="...">
                    <div class="card-body">
                        <h4 class="card-title mb-2">Menu wawaceleration</h4>
                        <p class="card-text">Rapide, simple, léger et faible teneur en calories !</p>
                    </div>
                    <a href="<?= $router->generate('menus') ?>#menu-wawaceleration">
                        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                            <div class="small text-green">Découvrir le menu</div>
                            <div class="small text-green">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 aos-animate" data-aos="fade-left">
                    <img class="card-img-top" src="<?= IMG_URL ?>degustation.jpg" alt="...">
                    <div class="card-body">
                        <h4 class="card-title mb-2">Formule dégustation</h4>
                        <p class="card-text">Cette formule s'adresse aux groupes de plus de 8 personnes afin de proposer
                            un voyage initiatique dans l'univers singulier de Pizzawawa.</p>
                    </div>
                    <a href="<?= $router->generate('menus') ?>#formule-degustation">
                        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
                            <div class="small text-green">Découvrir le menu</div>
                            <div class="small text-green">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="informations" class="bg-light py-10">
    <div class="container">
        <div class="text-center py-2">
            <p class="display-4">Informations</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.2173814150086!2d2.345433839760385!3d48.86069834888955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f4fa9fd6b%3A0xbdc536cbed6af7eb!2sPizza%20Wawa!5e0!3m2!1sfr!2sfr!4v1603629656106!5m2!1sfr!2sfr"
                width="100%" height="500px" frameborder="0" style="border:0"></iframe>
        <hr>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <a class="card card-link border-top border-top-lg border-green lift text-center o-visible h-100"
                   href="#!">
                    <div class="card-body">
                        <div class="icon-stack icon-stack-xl bg-green text-white mb-4 mt-n5 z-1 shadow">
                            <i class="fas fa-glass-cheers"></i>
                        </div>
                        <h5>Privatisation</h5>
                    </div>
                    <div class="card-footer">
                        <div class="text-green font-weight-bold d-inline-flex align-items-center">
                            Remplir le formulaire
                            <i class="fas fa-arrow-right text-xs ml-1"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5">
                <a class="card card-link border-top border-top-lg border-red lift text-center o-visible h-100"
                   href="#!">
                    <div class="card-body">
                        <div class="icon-stack icon-stack-xl bg-red text-white mb-4 mt-n5 z-1 shadow">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <h5>Réservation</h5>
                    </div>
                    <div class="card-footer">
                        <div class="text-red font-weight-bold d-inline-flex align-items-center">
                            Remplir le formulaire
                            <i class="fas fa-arrow-right text-xs ml-1"></i></div>
                    </div>
                </a>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Vous ne trouvez pas la réponse dont vous avez besoin?</h2>
                <p class="lead mb-5">Contactez-nous et nous vous répondrons dans les plus brefs délais.</p>
            </div>
        </div>
        <div class="row align-items-center mb-10">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <div class="section-preheading">Par message</div>
                <a href="#!">Commencez la conversation</a>
            </div>
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <div class="section-preheading">Par téléphone</div>
                <a href="tel:0171393059"><i class="fas fa-phone-alt"></i> 01 71 39 30 59</a>
            </div>
            <div class="col-lg-4 text-center">
                <div class="section-preheading">Par mail</div>
                <a href="mailto:contact@pizzawawa.com">contact@pizzawawa.com</a>
            </div>
        </div>
    </div>
    <div class="svg-border-rounded text-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
             fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
        </svg>
    </div>


</section>

