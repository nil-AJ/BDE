<section class="app">
    <aside class="sidebar">
        <div class="debut-menu ">
            <div class="ico-prof">
                <i class="fas fa-3x fa-user-circle"></i>
            </div>
            <nav class="nav ">
                <ul class="  nav-prof">
                    <li class="" id="dropdown">
                        <div class='colo-aps-prof'>
                            <?php
                            echo "<a  data-toggle=\"collapse\" href=\"#about1\" >" . $_SESSION['user_info']['prename'] . " " . $_SESSION['user_info']['name'] . "<i  class=\"fas ico fa-angle-down\"></i></a>";
                            ?>
                        </div>
                        <div id="about1" class=" collapse">
                            <ul class="list">
                                <li><a class="dropdown-item button-deco" href="?section=deconnexion">DECONNEXION</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="nav">
            <ul class="  nav-adm">
                <li class="" id="dropdown">
                    <div id="about1" class=" collapse">
                        <ul class="list">
                            <li><a class="dropdown-item button-deco" href="?section=deconnexion">DECONNEXION</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Profil</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class=" nav-adm  ">
                <li class="" id="dropdown">
                    <div class="colo-aps">
                        <a data-toggle="collapse" href="#about2">
                            Dropdown <i class="fas ico fa-angle-down"></i>
                        </a>
                    </div>
                    <div id="about2" class="collapse">
                        <ul class="list">
                            <li><a class="dropdown-item button-deco" href="">DECONNEXION</a></li>
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="nav-adm">
                <li class="" id="dropdown">
                    <div class="colo-aps">
                        <a data-toggle="collapse" href="#about3">
                            Dropdown <i class="fas ico fa-angle-down"></i>
                        </a>
                    </div>
                    <div id="about3" class="collapse">
                        <ul class="list">
                            <li><a class="dropdown-item button-deco" href="">DECONNEXION</a></li>
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>


    </aside>
</section>


<style>
    .nav-prof, .nav-adm {
        padding-left: 0px;
    }

    }
    .ico-prof {
        margin-left: 8%;
    }

    .debut-menu {
        background-color: blue;
        padding-top: 45%;
    }

    .app {
        position: absolute;
        height: 100vh;
    }

    .app {
        position: fixed;
    }

    .ico {
    }

    #dropdown {
        padding: 0px 0px 0px 140px;
    }

    #dropdown:hover {
        background-color: #ddd;
    }

    /* -------------
    Sidebar
    ----------------*/
    .sidebar {

        border-width: 0px 1px 0px 0px;
        border-style: solid;
        border-color: #DCDCDC;
        position: absolute;
        width: 15em;
        height: 100%;
        background-color: #F6F6F6;
        -webkit-transform: translateZ(0);
        visibility: visible;
        -webkit-backface-visibility: hidden;
    }

    /* -------------
    Sidebar Nav
    ----------------*/

    .colo-aps a {
        overflow: hidden;
        width: 100%;
        height: 5%;
        color: #333;
        text-align: center;
        text-decoration: none;
        font-size: 17px;
    }

    .colo-aps a:hover {
        /*background-color: #ddd;*/

    }

    .colo-aps a:active {
        /*background-color: #ddd;*/
    }

    .list {
        list-style-type: none;
        overflow: hidden;
        width: 100%;
        height: 5%;
        color: #333;
        text-align: center;
        text-decoration: none;
        font-size: 17px;
    }

    .list :hover {
        background-color: #ddd;
    }


    .nav-adm {
        list-style-type: none;
    }

    .nav-prof {
        list-style-type: none;
        color: black;
        margin-top: 10%
    }


</style>