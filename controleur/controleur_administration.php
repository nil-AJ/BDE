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