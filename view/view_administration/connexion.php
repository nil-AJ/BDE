<br><br><br><br><br><br><br>

<div class="container">
    <div class="text-center">
        <h5>CONNEXION</h5>
    </div>
    <div class="row justify-content-center">
        <form action="" method="POST">
            <div class="col-12 ">
                <div>
                    <div>
                        <div>
                            <label class="inserticon-fontico">
                                <i class="fas fa-envelope"></i>
                            </label>
                            <input  name="email" type="email" class="input-text-h input-text"
                                   placeholder="Saisissez votre email...">
                        </div>
                    </div>
                </div>
                <!-- input text 2 -->
                <input  name="email" type="email" class=""
                        placeholder="Saisissez votre email...">
                <div>
                    <div>
                        <div>
                            <label class="inserticon-fontico">
                                <i class="fas fa-lock"></i>
                             </label>
                            <input  type="password" name="password" class="input-text-b input-text"
                                    placeholder="Saisissez votre password...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- input rech-->
            <div class="col-12 ">
                <button class=" submit-bouton " type="submit" value="Connexion">CONNEXION</button>
            </div>
        </form>
    </div>
</div>










<style>


    .inserticon-fontico {
        color: black;
        float: left;
        position: relative;
        z-index: 2;
        left: 0.5em;
        top: 0.9em;
        width: 0;
    }

    input[type="email"], input[type="password"] {
        padding-left: 35px;
    }

    /*form bouton */
    .submit-bouton {
        font-size: 14px;
        background-color: #01c3a7;
        color: white;
        padding: 10px 42px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    .submit-bouton:hover {
        background-color: #03b198;
    }



    /* input form*/
    .input-text-h {
        border: 1px solid #dce3e6;
        border-radius: 5px 5px 0px 0px;
    }

    .input-text-h:focus {
        border-radius: 5px 5px 5px 5px;
        border: 1px solid #01c3a7;
    }

    .input-text-b {
        border: 1px solid #dce3e6;
        border-radius: 5px 5px 5px 5px;
    }

    .input-text-b:focus {
        border-radius: 5px 5px 5px 5px;
        border: 1px solid #01c3a7;
    }

    .input-text {
        z-index: 5;
        color: black;
        outline: none;
        width: 100%;
        padding: 9px;
        background-color: #fafbfc;
        resize: vertical;
    }

    .input-text:focus {
        background-color: white;
    }
    /* END input text */

</style>




