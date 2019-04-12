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
                    <h3 class="num-red"><i class="fas fa-user"></i></h3>
                    <h3>Membres du BDE</h3>
                    <div>
                        <span class="count">13</span>
                    </div>
                </div>
                <div class="col">
                    <h3 class="num-red"><i class="fas fa-users"></i></h3>
                    <h3>Eléves</h3>
                    <div>
                        <span class="countt">+</span>
                        <span class="count">600</span>
                    </div>
                </div>
                <div class="col">
                    <h3 class="num-red"><i class="fas fa-hands-helping"></i></h3>
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
        <div class=" row text-center">
            <div class="col-4 facebook">
                <a href="https://www.facebook.com/bdeinsta/">
                    <i style="color: white" class="fab fa-4x fa-facebook"></i>
                </a>
            </div>
            <div class="col-4 discord">
                <a  href="https://discord.gg/vJ9c3Br">
                    <i style="color: white" class="fab fa-4x fa-discord"></i>
                </a>
            </div>
            <div class="col-4 instagram">
                <a  href="https://www.instagram.com/bde.cfa.insta/?hl=fr">
                    <i style="color: white" class="fab fa-4x fa-instagram"></i>
                </a>
            </div>
        </div>
</div>

    <style>

        .facebook{
            padding-top: 2%;
            padding-bottom: 2%;
            transition: 1s;
            cursor: pointer;
            background-color: #656869;
        }

        .facebook:hover {
            cursor: pointer;
            background: #155b9d;
        }
        .discord{
            padding-top: 2%;
            padding-bottom: 2%;
            transition: 1s;
            cursor: pointer;
            background-color: #656869;
        }

        .discord:hover {
            transition: 1s;
            cursor: pointer;
            background: #7289da;
        }
        .instagram{
            padding-top: 2%;
            padding-bottom: 2%;
            transition: 1s;
            cursor: pointer;
            background-color: #656869;
        }

        .instagram:hover {

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
