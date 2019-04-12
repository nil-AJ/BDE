<?php

class Pictures
{
    private $_picture_path;
    private $_picture_taille;
    private $_picture_extension;
    private $_picture_size;

    const HELP=             " ---------------------------------------------------------------------AIDE ---------------------------------------------------------------<br/>
                            -Si l'objet ne prend pas de paramètres il appelle l'aide ( équivaut à un NOMDELACLASSE::HELP)<br/>
                                <br/>
                            -L'objet prend comme seul paramètre le nom de l'image <br/>
                                <br/>
                            -Une fois crée l'objet permet d'avoir toutes les infomations nécessaire sur l'image (MIME,taille(L*l),poids) <br/>
                                 <br/>
                            -La méthode resizePicture permet de créer une copie de l'image de base et de la redimensionner, par défaut la largeur et la<br/>
                                hauteur sont fixées à 1200*1200.<br/>
                                Cette méthode peut aussi renommé l'image, mais prend par défaut le nom : 'new_picture' en incrementant un<br/>
                                nombre si le nom est déjà pris (new_pictures(1).jpg<br/>
                            ----Attention préciser l'extension de l'image si vous souhaitez la renommé, car l'extension par défaut est .jpg (ne change pas le MIME)--------<br/>
                                 <br/>

                            -La méthode uploadPicture va uploader l'image specifiée à la creation de l'objet (ne pas oublier que toutes les informations d'upload d'un<br/>
                                fichier sont contenues dans la variable \$_FILES,<br/>
                                <br/>******************************************************************************************* <br/>
                                ex: le name de l'input est 'userfile' (\$p = new Pictures(\$_FILES['userfile']['tmp_file']); <br/>
                                p->uploadPicture(\$_FILES['userfile']));<br/>
                                <a href=\"http://php.net/manual/fr/features.file-upload.post-method.php\" target=\"_blank\"> Pour plus d'informations</a>
                                <br/>************************************************************************************************<br/><br/>
                                La méthode prend 5 arguments : <br/>
                                    *Le nom du fichier uploadé (\$_FILES['userfile']['tmp_name']) :string<br/>
                                    *Le nom du fichier une fois uploadé (par défaut celui de l'uploader) :string<br/>
                                    *le dossier de destination (par défaut un dossier uploads/  est crée), la méthode crée les dossier si ces derniers n'existe pas :string<br/>
                                    *La taille en Mo (par défaut 5) :int<br/>
                                    *Le MIME accepté pour l'upload (par défaut 'image/jpg', 'image/jpeg', 'image/png') :array<br/>
                                Si un argument n'es pas renseignés la méthode prendra celle assigné par defaut<br/>
                                 <br/>
                            ---------Attention la methode uploadPicture écrase automatiquement l'image avec un nom similaire ------------------- ";


    //-----------------Constructeurs-----------------------
   
    function __construct($picture_path=null)
    {
        if(isset($picture_path))
        {
            if(file_exists($picture_path))
            {
                $this->setPicture_path($picture_path);
                $this->setPicture_taille(array(getimagesize($picture_path)[0],getimagesize($picture_path)[1]));
                $this->setPicture_extension(getimagesize($picture_path)['mime']);
                $this->setPicture_size(filesize($picture_path));
            }else {
                throw new Exception('Fichier inexistant');
            }
        }else {
            echo self::HELP;
        }
        

    }


    //--------------------------Methode-------------------------------------------

    public function resizePicture($height=1200,$width=1200,$new_picture_path="new_picture")
    {
        if(file_exists($this->picture_path()))
        {
            $new_pictures = imagecreatetruecolor($height,$width);
            $old_pictures = imagecreatefromjpeg($this->picture_path());
            imagecopyresampled($new_pictures, $old_pictures, 0, 0, 0, 0, $height, $width, $this->picture_taille()[0], $this->picture_taille()[1]);
            if(imagejpeg($new_pictures, $new_picture_path))
            {
                if(file_exists($new_picture_path) && $new_picture_path == "new_picture")
                {
                    for($i=0;file_exists($new_picture_path);$i++)
                    {
                        $new_picture_path=$new_picture_path."(".$i.")"."jpg";
                    }
                    
                    imagejpeg($new_pictures,$new_picture_path);
                    
                }else {
                    imagejpeg($new_pictures, $new_picture_path);
                }
                
                return true;
            }else 
            {
                return false;
            }

        }else {
            return false;
        }
        
    }


    public function uploadPicture($upload_file=null, $name='', $dir='uploads/',  $size = 5, $extensions_true = array('image/jpg', 'image/jpeg', 'image/png'))
    {
        if(file_exists($this->picture_path()) && isset($upload_file))
        {
            if ($upload_file['error'] == 0)
            {
                if ($this->picture_size() <= intval($size)*1000000)
                {

                    if (in_array($this->picture_extension(), $extensions_true))
                    {
                        if(!file_exists($dir))
                        {
                            mkdir($dir, 0777, true);
                        }
                        if($name == '')
                        {
                            $name= basename($upload_file['name']);
                        }
                        try{
                            move_uploaded_file($upload_file['tmp_name'], $dir.$name);
                            return true; // Retourne true si un l'upload a eu lieu

                        }catch(Exception $e) // Attention le try ne fonctionne pas sur les warning
                        {
                            echo "Erreur durant la tentative de déplacment du fichier : ".$e;
                            throw new Exception("Erreur durant la tentative de déplacment du fichier");
                        }

                    }else
                        throw new Exception(3);// Lève une exception si un le type de fichier est invalide

                }else
                    throw new Exception(2); // Lève une exception2 si un la taille est superieur au celle exigée

            }else 
                throw new Exception(1); // Lève une exception 1 si un probléme d'upload à eu lieu
            
        }
    }



    //-----------------------------Getteur-----------------------------------------
    public function picture_path()
    {
        return $this->_picture_path;
    }

    public function picture_taille()
    {
        return $this->_picture_taille;
    }

    public function picture_extension()
    {
        return $this->_picture_extension;
    }

    public function picture_size()
    {
        return $this->_picture_size;
    }




    //----------------------------Setteur------------------------------------------
    public function setPicture_path($picture_path)
    {
        $this->_picture_path= $picture_path;
    }

    private function setPicture_taille($picture_taille)
    {
        $this->_picture_taille= $picture_taille;
    }

    private function setPicture_extension($picture_extension)
    {
        $this->_picture_extension= $picture_extension;
    }

    private function setPicture_size($picture_size)
    {
        $this->_picture_size= $picture_size;
    }



}