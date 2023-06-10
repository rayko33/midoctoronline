document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale:'es',
        timeZone: 'local',
        initialView: 'dayGridMonth',
        headerToolbar:{
            left:'dayGridMonth,timeGridWeek,list',
            center:'title',
            right:'prev,next today'
        }
    });
    calendar.render();
  });