<?php 

    class ConnexionBDD
    {
        protected $_host_url;
        protected $_name_of_db;
        protected $_login;
        protected $_password;

        const LOCALHOST="localhost";
        const HELP =      " -------------------------------------AIDE --------------------------------------------<br/>
                            -Si l'objet ne prend pas de paramètres il appelle l'aide ( équivaut à un NOMDELACLASSE::HELP)<br/>
                            -Si l'objet prend 1 paramétre, il prend en paramètre le nom de la base de de donnée <br/>
                            -L'objet prend 4 paramétres : le nom de la base de donnée, l'hôte, le login, le mot de passe <br/>
                            -La méthode createBdd va créer la connexion à la base de donnée <br/>
                            -La methode selectAll va recuperer toutes les informations de la table specifié <br/>
                            ---------Attention la methode selectAll fonctionne avec un foreach ------------------- <br/>
                            -La méthode insertRow prend comme paramétre:<br/>
                                *La table dans laquelle on souhaite inserer les données<br/>
                                *Un tableau de valeur  qui contient les valeurs à ajouter ( pour les auto_increment, la valeur a rentrer sera '')<br/>
                            -La méthode deleteRow prend comme paramétre:<br/>
                                *La table dans laquelle on souhaite inserer les données<br/>
                                *Un tableau qui contient les attributs de la table qui vont etre utilisé dans la condition(ex id, name ect)<br/>
                                *Un autre tableau de valeur qui contient les parametre de chaque ligne (ex: Jean, Parnous, 03940202) <br/>
                            -La méthode updateRow est en cours ...";


        //-----------------Constructeur-----------------------
        //Quand on ne declare pas la portée d'une fonction, elle est considérée comme public

        function __construct($name_of_db=null,$host_url=self::LOCALHOST,$login=null,$password=null)
        {
            if(isset($name_of_db))
            {
                $this->setHost_url($host_url);
                $this->setName_of_db($name_of_db);
                $this->setLogin('root');
                if(isset($login))
                {
                    $this->setLogin($login);
                }else {
                    $this->setLogin('root');
                }

                if(isset($password))
                {
                    $this->setPassword($password);

                }else {
                    $this->setPassword('');
                }


            }else {
                echo self::HELP;
            }
        }


        //--------------------------Methode-------------------------------------------

        public function selectAll($table)
        {
            $reponse=$this->createBdd()->query('SELECT * FROM '.$table);
            return  $reponse->fetchAll();
        }

        public function createBDD()
        {
            try{
                return $bdd = new PDO('mysql:host='.$this->host_url().';dbname='.$this->name_of_db().';charset=utf8;',$this->login(),$this->password());
            }catch(Exception $e)
            {
                die('Erreur, de connection: '.$e->getMessage());
            }
        }


        public function insertRow($table, $column = [])
        {
            if(count($column) != 0 && isset($table) && $table!='')
            {
                if (count($this->showTable($table)) == count($column)) {

                    $attribute = $this->showTable($table);
                    
                    for($i = 0;count($column)>$i;$i++)
                    {
                        if($i==0)
                        {
                            $point = '?';
                            $att = $attribute[$i];
                        }else
                        {
                            $point = $point.',?';
                            $att = $att.','.$attribute[$i];
                        }
                    }

                    $sql = 'INSERT INTO '.$table.'('.$att.') VALUES('.$point.')';
                    $req = $this->createBDD()->prepare($sql);
                    $req->execute($column);
                    $req->closeCursor();
                    return true;

                }else {
                    //Les arguments passés ne sont pas equivalent au nombre d'attributs de la table
                    return 2;
                }

            }else {
                return false;//Aucun Argument passé";
            }
        }


        public function deleteRow($table, $attribute= [] ,$column=[])
        {

            if(count($column) != 0 && count($attribute) != 0 && isset($table) && $table!='')
            {
                for($i = 0; count($column)>$i; $i++)
                    {
                        if($i== 0)
                        {
                            $point = $attribute[$i].'= ?';
                        }else
                        {
                            $point = $point.' AND '.$attribute[$i].'= ?';
                        }
                        
                    }

                    $sql = 'DELETE FROM '.$table.' WHERE '.$point;
                    $req = $this->createBDD()->prepare($sql);
                    $req->execute($column);
                    $req->closeCursor();
                    return true;
            }

            return false;

        }

        public function updateRow()
        {

        }

        private function getAttribute($arr= [])
        {
            if(count($arr)!=0)
            {
                for($i = 0;count($arr)>$i;$i++)
                {
                    if($i==0)
                    {
                        $point = '?';
                        $att = $arr[$i];
                    }else
                    {
                        $point = $point.',?';
                        $att = $att.','.$arr[$i];
                    }
                }
                return array($att,$point) ;
            }

            return false;
        }


        private function showTable($table)
        {
            $rep = [];
            $reponse = $this->createBDD()->query('DESC '.$table);
            foreach ($reponse->fetchAll() as $r) {
                $rep = array_merge($rep,array($r['Field']));
            }
            $reponse->closeCursor();
            return $rep ;
        }


        //----------------------------Setteur------------------------------------------
        public function setHost_url($host_url)
        {
            $this->_host_url = $host_url;
        }

        public function setName_of_db($name_of_db)
        {
            $this->_name_of_db = $name_of_db;
        }

        public function setLogin($login)
        {
            $this->_login = $login;
        }

        public function setPassword($password)
        {
            $this->_password = $password;
        }



        //-----------------------------Getteur-----------------------------------------
        public function host_url()
        {
            return $this->_host_url;
        }

        public function name_of_db()
        {
            return $this->_name_of_db;
        }

        public function login()
        {
            return $this->_login;
        }
        public function password()
        {
            return $this->_password;
        }
    }