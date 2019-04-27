<?php




    function aff_news()
    {

        $bdd = $GLOBALS['bdd'];
        $req = $bdd->createBDD()->query('SELECT * FROM news');

        ob_start();
        foreach($req->fetchAll() as $news)
        {?>


            <div class="card mb-3 shadow">
                <div class="row no-gutters">
                    <div class="col-md-3 col-sm-3 col-lg-3">
                        <div class='time'>
                            <div class='date'><?= $news['dateStart']?></div>
                            <div class='month'>APR</div>
                        </div>
                        <img src="public/image/logo/BDE_CFA_INSTA/logo_BDE_CFA_INSTA-noir.png"
                             style="max-height: 250px; max-width: 250px" class="card-img">

                    </div>
                    <div class="col-md-8 col-sm-3 col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">  <?= $news['title']?></h5>
                            <div class="badge-groupe">
                                <span style="background-color: red" class="badge badge-secondary"><i class="fas fa-running"></i> Sport</span>
                                <span  style="background-color: #673ab7" class="badge badge-secondary"><i class="fas fa-music"></i> Soirées</span>
                                <span  style="background-color: #2196f3" class="badge badge-secondary"><i class="fas fa-info-circle"></i> Information</span>
                                <span  style="background-color: #4caf50" class="badge badge-secondary"><i class="fas fa-hands-helping"></i> Partenariats</span>
                                <span  style="background-color: #ff9800" class="badge badge-secondary"><i class="fas fa-plane"></i> Voyage</span>
                                <span  style="background-color: #ff5722" class="badge badge-secondary"><i class="fas fa-theater-masks"></i> Loisir</span>
                                <span  style="background-color: #607d8b" class="badge badge-secondary"><i class="fas fa-graduation-cap"></i> Aide étudiant</span>
                            </div>


                            <p class="card-text"><?= $news['content']?></p>
                        </div>
                    </div>
                </div>
            </div>



        <?php
        }
        return $rep = ob_end_flush();

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