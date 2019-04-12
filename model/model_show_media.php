<?php

    function show_media()
    {

        $bdd = $GLOBALS['bdd'];
        $req = $bdd->createBDD()->query('SELECT * FROM media');
    
        ob_start();
        foreach($req->fetchAll() as $media)
        {?>
            <div class="">
                    <figure class="imga effect-X">
                        <img class="font" src="<?= $media['link']?> "/>    
                </figure>
        </div>
        <?php
        }
        return $rep = ob_end_flush();

    }?>
   
