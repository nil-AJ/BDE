<br/>
<br/>
<br/><br/>
<br/><br/>
<br/>
<br/><br/>
<br/>


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
<div class="calander-home">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col text-home text-center">
                <i class="far fa-2x fa-calendar-alt"></i>
                <strong>
                    <p> Nos évenement</p>
                    <p>de l'année :</p>
                </strong>
            </div>
            <div class="col">
                <div id="main_calendar_index"></div>
            </div>
        </div>

    </div>
</div>
