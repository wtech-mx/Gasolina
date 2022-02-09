@section('fullcalendar')

    <link href='{{ asset('assets/css/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('assets/js/main.js') }}'></script>

    @php
    $Y = date('Y') ;
    $M = date('m');
    $D = date('d') ;
    $Fecha = $Y."-".$M."-".$D;
   @endphp

    <script>

      document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

        height: 'auto',
        initialDate: '{{$Fecha}}',
        initialView: 'dayGridMonth',
        navLinks: false,
        editable: true,
        dayMaxEvents: 3,

            headerToolbar:{
              left:'prev,next today',
              center:'title',
              right: 'listMonth,dayGridMonth'
            },

          views: {
            dayGridMonth: {
                buttonText: 'MES'
            },
            listMonth: {
                buttonText: 'LISTA'
            }
          },

        });
        calendar.render();
      });

    </script>
@endsection
