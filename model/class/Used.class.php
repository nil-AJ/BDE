<?php
class Used
{

    private $_used_path =  [];
    private $_verification;


    const HELP = "-------------------------------------AIDE --------------------------------------------<br/>
                    -Si l'objet ne prend pas de paramètres il appelle l'aide ( équivaut à un NOMDELACLASSE::HELP)<br/>
                    -Si l'objet prend 1 paramétre, il prend en paramètre un tableau de données correspondant à l'ordre d'imbriquation des vues principal <br/>
                        Exemples : la navbar puis le footer<br/>
                    -La méthode add() prend comme  paramétre :<br/>
                        *La page  à ajouter dans les pages deja défini<br/>
                        *Le numéro de l'index correspondant à l'index du tableau  ou la page va être ajouté<br/>
                            Exemple: La navbar et le footer on déjà été ajoutés, on rajouter notre page main au milieu<br/>
                                sachant que le tableau contient déjà 2 valeurs, on ajoutera notre valeur a l'index 1<br/>
                                add('notremainpage',1);<br/>
                        Attention la fonction add ne prend pour l'instant qu'une unique page<br/>
                    ";



    //-----------------------------Constructeur-----------------------------------------
    function __construct($used_path = [])
    {
        if(isset($used_path))
        {
            if(count($used_path)!=0 )
            {
                $i=0;
                foreach($used_path as $inc ) 
                {
                    if(!file_exists($inc))
                    {
                        $this->setVerification(false);
                        throw new Exception("Le fichier numéro ".$i.' est introuvable');
                        break ;
                    }else {
                        $this->setVerification(true);
                        $this->setUsed_path($used_path);
                    }
                     $i++;
                }
            }   
        }else{

            echo self::HELP;
        }
    }

    //-----------------------------Methode-----------------------------------------
    function add($new_path= null, $key= 0)
    {
        if(isset($new_path))
        {
            if($key<=count( $this->used_path())  && $key>=0)
            {
                if(file_exists($new_path))
                {
                    if($this->verification())
                    {
                        $tab = $this->used_path();
                        $tab[$key]=$new_path ;
                        if($key!=0)
                        {
                            $tab =array_merge($tab, array_slice($this->used_path(),$key,count($this->used_path())));
                        }else {
                            $tab =array_merge($tab ,array_slice($this->used_path(),1,count($this->used_path())));
                        }
                        
                        ob_start();
                        foreach($tab as $inc)
                            include $inc;
                        $r =  ob_end_flush();
                        return $r;
                    }  
                }else {
                    echo 'Fichier entrée inexistant';
                }
            }else {
                echo 'La clef n\'est pas valide dans ce tableau, nombre de valeur: '. count($this->used_path());
            }
        }else {
            echo 'Cette méthode prend minimum un argument';
        }
    }

    //-----------------------------Getteur-----------------------------------------
    public function used_path()
    {
        return $this->_used_path;
    }

    public function verification()
    {
        return $this->_verification;
    }


    //-----------------------------Setteur----------------------------------------
    public function setUsed_path($used_path)
    {
        $this->_used_path=$used_path;
    }

    public function setVerification($verification)
    {
        $this->_verification=$verification;
    }


}