<br><br><br><br><br><br>

<div class="container">
    <div class="content">
        <div class="grid">
            <figure class="effect-layla">
                <img src="public/image/membre/nil.png" alt="img06"/>
                <figcaption>
                    <h4>Gabin chambon</h4>
                    <h5>Présient</h5>
                    <p>When Layla appears</p>
                </figcaption>
            </figure>
            <figure class="effect-layla">
                <img src="public/image/membre/nil.png" alt="img06"/>
                <figcaption>
                    <h4>Nil Julitte</h4>
                    <h5>Vice présient</h5>
                    <p>When Layla appears</p>
                </figcaption>
            </figure>
        </div>
    </div><!-- /container -->
</div>


<style>
    figure.effect-layla img {
        height: 280px;
    }

    figure.effect-layla figcaption {
        padding: 3em;
    }

    figure.effect-layla figcaption::before,
    figure.effect-layla figcaption::after {
        position: absolute;
        content: '';
        opacity: 0;
    }

    figure.effect-layla figcaption::before {
        top: 50px;
        bottom: 50px;
        right: 30px;
        left: 30px;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: scale(0, 1);
        transform: scale(0, 1);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    figure.effect-layla figcaption::after {
        top: 30px;
        bottom: 30px;
        right: 50px;
        left: 50px;
        border-right: 1px solid #fff;
        border-left: 1px solid #fff;
        -webkit-transform: scale(1, 0);
        transform: scale(1, 0);
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0;
    }

    figure.effect-layla img,
    figure.effect-layla figcaption::before,
    figure.effect-layla figcaption::after,
    figure.effect-layla p {
        -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
        transition: opacity 0.35s, transform 0.35s;
    }

    figure.effect-layla:hover img {
        opacity: 0.8;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    figure.effect-layla:hover figcaption::before,
    figure.effect-layla:hover figcaption::after {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    figure.effect-layla:hover h5,
    figure.effect-layla:hover h4,
    figure.effect-layla:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    figure.effect-layla:hover figcaption::after,
    figure.effect-layla:hover h4,
    figure.effect-layla:hover  h5,
    figure.effect-layla:hover p,
    figure.effect-layla:hover img {
        -webkit-transition-delay: 0.15s;
        transition-delay: 0.15s;
    }

    /* Common style */
    .grid figure {
        position: relative;
        overflow: hidden;
        min-width: 200px;
        max-width: 280px;
        max-height: 280px;
        width: 48%;
        background: red;
        text-align: center;
        cursor: pointer;
    }

    .grid figure img {
        position: relative;
        display: block;
        min-height: 100%;
        max-width: 100%;
        opacity: 0.8;
    }

    .grid figure figcaption {
        padding: 2em;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .grid figure figcaption::before,
    .grid figure figcaption::after {
        pointer-events: none;
    }

    .grid figure figcaption,
    .grid figure figcaption > a {
        position: absolute;
        top: 0;
        left: 0;
        width: 115%;
        height: 115%;
    }

    .grid figure figcaption > a {
        z-index: 1000;
        text-indent: 200%;
        white-space: nowrap;
        font-size: 0;
        opacity: 0;
    }
    figure.effect-layla h4{
        padding-top: 40%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
    }
    figure.effect-layla h5{
        padding-top: 2%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
    }

    figure.effect-layla p {
        padding: 0.5em 2em;
        text-transform: none;
        opacity: 0;
        -webkit-transform: translate3d(0, 60px, 0);
        transform: translate3d(0, 60px, 0);
    }
    figure.effect-layla h5{
        -webkit-transform: translate3d(0, 80px, 0);
        transform: translate3d(0, 80px, 0);
    }

    figure.effect-layla h4 {
        -webkit-transform: translate3d(0, 80px, 0);
        transform: translate3d(0, 80px, 0);
    }
    .grid figure h5 {
        word-spacing: -0.15em;
        font-weight: 500;
    }

    .grid figure h4 {
        word-spacing: -0.15em;
        font-weight: 500;
    }

    .grid figure h5,
    .grid figure h4,
    .grid figure p {
        margin: 0;
    }

    .grid figure p {
        letter-spacing: 1px;
        font-size: 18px;
    }

</style>
<br><br><br><br><br><br>