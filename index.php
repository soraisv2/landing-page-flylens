<!DOCTYPE html>
<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="front-end/style/style-index.css">
    <link rel="stylesheet" media="handheld, only screen and (max-device-width: 480px)" type="text/css" href="front-end/style/mobile_index.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>FlyLens</title>
</header>
<body>
    <script src="motion.js">
            responsiveChecker();
    </script>
        <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
    <script>
    </script>
    <div id="_BTNUP" class="btn-up-container">
        <a href="#_home"><div id="_btn_pageup" class="btn-pageup" 
            onmouseover="classSwitcher('_btn_pageup', 'animation-btn-pageup-hover', 'animation-btn-pageup-unhover')" 
            onmouseout="classSwitcher('_btn_pageup', 'animation-btn-pageup-unhover', 'animation-btn-pageup-hover')">
            UP</div>
        </a>
    </div>
    <head>
    </head>
    <div class="main">
        <div id="_home" class="page-intro">
            <div class="container-fluid to_hide_on_mobile">
                <div class="row nav-container">
                    <div class="col-1 nav-btn">
                        
                    </div>
                    <div class="col-1 nav-btn">
                        
                    </div>
                    <a class="col-1" href=".">
                        <div class="nav-btn" style="color: #6bd181;">
                            FlyLens
                        </div>
                    </a>
                    <div class="col-1 nav-btn">
                        
                    </div>
                    <div class="col-1 nav-btn to_hide_on_mobile">
                        
                    </div>
                    <a class="col-1" href="#_contact">
                        <div class=" nav-btn to_hide_on_mobile">
                            Contact
                        </div>
                    </a>
                    <a class="col-1" href="#_project">
                        <div class="nav-btn">
                            Projet
                        </div>
                    </a>
                    <a class="col-1" href="#">
                        <div class=" nav-btn">
                            Equipe
                        </div>
                    </a>
                    <div class="col-1 nav-btn">
                        <div class="btn_burger">
                            ///
                        </div>
                    </div>
                    <a class="col-1" href="#">
                        <div class=" nav-btn">
                            Connection
                        </div>
                    </a>
                    <div class="col-1 nav-btn" id="google_translate_element">
                        
                    </div>
                    <div class="col-1 nav-btn">
                        <a href="#_contact">EN</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 intro-left-container">
                        <div class="intro-text">
                            <span class="intro-title">Vos cultures <span style="color: #6bd181;">analys??es</span> en permanence</span><br>
                            <span class="intro-subtitle">Votre drone intelligent et autonome qui vous fournit en temps r??el toutes les donn??es de sant?? de vos cultures.</span><br>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#_contact">
                                        <div id="_intro_btn1" class="intro-btn contact-btn" 
                                            onmouseover="classSwitcher('_intro_btn1', 'animation-btn-intro-contact-over', 'animation-btn-intro-contact-unover')"
                                            onmouseout="classSwitcher('_intro_btn1', 'animation-btn-intro-contact-unover', 'animation-btn-intro-contact-over')"
                                            >
                                            <span>Contactez nous</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#_project">
                                        <div class="intro-btn project-btn">
                                            <span>Notre projet</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-lg-6 intro-right-container">
                        <div class="intro-img">
                            <img src="ressources/img/city.svg" alt="city.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-second to_hide_on_mobile">
            <div class="secondpage-title-container to_hide_on_mobile">
                <span class="secondpage-title to_hide_on_mobile">Redonnez de la couleur ?? vos cultures !</span>
            </div>
        </div>
        <div id="_project" class="page-third">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="project-img-container">

                        </div>
                    </div>
                    <div class="col-lg-6 project-text-container">
                        <div class="project-text">
                            <span class="project-title">FlyLens, Le future de l'agriculture</span><br>
                            <div style="text-align: justify;">
                                <span class="project-text">
                                    Dr-Healer est un drone de surveillance des cultures enti??rement automatis??. Il se charge lui-m??me, vous transmet les donn??es sur la sant?? des cultures en temps r??el, et sait comment lacer ses chaussures.Il a une autonomie de 1 heure, ce qui lui permet de couvrir une douzaine d'hectares ?? pleine batterie. Equip?? d'une simple cam??ra, il pourra vous donner en temps r??el toutes les statistiques dont vous avez besoin. Temp??rature du sol, hydrom??trie approximative, aspect visuel de chaque plan.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="_contact" class="page-four">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-0 col-lg-2 col-xl-3"></div>
                    <div class="col-12 cl-lg-8 col-xl-6">
                        <div class="contact-title-container">
                            <span>Prenez contact !</span>
                        </div>
                        <div class="contact-text-container">
                            <span>Nous ne sauvegardons aucune donn??e perosnnel.</span>
                        </div>
                        <div class="form_container">
                            <form action="mailto:flylens-contact@gmail.com" method="post" enctype="text/plain">
                                <span class="form-txt">
                                    Name
                                </span>
                                <input class="form-control nameemail_input" type="text" name="name" placeholder="Thomas Jeferson">
                                <span class="form-txt">
                                    Email
                                </span>
                                <input class="form-control nameemail_input" type="email" name="mail" placeholder="thoms.jerferson@exemple.com">
                                <span class="form-txt">
                                    Your comment
                                </span>
                                <textarea class="form-control comment_input" type="text" rows="5" name="comment" placeholder="Your comment"></textarea><br><br>
                                <form action="?" method="POST">
                                    <div class="g-recaptcha" data-sitekey="6LfQhQEdAAAAAHjizBolQSHU60Cg3viTel0HQ_7t"></div>
                                    <br/>
                                </form>
                                <input class="btn-send" type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                    <div class="col-0 col-lg-2 col-xl-3"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
