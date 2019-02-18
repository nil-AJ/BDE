<?php
//Routeur 

include('controleur/controleur_principal.php');
include('controleur/controleur_association.php');
include('controleur/controleur_administration.php');

    try
    {

        if(isset($_GET['section']))
        {
            switch ($_GET['section'])
            {

                case 'membre':
                    membre();
                    break;

                case 'logo':
                    logo();
                    break;

                case 'partenariat':
                    partenariat();
                    break;
                
                case 'calendrier':
                    calendar();
                    break;
                
                case 'news':
                    news();
                    break;

                case 'media':
                    media();
                    break;

                case 'inscription':
                    inscription();
                    break;

                case 'upload':
                    uploadMember();
                    break;
                
                
                default:
                    throw new Exception(404);
                    break;
            }

        }else
            {
                home();
            }

    }catch(Exception $e)
    {
        switch ($e->getMessage()) {

            case 404:
                pageUnknown();//Page inconnue
                break;

            case 203:
                //Element de formulaire manquant
                break;
            
            default:
                echo $e->getMessage(); //Erreur générique
                break;
        }

    }
