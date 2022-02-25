@extends("backoffice.template.template")

@section("content")


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

</head>

<body>



    <form class="form-group row" action="{{route('getcalendarbycityorcountry')}}" method="GET"
        enctype="multipart/form-data">
        <div class="col-sm-1">
        </div>
        <label for="inputEmail3" class="col-sm-2 col-form-label">Country Or City Name</label>

        <div class="col-sm-6">
            <input type="text" name="nom" value="" class="form-control" id="inputEmail3" placeholder="Name">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-info .float-sm-right">Search</button>
        </div>
    </form>
    <br>
    <br>
    <div class="container">

        <div id="calendar"></div>

    </div>





    <script>
    jQuery(document).ready(function() {
        jQuery("#add-event").submit(function() {
            alert("Submitted");
            var values = {};
            $.each($('#add-event').serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });
            console.log(
                values
            );
        });
    });

    (function() {
        'use strict';
        // ------------------------------------------------------- //
        // Calendar
        // ------------------------------------------------------ //
        jQuery(function() {
            var list = <?php echo json_encode($seanceslist); ?>;
            // page is ready
            jQuery('#calendar').fullCalendar({
                themeSystem: 'bootstrap4',
                // emphasizes business hours
                businessHours: false,
                defaultView: 'month',
                // event dragging & resizing
                editable: false,


                eventDidMount: function(info) {
                    var tooltip = new Tooltip(info.el, {
                        title: info.event.extendedProps.description,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body'
                    });
                },
                eventMouseover: function(calEvent, jsEvent) {
                    var tooltip =
                        '<div class="tooltipevent" style="width:100px;height:100px;position:absolute;z-index:10001;">' +
                        calEvent.title + '</div>';
                    var $tooltip = $(tooltip).appendTo('body');

                    $(this).mouseover(function(e) {
                        $(this).css('z-index', 10000);
                        $tooltip.fadeIn('500');
                        $tooltip.fadeTo('10', 1.9);
                    }).mousemove(function(e) {
                        $tooltip.css('top', e.pageY + 10);
                        $tooltip.css('left', e.pageX + 20);
                    });
                },

                eventMouseout: function(calEvent, jsEvent) {
                    $(this).css('z-index', 8);
                    $('.tooltipevent').remove();
                },

                // header
                header: {
                    left: 'title',
                    center: 'month,agendaWeek,agendaDay',
                    right: 'today prev,next'
                },
                events: list,
                dayClick: function(date, allDay, jsEvent, view) {
                    console.log('date' + date.format('DD/MMM/YYYY') + "allDay" + allDay.title +
                        "jsEvent" + jsEvent + "view" + view)
                },
                eventClick: function(event, jsEvent, view) {
                    jQuery('.event-icon').html("<i class='fa fa-" + event.icon + "'></i>");
                    jQuery('.event-title').html(event.title);
                    jQuery('.event-body').html(event.description);
                    jQuery('.eventUrl').attr('href', event.url);
                    jQuery('#modal-view-event').modal();
                },
            })
        });

    })(jQuery);
    </script>

    @endsection