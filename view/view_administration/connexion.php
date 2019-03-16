<?php

    $error=['','','',''];
    
    if(isset($_SESSION['user_info']))
    {
        if(!$_SESSION['user_info']['verification'])
        {
            $error = ['user_options-forms-errr',
            '<div class="alert alert-danger " role="alert">
                                    <h5 class="alert-heading alert-link"><i class="fas fa-exclamation-triangle"></i> Erreur de connexion !</h5>
                                    <hr>
                                    <p class="mb-0">Votre mots de passe ou votre mail et érroné.</p>
                                    </div>',
            'inputconex_err',
            'submit-bouton-err'];
        }
    }
?>
<div class="container-fluid">
    <section class="user row justify-content-center">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <div class="">
                        <strong><h1>Bienvenue</h1></strong>
                    </div>
                    <div>
                        <h5 style="padding-left: 50px">Au menbre du BDE</h5>
                        <p style="padding-top: 50px"><i class="fas fa-1x fa-info-circle"></i> Cette pages et reserver au
                            membre du BDE CFA INSTA</p>
                    </div>
                </div>
            </div>
            <form class="text-center" action="" method="POST">
                <div class=" <?= $error[0] ?> user_options-forms user_options-forms-op" id="user_options-forms">
                    <div class=" user_forms-login">
                        <div>
                            <strong><h2>CONNEXION</h2></strong>
                            <i class="fas fa-5x fa-users"></i>
                        </div>
                        <?= $error[1] ?>
                        <div class=" <?= $error[2] ?> inputconex ">
                        <label class="inserticon-fontico">
                                <i class="fas fa-envelope"></i>
                            </label>
                            <input type="email" placeholder="Saisissez votre email..." name="email" class="" required
                                   autofocus/>
                        </div>
                        <div class=" <?= $error[2] ?> inputconex ">
                            <label class="inserticon-fontico">
                                <i class="fas fa-lock"></i>
                            </label>
                            <input type="password" placeholder="Saisissez votre password..." name="password" class=""
                                   required/>
                        </div>
                        <div>
                            <button class="<?= $error[3] ?>  submit-bouton " type="submit" value="Connexion">CONNEXION</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

