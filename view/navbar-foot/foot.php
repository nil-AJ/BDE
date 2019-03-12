<footer>


    <div class="footer-haut ">
        <hr>
        <div class="container-fluid">
            <div class="row ">
                <div class="menu-foot ">
                    <h4 class="titre">Nous rejoindre:</h4>
                    <div class="">
                        <ul class="social">
                            <li class="facebook">
                                <a class="icon" href="https://www.facebook.com/bdeinsta/">
                                    <i style="color: white" class="fab fa-3x fa-facebook"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a class="icon" href="https://www.instagram.com/bde.cfa.insta/?hl=fr">
                                    <i style="color: white" class="fab fa-3x fa-instagram"></i>
                                </a>
                            </li>
                            <li class="discord">
                                <a class="icon" href="https://discord.gg/vJ9c3Br">
                                    <i style="color: white" class="fab fa-3x fa-discord"></i>
                                </a>
                            </li>
                            <li class="mail">
                                <a class="icon-mail" href="mailto:bde@cfa-insta.fr">
                                    <i style="color: white" class="fas fa-3x fa-envelope"></i>
                                </a>
                            </li>
                            <li class="phone">
                                <a class="icon-phone" href="">
                                    <i style="color: white" class="fas fa-2x fa-phone"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="logo-text-foot align-self-end mobil-no">
                <h5>Notre école</h5>
                <a href="http://www.cfa-insta.fr/"><img  class="logo-foot" src="public/image/logo/CFA_INSTA/cfainsta_new-logo.png"></a>

            </div>
            </div>
        </div>
    </div>
    <div class="footer-bas ">
        <div class="container-fluid">
            <div  class="row justify-content-center no-gutters">
                <div  class="foot-text-center col-12 col-sm-9 col-md-9">
                    <p class="text-footer"> ©2018 BDE CFA INSTA . All Rights Reserved </p>
                </div>
                <?php
                $connect = false;
                if(isset($_SESSION['user_info']))
                {
                if($_SESSION['user_info']['verification'][0]== true)
                    {
                        $connect = true;
                    }
                }
                    if(!$connect)
                    {
                        echo ' <div class="foot-text-lr col-5 col-md-3">
                    <a  href="?section=connexion">connexion BDE</a>
                </div>';

                    }
                    if($connect)
                    {
                        echo ' < <div class="foot-text-lr col-5 col-md-3">
                    <a  href="?section=administration_index">membre BDE</a>
                </div>   ';
                }?>
            </div>
        </div>
    </div>
</footer>

    <!-- JavaScript -->
    <script  src="public/Javascript/display-none.js"></script>
    <script  src="public/Javascript/navbar.js"></script>
    <script  src="public/Javascript/number.js"></script>
    <!-- font-Awesome -->
    <script defer src="public/lib/fontawesome/svg-with-js/js/fontawesome-all.js"></script>
    <!-- jQuery -->
    <!-- jQuery Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- end -->

</body>
</html>







