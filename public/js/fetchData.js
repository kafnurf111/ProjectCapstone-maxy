document.addEventListener('DOMContentLoaded', async function () {
    try {
        const { Calendar } = await import('https://cdn.skypack.dev/@fullcalendar/core@6.1.12');
        const dayGridPlugin = await import('https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.12');
        const timeGridPlugin = await import('https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.12');

        const calendarEl = document.getElementById('calendar');
        const calendar = new Calendar(calendarEl, {
            timeZone: 'UTC',
            plugins: [dayGridPlugin.default, timeGridPlugin.default],
            headerToolbar: {
                left: '',
                center: 'title',
                right: 'timeGridFourDay'
            },
            initialView: 'timeGridFourDay',
            views: {
                timeGridFourDay: {
                    type: 'timeGrid',
                    duration: { days: 3 },
                    buttonText: '3 Days'
                }
            },

            events: await fetchTasks(),
            eventClick: function (info) {
                openPopupTasksEvent(info.event);
            },
            eventDidMount: function (info) {
                // Atur border hanya di bagian kiri
                info.el.style.borderLeft = `${info.event.extendedProps.borderColor}`;
                info.el.style.borderTop = 'none';
                info.el.style.borderRight = 'none';
                info.el.style.borderBottom = 'none';
                info.el.style.borderWidth = '2px';
                info.el.style.borderStyle = 'solid';
            }
        });
        calendar.render();
    } catch (error) {
        console.error('Error loading FullCalendar:', error);
    }

    async function fetchTasks() {
        try {
            const response = await fetch('http://127.0.0.1:8000/api/tasks');
            const data = await response.json();
            return data.map(event => ({
                id: event.task_id,
                title: event.name,
                start: event.start,
                end: event.finish,
                person: event.person,
                detail: event.detail,
                extendedProps: {
                    person: event.person,
                    detail: event.detail,
                    completed: event.completed || false
                },
                color: event.completed ? '#C8D2FF' : event.color,
                textColor: event.completed ? '#1533B5' : '#F13C20',
                borderColor: event.completed ? '#1533B5' : '#F13C20',
                // color: event.color,
                // textColor: '#F13C20',
                // borderColor: '#F13C20',
            }));
        } catch (error) {
            console.error('Error fetching tasks:', error);
            return [];
        }
    }
    fetchTasks();

});
