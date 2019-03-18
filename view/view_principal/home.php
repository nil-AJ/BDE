<div class="site-inner">
    <section class="container-fluid">
        <!-- ACCORDION ROW -->
        <div class="row">
            <ul class="accordion-group" id="accordion">
                <li style="background-image: url('https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-301069.jpg');">
                    <div class="accordion-overlay"></div>
                    <h3>Campus</h3>
                    <section class="hidden-xs">
                        <article>
                            <p>Bootstrap means Power.</p>
                        </article>
                    </section>
                </li>
                <li class="out"
                    style="background-image: url('https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-63739.jpg');">
                    <div class="accordion-overlay"></div>
                    <h3>Soirée Etudiante</h3>
                    <section class="hidden-xs">
                        <article>
                            <p>Bootstrap means Power.
                            </p>
                        </article>
                    </section>
                </li>
                <li style="background-image: url('https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-464974.jpg');">
                    <div class="accordion-overlay"></div>
                    <h3> Voyage</h3>
                    <section class="hidden-xs">
                        <article>
                            <p>Got inspired by this design?</p>
                        </article>
                    </section>
                </li>
                <li style="background-image: url('https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-94606.jpg');">
                    <div class="accordion-overlay"></div>
                    <h3>Sport</h3>
                    <section class="hidden-xs">
                        <article>
                            <p>Bootstrap means Power.</p>
                        </article>
                    </section>
                </li>
            </ul>
        </div>
    </section>
</div>


<script>

    (function () {
        $(function () {
            var $accordion, $wideScreen;
            $accordion = $('#accordion').children('li');
            $wideScreen = $(window).width() > 767;
            if ($wideScreen) {
                $accordion.on('mouseenter click', function (e) {
                    var $this;
                    e.stopPropagation();
                    $this = $(this);
                    if ($this.hasClass('out')) {
                        $this.addClass('out');
                    } else {
                        $this.addClass('out');
                        $this.siblings().removeClass('out');
                    }
                });
            } else {
                $accordion.on('touchstart touchend', function (e) {
                    var $this;
                    e.stopPropagation();
                    $this = $(this);
                    if ($this.hasClass('out')) {
                        $this.addClass('out');
                    } else {
                        $this.addClass('out');
                        $this.siblings().removeClass('out');
                    }
                });
            }
        });
    }.call(this));

</script>
<style>


    .accordion-group li:nth-child(4) .accordion-overlay {
        background-color: #5AAED6;
        opacity: 0.8;
    }

    .accordion-group li:nth-child(4).out .accordion-overlay {
        background-color: #5AAED6;
        opacity: 0;
    }

    .accordion-group li:nth-child(3) .accordion-overlay {
        background-color: #236b8d;
        opacity: 0.8;
    }

    .accordion-group li:nth-child(3).out .accordion-overlay {
        background-color: #236b8d;
        opacity: 0;
    }

    .accordion-group li:nth-child(2) .accordion-overlay {
        background-color: #FF3A3A;
        opacity: 0.8;
    }

    .accordion-group li:nth-child(2).out .accordion-overlay {
        background-color: #FF3A3A;
        opacity: 0;
    }

    .accordion-group li:nth-child(1) .accordion-overlay {
        background-color: #ed0000;
        opacity: 0.8;
    }

    .accordion-group li:nth-child(1).out .accordion-overlay {
        background-color: #ed0000;
        opacity: 0;
    }

    .accordion-group {
        overflow: hidden;
        margin: 0 auto;
        padding: 0;
        list-style: none;
        width: 100%;
        height: 500px;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .accordion-group li {
        cursor: pointer;
        position: relative;
        display: block;
        overflow: hidden;
        float: left;
        margin: 0;
        padding: 1.6em;
        list-style: none;
        width: 16.66666667%;
        height: inherit;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }

    .accordion-group li h3 {
        position: relative;
        color: #FFF;
        text-transform: uppercase;
        letter-spacing: 0.15rem;
        padding: 0;
        font-weight: 500;
        margin: 6.5rem 0 0;
    }

    .accordion-group li .accordion-overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }

    .accordion-group li section {
        display: table;
        width: 75%;
        height: auto;
        margin: 0 auto;
        min-height: 100%;
    }

    .accordion-group li section {
        width: 100%;
    }

    .accordion-group li section article {
        display: table-cell;
        vertical-align: middle;
        padding: 4rem;
        position: relative;
        right: -200%;
        -webkit-transition: all 250ms ease-in-out;
        -moz-transition: all 250ms ease-in-out;
        transition: all 250ms ease-in-out;
    }

    .accordion-group li section article p {
        padding: 1.6rem;
        color: #333;
        font-size: 1.6rem;
        letter-spacing: 0.15rem;
    }

    .accordion-group li section article p:before,
    .accordion-group li section article p:after {
        content: "";
        display: block;
        height: 1px;
    }

    .accordion-group li.out {
        width: 50%;
    }

    .accordion-group li.out section article {
        right: 0;
    }
</style>


<div class="number-hr">
    <div class="number">
        <div class="container">
            <div class="row text-center ">
                <h2 style="padding-bottom: 50px" class="col">En quelques chiffres</h2>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h3><i class="fas fa-user"></i></h3>
                    <h3>Membres du BDE</h3>
                    <div>
                        <span class="count">13</span>
                    </div>
                </div>
                <div class="col">
                    <h3><i class="fas fa-users"></i></h3>
                    <h3>Eléves</h3>
                    <div>
                        <span class="countt">+</span>
                        <span class="count">600</span>
                    </div>
                </div>
                <div class="col">
                    <h3><i class="fas fa-hands-helping"></i></h3>
                    <h3>Partenariats</h3>
                    <div>
                        <span class="countt">+</span>
                        <span class="count">2</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type='text/javascript'>
    $(document).ready(function () {
        $('#main_calendar_index').fullCalendar({
            defaultView: 'listYear',
            height: 600,

            googleCalendarApiKey: 'AIzaSyC4hlCaRtORlZoSFzgeQqQYn4nXpIgk3NA',
            eventSources: [
                {
                    googleCalendarId: 'cfa-insta.fr_mo1ajbak6lrouaffs9fj2h8quc@group.calendar.google.com',
                    className: 'gcal-event'
                },
            ],
            eventColor: '#264a80'
        });
    });
</script>


<div class="back container-fluid">

    <div class="fond">
        <span class="s1">nos evenemt </span>
        <span class="s2">de l ' année </span>
    </div>
    <div class="pad-marg-home">
        <div class="card">
            <div class="thumbnail">
                <div style="background-color: white" class="card" id="main_calendar_index"></div>
            </div>
            <div class="">


            </div>
        </div>
    </div>
</div>

<style>
    span.s1 {
        position: absolute;
        font-size: 6rem;
        font-weight: 800;
        text-transform: uppercase;
        color: #3C4447;
    }

    span.s2 {
        font-weight: 800;
        position: absolute;
        padding-top: 55%;
        font-size: 6rem;
        text-transform: uppercase;
        color: #3C4447;
    }

    .pad-marg-home {
        padding-right: 8%;
        padding-left: 8%;
    }

    .pad-marg-home {
        padding-top: 12%;
        padding-bottom: 16%;
    }

    .back {
        background-color: #353B3F;
        font-family: "Roboto", sans-serif;
    }

    /* The card */
    .card {

        background-color: #FFF;
        -webkit-box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
    }

    .thumbnail {
        margin-left: 590px;
        margin-right: 20px;
        position: relative;
        top: -80px;
        height: 100%;
        -webkit-box-shadow: 10px 10px 60px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 60px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 60px 0px rgba(0, 0, 0, 0.75);
        overflow: hidden;
    }

</style>


<div class="container-fluid">
    <div class="row">
        <div class="form-home col">

               <h3>Rejoindre le BDE ?</h3>

            <div class="row">
               <div class=" inputhome col-6">
                   <label class="inserticon-fontico-home">
                       <i class="fas fa-user"></i>
                   </label>
                   <input type="text" placeholder="Saisissez votre Prénom..." name="" class="" required
                          autofocus/>
               </div>
               <div class=" inputhome col-6 ">
                   <label class="inserticon-fontico-home">
                       <i class="fas fa-user"></i>
                   </label>
                   <input type="text" placeholder="Saisissez votre Nom..." name="" class="" required
                          autofocus/>
               </div>

            </div>
            <div class="row">
               <div class=" inputhome col-6">
                   <label class="inserticon-fontico-home">
                       <i class="fas fa-envelope"></i>
                   </label>
                   <input type="email" placeholder="Saisissez votre email..." name="" class="" required
                          autofocus/>
               </div>
               <div class=" inputhome col-6">
                   <label class="inserticon-fontico-home">
                       <i class="fas fa-phone"></i>
                   </label>
                   <input type="text" placeholder="Saisissez votre mnuméro de téléphone..." name="" class="" required
                          autofocus/>
               </div>

        </div>
            <div class="row">

                <div class="col-12 form-element form-textarea">
                    <textarea id="form-home-mes"  class="form-element-field" required></textarea>
                    <div class="form-element-bar"></div>
                    <label class="form-element-label" for="form-home-mes"><i class="fas fa-comment-alt"></i> Message de motivation</label>

                </div>
            </div>
        </div>
        <div class="col row text-center">
            <div class="col-6 facebook">
                <a href="https://www.facebook.com/bdeinsta/">
                    <i style="color: white" class="fab fa-4x fa-facebook"></i>
                </a>
            </div>
            <div class="col-6 instagram">
                <a  href="https://www.instagram.com/bde.cfa.insta/?hl=fr">
                    <i style="color: white" class="fab fa-4x fa-instagram"></i>
                </a>
            </div>
            <div class="col-12 discord">
                <a  href="https://discord.gg/vJ9c3Br">
                    <i style="color: white" class="fab fa-4x fa-discord"></i>
                </a>
            </div>

        </div>

    </div>
</div>

    <style>






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









        .facebook {
            cursor: pointer;
            background: #155b9d;
        }

        .discord {
            cursor: pointer;
            background: #7289da;
        }

        .instagram {
            cursor: pointer;
            background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%),
            radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%),
            radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%),
            radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%),
            radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%),
            radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%),
            radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent),
            linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
        }


    </style>
