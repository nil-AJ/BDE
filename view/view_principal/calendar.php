<style>
    .calendar {
        padding-top: 100px;
    }

</style>

<script type='text/javascript'>
    $(document).ready(function () {
        $('#main_calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
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

<div class="calendar">
    <div class="container">
        <div id="main_calendar"></div>
    </div>
</div>
