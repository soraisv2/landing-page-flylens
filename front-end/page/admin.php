<!DOCTYPE html>
<html>
<header>
    <link rel="icon" href="ressources/img/logo.png">
    <title>Dr-Healer</title>
    <link rel="stylesheet" type="text/css" href="../style/style-admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</header>
<body>
    <head>
    </head>
    <script src="../../motion.js"></script>
    <div class="main">
        <div class="main-left-container">
            <div class="dash-title-container">
                <span class="dash-title">dr-healer</span>
            </div>
            <div class="dash-part1-title-container">
                <span class="dash-part1-title">dashboard</span>
            </div>
            <div class="dash-subtitle-container"><span class="dash-part1-subtitle">apps</span></div>
            <div class="dash-menu-container">   
                <div class="UI-box-menu" onclick="page_switcher(1)">
                    Home
                </div>
                <div class="UI-box-menu" onclick="page_switcher(2)">
                    Analytics
                </div>
                <div class="UI-box-menu" onclick="page_switcher(3)">
                    Your Drones
                </div>
                <div class="UI-box-menu" onclick="page_switcher(4)">
                    Crops
                </div>
                <div class="UI-box-menu" onclick="page_switcher(5)">
                    Widget
                </div>
                <div class="UI-box-menu" onclick="page_switcher(6)">
                    Message
                </div>
                <div class="UI-box-menu" onclick="page_switcher(7)">
                    Advising
                </div>
                <div class="UI-box-menu" onclick="page_switcher(8)">
                    shop
                </div>
                <div class="UI-box-menu" onclick="page_switcher(9)">
                    Profil
                </div>
            </div>
            <div class="dash-subtitle-container"><span class="dash-part1-subtitle">Support</span></div>
            <div class="dash-menu-container">   
                <div class="UI-box-menu">
                    contact us
                </div>
                <div class="UI-box-menu">
                    Advising
                </div>
                <div class="UI-box-menu">
                    Help
                </div>
            </div>
        </div>
        <div class="main-right-container">
            <div id="PAGE1" class="adm-pages home-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="PAGE2" class="adm-pages analytics-page">
                <div class="container-fluid">
                    <div class="row mynav">
                        <div class="col-1">
                            <img src="" alt="" width="50" height="50">
                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-2">

                        </div>
                        <div class="col-2">
                            <div class="nav-btn-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row dash-home-container">
                        <div class="col-lg-3 dash-h-c">
                            <div class="UI-home-dash-box">
                                <div class="dash-box-title-container">
                                    <span class="dash-box-title">Warning</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 dash-h-c">
                            <div class="UI-home-dash-box">
                                <div class="dash-box-title-container">
                                    <span class="dash-box-title">L'hydrique</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row dash-home-container">
                        <div class="col-lg-12 dash-h-c2">
                            <div class="UI-home-dash-box">
                                <div class="dash-box-title-container">
                                    <span class="dash-box-title">Santé</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row dash-home-container">
                        <div class="col-lg-7 dash-h-c">
                            <div class="UI-home-dash-box">
                                <div class="dash-box-title-container">
                                    <span class="dash-box-title">Thérmique</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 dash-h-c">
                            <div class="UI-home-dash-box">
                                <div class="dash-box-title-container">
                                    <span class="dash-box-title">Conseil</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="PAGE3" class="adm-pages yourdrones-page">
                        <div class="container-fluid">
                            <div class="row mynav">
                                <div class="col-1">
                                    <img src="" alt="" width="50" height="50">
                                </div>
                                <div class="col-3">

                                </div>
                                <div class="col-4">

                                </div>
                                <div class="col-2">

                                </div>
                                <div class="col-2">
                                    <div class="nav-btn-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row dash-yourdrone-container">
                                <div class="col-3 dash-yd-c">
                                    <div class="UI-home-dash-box">
                                        <div class="dash-box-title-container-dronelist">
                                            <span class="dash-box-title">Liste of drone</span>
                                        </div>
                                        <div class="dronelist-container">
                                            <div class="UI-box-drone-list">
                                                <span class="drone-id">Drone <span style="color: #6bd181;">#1</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 dash-yd-c">
                                    <div class="UI-home-dash-box">
                                        <div class="dash-box-title-container">
                                            <span class="dash-box-title">Activity</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
        </div>
    </div>
</body>
</html>