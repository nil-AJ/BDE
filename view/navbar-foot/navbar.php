<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--  meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--  title -->
        <title>BDE CFA INSTA</title>
        <!-- CSS -->
        <link href="public/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="public/image/logo/BDE_CFA_INSTA/favicon/favicon.ico"
            type="public/image/logo/BDE_CFA_INSTA/favicon/favicon.ico">
        <!-- font-Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link href="public/lib/bootstrap/dist/css/bootstrap.min.css"  rel="stylesheet" >

    <!--
        FullCalendar CSS/JS
        ===================
        @ Author : Antoine
        #   Please Don't move the script/css order and position on the page.
            See https://fullcalendar.io/docs/installation
            and bug : https://stackoverflow.com/questions/50289327/fullcalendar-cannot-read-property-fn-of-undefined
        #   The import for JQuery is here not in foot.php, d'ont add link for JQuery can be create conflict with FullCalendar.
    -->
        <link href="public/template/fullcalendar/fullcalendar.min.css" rel="stylesheet">
        <link href="public/template/fullcalendar/fullcalendar.print.css"  rel="stylesheet" media="print">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src='public/template/fullcalendar/lib/moment.min.js'></script>
        <script src="public/template/fullcalendar/fullcalendar.min.js" ></script>
        <script src='public/template/fullcalendar/locale/fr.js'></script>
        <script type='text/javascript' src='public/template/fullcalendar/gcal.js'></script>
        <!-- calandar form -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    </head>
    <body>
        <nav>
            <div class="fixed-top navbar">
                <div class="navbar__wrapper">
                    <nav class="navbar__menu">
                        <a class="navbar__brand" href="index.php"><img
                                    src="public/image/logo/BDE_CFA_INSTA/logo_BDE_CFA_INSTA-noir.png"> BDE CFA INSTA</a>
                        <!--  NAVBAR MOBIL -->
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- END NAVBAR MOBIL -->
                            <ul class="navbar__nav">
                                <li class="navbar__link after-transform"><a href=".">Home</a></li>
                                <li class="navbar__link after-transform sub-dropdown">
                                    <a href="">Association <i class="fas fa-angle-down"></i></a>
                                    <ul class="ul-dropdown">
                                        <li class="navbar__link after-transform"><a href="?section=membre">Membre</a></li>
                                        <li class="navbar__link after-transform"><a href="?section=partenariat">Partenariat</a></li>
                                    </ul>
                                </li>
                                <li class="navbar__link after-transform"><a href="?section=calendrier">Calendrier</a>
                                </li>
                                <li class="navbar__link after-transform"><a href="?section=news">News</a></li>
                                <li class="navbar__link after-transform"><a href="?section=media">Media</a></li>
                            </ul>
                        </nav>
                    </div>
                <!--  NAVBAR MOBIL -->
                <div class="navbar-responsive" >
                        <ul class="navbar-responsive__nav ">
                            <li class="navbar-responsive__link after-transform"><a href="/index.php">Home</a></li>
                            <li class="navbar-responsive__link after-transform">
                                <a onclick="afficherMasquer(1)" style="cursor:pointer; color: white">Association <i class="fas fa-angle-down"></i></a>
                                    <ul class="ul-dropdown-responsive" id="1" style="display: none">
                                        <li class="navbar-responsive__link after-transform"><a href="?section=membre">Membre</a></li>
                                        <li class="navbar-responsive__link after-transform"><a href="?section=partenariat">Partenariat</a></li>
                                    </ul>
                            </li>
                            <li class="navbar-responsive__link after-transform"><a href="?section=calendrier">Calendar</a>
                            </li>
                            <li class="navbar-responsive__link after-transform"><a href="?section=news">News</a></li>
                            <li class="navbar-responsive__link after-transform"><a href="?section=media">Media</a></li>
                        </ul>
                    </div>
        </nav>



