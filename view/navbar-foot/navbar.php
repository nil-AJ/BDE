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
        <link href="public/lib/fontawesome/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="public/lib/bootstrap/dist/css/bootstrap.min.css"  rel="stylesheet" >
        <?php include 'public/css/membre_style.css';?>
    </head>
    <body>
        <nav>
            <div class="fixed-top navbar">
                <div class="navbar__wrapper">
                    <nav class="navbar__menu">
                        <a class="navbar__brand" href="index.php"><img
                                    src="public/image/logo/BDE_CFA_INSTA/unnamed.png"> BDE CFA INSTA</a>
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                            <ul class="navbar__nav">
                                <li class="navbar__link after-transform"><a href=".">Home</a></li>
                                <li class="navbar__link after-transform sub-dropdown">
                                    <a href="">Association <i class="fas fa-angle-down"></i></a>
                                    <ul class="ul-dropdown">
                                        <li class="navbar__link after-transform"><a href="?section=membre">Membre</a></li>
                                        <li class="navbar__link after-transform"><a href="?section=logo">Logo</a></li>
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
                    <div class="navbar-responsive">
                        <ul class="navbar-responsive__nav ">
                            <li class="navbar-responsive__link after-transform"><a href="/index.php">Home</a></li>
                            <li class="navbar-responsive__link after-transform">
                                <a onclick="afficherMasquer(1)" style="cursor:pointer; color: white">Association <i class="fas fa-angle-down"></i></a>
                                    <ul class="ul-dropdown-responsive" id="1" style="display: none">
                                        <li class="navbar-responsive__link after-transform"><a href="?section=membre">Membre</a></li>
                                        <li class="navbar-responsive__link after-transform"><a href="?section=logo">Logo</a></li>
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



