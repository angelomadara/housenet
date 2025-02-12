import { Calendar } from "fullcalendar";

document.addEventListener("DOMContentLoaded", function () {
    const calendarEl = document.getElementById("event-calendar");
    const calendar = new Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: "/events",
    });
    calendar.render();
});
