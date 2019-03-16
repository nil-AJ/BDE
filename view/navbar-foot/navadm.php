
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Administration BDE</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <?php
                echo "<a  href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">" . $_SESSION['user_info']['prename'] . " " . $_SESSION['user_info']['name'] . "</a>";
                ?>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="?section=deconnexion">Déconection <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"> Modifier sont profil</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="far fa-calendar-alt"></i> Calandrier</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">page1</a>
                    </li>
                    <li>
                        <a href="#">page2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
        </ul>


    </nav>
</div>




<style>

    .wrapper a,
    .wrapper a:hover,
    .wrapper a:focus{
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }
    .wrapper {
        height: 100%;
        position: fixed;
        display: flex;
        width: 100%;
        align-items: stretch;
    }
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #F5F5F5;
        color: black;
        transition: all 0.3s;
    }


    #sidebar .sidebar-header{
        margin-top: 27%;
        padding: 20px;
        background: #D3D3D3;
    }
    #sidebar ul.components{
        border-bottom: 1px solid #DCDCDC;
    }

    #sidebar ul p{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }
    #sidebar ul li a:hover {
        color: black;
        background: #DCDCDC;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: black;
        background: #DCDCDC;
    }
    a[data-toggle="collapse"] {
        position: relative;
    }
    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    .wrapper ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #EFEFEF;
    }



    .wrapper ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }



</style>