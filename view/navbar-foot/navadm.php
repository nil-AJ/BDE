
    <nav class="nav-adm">
        <div class="conx-deco text-center">
            <div>
                <i class="fas fa-5x fa-user-circle"></i>
                <?php
                echo "<h5 style='margin-top: 12px'><strong>" . $_SESSION['user_info'][1] . " " . $_SESSION['user_info'][2] . "</strong></h5><br>";
                ?>
                <a class="button-deco" href="?section=deconnexion">DECONNEXION</a>
            </div>


        </div>
    </nav>


    <style>
        .button-deco {

            background-color: transparent; /* Green */
            border: 3px solid white;
            color: white;
            padding: 10px 22px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;

            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button-deco:hover {
            background: #808080;
            border: 3px solid #808080;
        }


        .nav-adm {
            box-shadow: 0px 10px 0px rgba(0, 0, 0, 0.35);
            background: linear-gradient(#4D4D4D, #414242, #3A3B3A, #303131, #2C2C2C, #252525);
            height: 100%;
            position: absolute;
            width: 15%;
            color: white;
        }

        .nav-adm {
            position: fixed;
        }

        .conx-deco {
            margin-top: 35%;
        }


    </style>