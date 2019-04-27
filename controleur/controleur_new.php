<?php

function news()
{
    include 'model/model_new.php';
    $GLOBALS['u']->add("view/view_principal/news.php",1);
}

?>