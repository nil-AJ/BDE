<?php


function uploadMember()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        if($_SESSION['user_info']['verification'])
        {
            if(isset($_FILES['userfile']) && isset($_POST['evenement']) )
            {
                include 'model/model_media_upload.php' ;
            }
            $GLOBALS['u']->add("view/view_administration/upload.php",1);
        }
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }



    function connexion()
    {
        if(isset($_SESSION['user_info']))
        {
            if(!$_SESSION['user_info']['verification'])
            {
                $_SESSION['user_info']['verification']['error'] = true;
            }else{
                $_SESSION['user_info']['verification']['error'] = false;
            }
        }
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            include 'model/model_connexion.php';
        }

        $GLOBALS['u']->add("view/view_administration/connexion.php",1);
    }

    function inscription()
    {
        if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
        {
        if(isset($_POST['name']) && isset($_POST['prename']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['class']) )
        {
            include 'model/model_inscription.php';
        }

        $GLOBALS['u']->add("view/view_administration/inscription.php",1);
        }else{

            throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
        }
    }


    function deconnexion()
    {
        if(isset($_SESSION['user_info']))
        {

            if($_SESSION['user_info']['verification'])
            {
                session_destroy();
                header('Location:.?section=connexion');
            }
            }else{

                throw new Exception(404);
            }
    }


function administration_index()
{
    if(isset($_SESSION['user_info'])) //Toutes les fonction réservées au membres devront etre dans ces deux condition
    {

        $GLOBALS['u']->add("view/view_administration/administration_index.php",1);
}else{

    throw new Exception(404); // On redirige l'utilisateur vers une page 404 si il essaye d'accéder a une page auquel il n'as pas accés
}
}

