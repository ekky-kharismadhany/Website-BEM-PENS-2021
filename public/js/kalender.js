console.log(JSON.parse(events));
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('showKaleder');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: JSON.parse(events)
    });
    calendar.render();
});