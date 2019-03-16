<?php

    if($_FILES['userfile']!=null && $_FILES['userfile']!= ' ' && $_POST['evenement']!=null && $_POST['evenement']!= ' ')
    {
        include 'model/class/Pictures.class.php';

        //Upload de l'image
        $image = $_FILES['userfile'];
        $pic = new Pictures($image['tmp_name']);

        if(isset($_POST['image_name']))
        {
            $picname='';
        }elseif ($_POST['image_name']== null || $_POST['image_name']== '' ) {
            $picname='';
        }else {
            $picname = $_POST['image_name'];
        }
        $link = 'public/media/'.$_POST['evenement'].'/';
        $pic->uploadPicture($image,$picname,$link);



        $bdd = $GLOBALS['bdd'];

        //Verification de l'existence de l'album
        $req = $bdd->createBDD()->prepare('SELECT idAlbum, title FROM album WHERE title = ?');
        $req->execute(array(
            $_POST['evenement']
        ));
        $albumId = $req->fetch(PDO::FETCH_ASSOC)['idAlbum'];
        $req->closeCursor();

        if($albumId == '' || $albumId == null)
        {
            //Insertion de l'album
            $req = $bdd->createBDD()->prepare('INSERT INTO album(title,uploader,creationDate) VALUES(?,?,Now()) ');
            $req->execute(array(
                $_POST['evenement'],
                $_SESSION['user_info']['name']
            ));
            $req->closeCursor(); 
        }

        //Recuperation de l'id de l'album 
        $req = $bdd->createBDD()->prepare('SELECT idAlbum, title FROM album WHERE title = ?');
        $req->execute(array(
            $_POST['evenement']
        ));
        $albumId = $req->fetch(PDO::FETCH_ASSOC)['idAlbum'];
        $req->closeCursor();

        //Insertion de l'image
        if(isset($_POST['image_name']))
        {
            $picname=basename($_FILES['userfile']['name']);
        }elseif ($_POST['image_name']== null || $_POST['image_name']== '' ) {
            $picname=basename($_FILES['userfile']['name']);
        }
        $req = $bdd->createBDD()->prepare('INSERT INTO media(album,title,evenement,link,descriptionPicture,uploadDate) VALUES(?,?,?,?,?,Now())');
        $req->execute(array(
            $albumId,
            $picname,
            $_POST['evenement'],
            $link.$picname,
            ''
        ));
        $req->closeCursor();

        //Ajout de la categories
        if(isset($_POST['category']))
        {
            
        }


    }else{

        throw new Exception(203);
    }