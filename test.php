<!DOCTYPE html>
<html lang='en'>
<head>
 

 <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
 <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />

 <script src='fullcalendar/packages/core/main.js'></script>
 <script src='fullcalendar/packages/daygrid/main.js'></script>
 <script src='fullcalendar/packages/google-calendar/main.js'></script>
 <script>
 document.addEventListener('DOMContentLoaded', function() {
             var calendarEl = document.getElementById('calendar');
           
             var calendar = new FullCalendar.Calendar(calendarEl, {
                     plugins: ['dayGrid', 'googleCalendar','list'],
                     googleCalendarApiKey: 'AIzaSyD-eos3wE0wJ3UK1OI7raNLzJCh0EgUAW0',
                     events: {
                         googleCalendarId: 'inquiry.ffg@gmail.com'}
                     });

                 calendar.render();
             });
 </script>
</head>
  <body>

    <div id='calendar'></div>

  </body>
</html>