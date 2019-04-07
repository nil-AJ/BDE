

<div class="content">
    <div class="container">
        <div class="">
            <figure class="boxed">
                    <div class="item"></div>
                    <div class="item item--r"></div>
                    <div class="item item--g"></div>
                    <div class="item item--b"></div>
                <figcaption class="text-center">
                    <h5>Gabin chambon</h5>
                    <h6>Présient</h6>
                </figcaption>
            </figure>
        </div>
    </div><!-- /container -->
</div>


<style>
    .content{
        padding-top:  15%;
        padding-bottom: 15%;
        background-color: #353B3F;
    }
    .boxed {
        width: 250px;
        height: 250px;
        overflow: hidden;
        position: relative;

    }
    .boxed .item {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background-image: url('public/image/membre/nil.png');
        background-size: cover;
        background-position: center;
        mix-blend-mode: screen;
        background-blend-mode: darken;
        transition: -webkit-transform 0.3s;
        transition: transform 0.3s;
        transition: transform 0.3s, -webkit-transform 0.3s;
    }
    .boxed .item--r {
        background-color: red;
        -webkit-transform: translate(3px, -3px);
        transform: translate(3px, -3px);
    }
    .boxed .item--g {
        background-color: green;
        -webkit-transform: translate(-3px, -3px);
        transform: translate(-3px, -3px);
    }
    .boxed .item--b {
        background-color: blue;
        -webkit-transform: translate(0px, 6px);
        transform: translate(0px, 6px);
    }
    .boxed:hover .item {
        -webkit-transform: translate(0px, 0px) !important;
        transform: translate(0px, 0px) !important;
    }







    .form-element {
        position: relative;
        margin-top: 2.25rem;
        margin-bottom: 2.25rem;
    }

    .form-element-bar {
        position: relative;
        height: 1.5px;
        background: darkgrey;
        display: block;
    }

    .form-element-bar::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: #4169E1;
        height: 1.5px;
        display: block;
        transform: rotateY(90deg);
        transition: transform 0.28s ease;
        will-change: transform;
    }

    .form-element-label {
        position: absolute;
        top: 0.75rem;
        line-height: 1.5rem;
        pointer-events: none;
        padding-left: 0.125rem;
        z-index: 1;
        font-size: 18px;
        font-weight: normal;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        color: black;
        transform: translateY(-50%);
        transform-origin: left center;
        transition: transform 0.28s ease, color 0.28s linear, opacity 0.28s linear;
        will-change: transform, color, opacity;
    }

    .form-element-field {
        outline: none;
        height: 1.5rem;
        display: block;
        background: none;
        padding: 0.125rem 0.125rem 0.0625rem;
        font-size: 1rem;
        border: 0 solid transparent;
        line-height: 1.5;
        width: 100%;
        color: #333;
        box-shadow: none;
        opacity: 0.001;
        transition: opacity 0.28s ease;
        will-change: opacity;
    }


    .form-element-field:focus ~ .form-element-bar::after {
        transform: rotateY(0deg);
    }

    .form-element-field:focus ~ .form-element-label {
        color: black;
    }


    input.form-element-field:not(:placeholder-shown),
    textarea.form-element-field:not(:placeholder-shown) {
        opacity: 1;
    }

    input.form-element-field:not(:placeholder-shown) ~ .form-element-label,
    textarea.form-element-field:not(:placeholder-shown) ~ .form-element-label {
        transform: translateY(-100%) translateY(-0.5em) translateY(-2px) scale(0.9);
        cursor: pointer;
        pointer-events: auto;
    }

    textarea.form-element-field {
        height: auto;
        min-height: 3rem;
    }

    .form-home{
        border-width: 1px 1px 1px 1px;
        border-style: solid;
        border-color: #DCDCDC;
        background: #F6F6F6;
    }



    .inserticon-fontico-home {
        color: black;
        float: left;
        position: relative;
        z-index: 2;
        left: 0.5em;
        top: 2.2em;
        width: 0;
    }


    .inputhome input {
        background-color: #F6F6F6;
        padding-left: 38px;
        margin-top: 30px;
        font-weight: 300;
        border: 0;
        border-bottom: 1.5px solid darkgrey;
        width: 100%;
        height: 36px;
        font-size: 20px;
    }

    .inputhome input:focus {
        border-bottom: 1.5px solid #4169E1;
        outline: none;
        box-shadow: none;
    }




</style>



<div class="form-home">
    <div class="container">

        <h3>Rejoindre le BDE ?</h3>

        <div class="row">
            <div class=" inputhome col-md-6 col-sm-12 col-lg-6" >
                <label class="inserticon-fontico-home">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" placeholder="Saisissez votre Prénom..." name="" class="" required
                       autofocus/>
            </div>
            <div class=" inputhome col-md-6 col-sm-12 col-lg-6 ">
                <label class="inserticon-fontico-home">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" placeholder="Saisissez votre Nom..." name="" class="" required
                       autofocus/>
            </div>

        </div>
        <div class="row">
            <div class=" inputhome col-md-6 col-sm-12 col-lg-6">
                <label class="inserticon-fontico-home">
                    <i class="fas fa-envelope"></i>
                </label>
                <input type="email" placeholder="Saisissez votre email..." name="" class="" required
                       autofocus/>
            </div>
            <div class=" inputhome col-md-6 col-sm-12 col-lg-6">
                <label class="inserticon-fontico-home">
                    <i class="fas fa-phone"></i>
                </label>
                <input type="text" placeholder="Saisissez votre mnuméro de téléphone..." name="" class="" required
                       autofocus/>
            </div>

        </div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-lg-12 form-element form-textarea">
                <textarea id="form-home-mes"  class="form-element-field" required></textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="form-home-mes"><i class="fas fa-comment-alt"></i> Message de motivation</label>

            </div>
        </div>
    </div>
</div>