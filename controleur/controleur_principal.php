<?php

    function home()
    {
        $GLOBALS['u']->add("view/view_principal/home.php",1);
    }
    
    function calendar()
    {
        $GLOBALS['u']->add("view/view_principal/calendar.php",1);
    }

    function media()
    {
        include 'model/model_show_media.php';
        $GLOBALS['u']->add("view/media/media.php",1);
    }


    function pageUnknown()
    {
        $GLOBALS['u']->add("view/view_error/page404.php",1);
    }