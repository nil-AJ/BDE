<?php 
    function connexion()
    {
        $GLOBALS['u']->add("view/view_administration/connexion.php",1);
    }

    function uploadMember()
    {
        if(isset($_FILES['userfile']) && isset($_POST['evenement']) )
        {
          include 'model/model_media_upload.php' ;
        }
        $GLOBALS['u']->add("view/view_administration/upload.php",1);
        
    }

    function inscription()
    {
        if(isset($_POST['name']) && isset($_POST['prename']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['class']) )
        {
            include 'model/model_inscription.php';
        }
        
        $GLOBALS['u']->add("view/view_administration/inscription.php",1);
    }