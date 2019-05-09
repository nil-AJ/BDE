<?php


function aff_news()
{

        $bdd = $GLOBALS['bdd'];
        $req= $bdd->createBDD()->query('SELECT * FROM news');
        $result = $req->fetchAll();
        return $result;

}


//public function rechercher($tab, $mot_cle)
//{
//   $champs = array();
//   foreach ($tab as $value) {
//        $champs[] = $value . " like :mot_cle";
//    }
//    $chaine = implode(" or ", $champs);


//    $query = "SELECT * FROM news" . $this->table . " WHERE " . $chaine . ";";
//   $data = array(":mot_cle" => "%" . $mot_cle . "%");
//   if ($this->pdo != null) {
//       $recherche = $this->pdo->prepare($query);
//        $recherche->execute($data);
//       $result = $recherche->fetchAll();
//        return $result;
//    } else {
//        return null;
//    }
//}

?>