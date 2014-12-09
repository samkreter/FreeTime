var $this = $('#calendar');
$this.fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'agendaDay'
    },
    defaultView: 'agendaDay',
    editable: true,
    events: {
        url: '/schedules',
        type: 'GET',
        error: function() {
            console.log('there are no events for this day');
        },
        color: 'yellow',   // a non-ajax option
        textColor: 'black',
        success: function(data) {
            $("body").attr('attr-schedule-id', data[0].title);
        }
    }
})  ;
