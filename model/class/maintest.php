<?php
    require('Used.class.php');
    $s = new Used(['../../view/navbar-foot/navbar.php','../../view/navbar-foot/navbar.php']);
    $s->add('../../view/navbar-foot/foot.php',1);
    echo '/view/navbar-foot/foot.php';

