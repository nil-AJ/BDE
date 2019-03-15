<br><br><br><br><br><br>

<div class="container">
    <div class="content">
        <div class="grid">
            <figure class="effect-layla">
                <img src="public/image/membre/nil.png" alt="img06"/>
                <figcaption>
                    <h5>Gabin chambon</h5>
                    <h6>Présient</h6>
                    <p>When Layla appears</p>
                </figcaption>
            </figure>
            <figure class="effect-layla">
                <img src="public/image/membre/nil.png" alt="img06"/>
                <figcaption>
                    <h5>Nil Julitte</h5>
                    <h6>Vice présient</h6>
                    <p>When Layla appears</p>
                </figcaption>
            </figure>
        </div>
    </div><!-- /container -->
</div>


<style>

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
        top: 20px;
        bottom: 60px;
        right: 60px;
        left: 20px;
        border-top: 2px solid #fff;
        border-bottom: 2px solid #fff;
        -webkit-transform: scale(0, 1);
        transform: scale(0, 1);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }

    figure.effect-layla figcaption::after {
        top: 0px;
        bottom: 40px;
        right: 80px;
        left: 40px;
        border-right: 2px solid #fff;
        border-left: 2px solid #fff;
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
    figure.effect-layla:hover h6,
    figure.effect-layla:hover h5,
    figure.effect-layla:hover p {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    figure.effect-layla:hover figcaption::after,
    figure.effect-layla:hover h5,
    figure.effect-layla:hover  h6,
    figure.effect-layla:hover p,
    figure.effect-layla:hover img {
        -webkit-transition-delay: 0.15s;
        transition-delay: 0.15s;
    }
    figure.effect-layla img {
        height: 240px;
    }

    /* Common style */
    .grid figure {
        position: relative;
        overflow: hidden;
        max-width: 240px;
        max-height: 240px;
        background: grey;
        text-align: center;
        cursor: pointer;
    }

    .grid figure img {
        background-color: white;
        position: relative;
        display: block;
        opacity: 0.9;
    }

    .grid figure figcaption {
        padding: 1em;
        color: black;
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
    figure.effect-layla h5{
        padding-top: 30%;
        -webkit-transition: -webkit-transform 0.35s;
        transition: transform 0.35s;
    }
    figure.effect-layla h6{
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
    figure.effect-layla h6{
        -webkit-transform: translate3d(0, 80px, 0);
        transform: translate3d(0, 80px, 0);
    }

    figure.effect-layla h5 {
        -webkit-transform: translate3d(0, 80px, 0);
        transform: translate3d(0, 80px, 0);
    }
    .grid figure h6 {
        font-weight: 600;
    }

    .grid figure h5 {
        font-weight: 600;
    }

    .grid figure h6,
    .grid figure h5,
    .grid figure p {
        padding-right: 40px;
        margin: 0;
    }

    .grid figure p {
        letter-spacing: 1px;
        font-size: 18px;
    }

</style>
<br><br><br><br><br><br>