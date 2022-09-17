setInterval(showTime, 1000);
function showTime() {
    let time = new Date();
    let date = time.getDate();
    let d = time.getDay();
    let month = "";
    let m = time.getMonth();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    let day = "";
    am_pm = "AM";

    if (d == 1) {
        day = "Monday";
    }
    if (d == 2) {
        day = "Tuesday";
    }
    if (d == 3) {
        day = "Wednesday";
    }
    if (d == 4) {
        day = "Thursday";
    }
    if (d == 5) {
        day = "Friday";
    }
    if (d == 6) {
        day = "Sat";
    }
    if (d == 7) {
        day = "Sunday";
    }


    if (m == 0) {
        month = "Jan";
    }
    if (m == 1) {
        month = "Feb";
    }
    if (m == 2) {
        month = "Mar";
    }
    if (m == 3) {
        month = "Apr";
    }
    if (m == 4) {
        month = "May";
    }
    if (m == 5) {
        month = "Jun";
    }
    if (m == 6) {
        month = "Jul";
    }
    if (m == 7) {
        month = "Aug";
    }
    if (m == 8) {
        month = "Sep";
    }
    if (m == 9) {
        month = "Oct";
    }
    if (m == 10) {
        month = "Nov";
    }
    if (m == 11) {
        month = "Dec";
    }

    if (hour > 12) {
        hour -= 12;
        am_pm = "PM";
    }
    if (hour == 0) {
        hr = 12;
        am_pm = "AM";
    }

    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    let currentTime = hour + ":"
        + min + ":" + sec + am_pm;

    document.getElementById("clock")
        .innerHTML = currentTime;
    document.getElementById("date")
        .innerHTML = date;
    document.getElementById("day")
        .innerHTML = day;
    document.getElementById("month")
        .innerHTML = month;
}
showTime();
