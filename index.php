<!DOCTYPE html>
<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="front-end/style/style-index.css">
    <link rel="stylesheet" media="handheld, only screen and (max-device-width: 480px)" type="text/css" href="front-end/style/mobile_index.css" />
    <title>FlyLens</title>
</header>
<body>
    <head>

    </head>
    <div class="main">
        <div class="page-intro">
            <div class="container-fluid to_hide_on_mobile">
                <div class="row nav-container">
                    <div class="col-2 nav-btn">
                        
                    </div>
                    <div class="col-1 nav-btn">
                        <a href=".">FlyLens</a>
                    </div>
                    <div class="col-1 nav-btn">
                        
                    </div>
                    <div class="col-1 nav-btn to_hide_on_mobile">
                        <a href="#_contact">Contact</a>
                    </div>
                    <div class="col-1 nav-btn to_hide_on_mobile">
                        <a href="front-end/page/admin.php"><span style="background-color: #3162cc; color: #ffffff; padding: 4px; border-radius: 5px;">beta</span> admin</a>    
                    </div>
                    <div class="col-1 nav-btn to_hide_on_mobile">
                        doc
                    </div>
                    <div class="col-1 nav-btn">
                        
                    </div>
                    <div class="col-1 nav-btn">
                        <a href="#_contact">Login</a>
                    </div>
                    <div class="col-2 nav-btn">
                        <div class="btn_burger">
                            ///
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 intro-left-container">
                        <div class="intro-text">
                            <span class="intro-title">Laissez FlyLens <span style="color: #6bd181;">observer</span> pour vous</span><br>
                            <span class="intro-subtitle">Votre drone intelligent et autonome qui vous fourni en temps reél tout les donnée de santé de vos cultures.</span><br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="intro-btn betatest-btn">
                                                <span>Beta test</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="intro-btn contact-btn">
                                                <span>contactez nous</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 intro-right-container">
                        <div class="intro-img">
                            <img src="ressources/img/city.svg" alt="city.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-discover-container">
                <a href="#_contact">
                    <div class="btn_discover">
                        <span class="">decouvrir</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="page-second to_hide_on_mobile">
            <div class="secondpage-title-container to_hide_on_mobile">
                <span class="secondpage-title to_hide_on_mobile">Redonnez de la couleur à vos cultures !</span>
            </div>
        </div>
        <div id="_contact" class="page-third">
            <div class="container-fluid">
                <div class="row">
                    <div class="contact-left-container">
                        <div class="contact-left-c">
                            <div class="contact-left-title-container">
                                <span class="contact-left-title">Prenez contact !</span>
                            </div>
                            <div class="contact-left-text-container">
                                <span class="contact-left-text">
                                    Notre prise de d'information est totalement sécurisé. Nous ne transmetterons jamais aucune information tel que votre email ou votre nom. Cela est simplement transmit au responsable de votre dossier a des fin de personnalisation de retour
                                </span>
                            </div>
                            <div class="form_container">
                                <form action="mailto:flylens-contact@gmail.com" method="post" enctype="text/plain">
                                    <span class="form-txt">
                                        Name
                                    </span>    
                                    <input class="form-control nameemail_input" type="text" name="name" placeholder="Thomas Jeferson"><br>
                                    <span class="form-txt">
                                        Email
                                    </span> 
                                    <input class="form-control nameemail_input" type="email" name="mail" placeholder="thoms.jerferson@exemple.com"><br>
                                    <span class="form-txt">
                                        Your comment
                                    </span> 
                                    <textarea class="form-control comment_input" type="text" rows="5" name="comment" placeholder="Your comment"></textarea><br><br>
                                    <input class="btn-send" type="submit" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
