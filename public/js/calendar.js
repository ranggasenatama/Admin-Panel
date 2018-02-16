(function($){'use strict';$(function(){$('#external-events .fc-event').each(function(){$(this).data('event',{title:$.trim($(this).text()),stick:true});$(this).draggable({zIndex:999,revert:true,revertDuration:0});});


        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function () {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            }
        });

    });
}(jQuery));