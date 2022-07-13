(function(win,doc){
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div)
    {
        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',

            headerToolbar:{
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },
            titleFormat: {month: 'short'},
            buttonText:{
                today:    'hoje',
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            locale:'pt-br',
            weekText: 'S',
            weekTextLong: 'Semana',
            closeHint: 'Fechar',
            timeHint: 'Hora',
            eventHint: 'Evento',
            allDayText: 'dia',
            moreLinkText: 'mais',
            noEventsText: 'Sem eventos para mostrar',
            businessHours: {
              // days of week. an array of zero-based day of week integers (0=Sunday)
              daysOfWeek: [ 1, 2, 3, 4, 5 ], // Monday - Thursday

              startTime: '08:00', // a start time (10am in this example)
              endTime: '18:00', // an end time (6pm in this example)
            },
            weekends: false,
            slotMinTime: "08:00:00",
            slotMaxTime: "18:00:00",
            slotDuration: "00:20:00",
            slotLabelInterval: "00:20:00",
            slotLabelFormat: {
              hour: 'numeric',
              minute: '2-digit',
              omitZeroMinute: false,
              meridiem: 'short'
            },
            dayMaxEvents: true,
            selectOverlap: false,
            validRange: function(nowDate) { //inicia o calendario na data atual
                return {
                  start: nowDate
                };
            },
            dateClick: function(info) {
                if(perfil == 'manager'){
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        win.location.href='/class/funcionario/adicionar.php?date='+info.dateStr;
                    }
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGrid', info.dateStr);
                    }else{
                        win.location.href='/class/reservas/formulario.php?date='+info.dateStr;
                    }
                }
                /*alert('Clicked on: ' + info.dateStr);
                alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                alert('Current view: ' + info.view.type);*/
            },
            events: '/class/reservas/eventos.php',
            eventClick: function(info) {
                if(perfil == 'manager'){
                    win.location.href=`/class/funcionario/editar.php?id=${info.event.id}`;
                }
            },
            /*eventMouseEnter: function(info) {
                if(perfil == 'manager'){
                    swal("Hello world!");
                }
            }*/
            eventDidMount: function(info) {
                if (info.event.title === 'agendado') {
                    if(perfil == 'manager'){
                    info.el.style.backgroundColor = '#f0f0f0';
                    }

                } 
            }
        });
        calendar.render();
    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user','.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager','.calendarManager');
    }

})(window,document);