<?php

include 'model/class/ConnexionBDD.class.php';

    $bdd = new ConnexionBDD('BDE_CFA_INSTA');
    $req = $bdd->createBDD()->prepare('SELECT * FROM membre WHERE email = ? AND password = ?');
    $req->execute(array(
        $_POST['email'],
        sha1($_POST['password'])
    ));
    
    $rep = $req->fetch();

    if($rep)
    {
        $_SESSION['user_info'] = array(true,$rep['name'], $rep['prename'],$rep['email'],$rep['class'],$rep['status']);
        header('Location: .');
        
    }else{
        $_SESSION['user_info']= array(false);
    }

    $req->closeCursor();