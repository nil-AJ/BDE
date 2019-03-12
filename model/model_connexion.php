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
        $_SESSION['user_info'] = array(
            'verification'=>[
                true,
            'error'=> false
            ],
            'name'=>$rep['name'],
            'prename'=>$rep['prename'],
            'email'=>$rep['email'],
            'class'=>$rep['class'],
            'status'=>$rep['status']);
        header('Location: .?section=administration_index');
        
    }else{
        $_SESSION['user_info']= array(
            "verification"=>[
                false,
        'error'=>true
            ]
        );
    }

    $req->closeCursor();

