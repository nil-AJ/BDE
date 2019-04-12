
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Administration BDE</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <?php
                echo "<a  href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"active-a dropdown-toggle\"><i class=\"fas ico-adm fa-user\"></i> " . $_SESSION['user_info']['prename'] . " " . $_SESSION['user_info']['name'] . "</a>";
                ?>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="?section=deconnexion"><i class="fas ico-adm  fa-sign-out-alt"></i> Déconection </a>
                    </li>
                    <li>
                        <a href="#"><i class="fas ico-adm fa-cog"></i> Profil</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="far ico-adm  fa-calendar-alt"></i> Calandrier</a>
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



    .ico-adm{
        margin-right: 12px;
        margin-left: 4px;r
    }

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
        background: #2c2f33;
        color: white;
        transition: all 0.3s;
    }


    #sidebar .sidebar-header{
        margin-top: 27%;
        padding: 20px;
        background: #23272a;
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
    .active-a a:hover
    {
        color: white;
        background: #1C1F21;
    }
    #sidebar ul li a:hover {
        color: white;
        background: #23272a;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: white;
        background: #23272a;
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
        background: #313538;
    }



</style>