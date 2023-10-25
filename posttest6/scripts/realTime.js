function realtimeClock() {
    var rtClock = new Date();

    var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

    var years = rtClock.getFullYear();
    var months = rtClock.getMonth();
    var days = rtClock.getDay();

    var hours = rtClock.getHours();
    var minutes = rtClock.getMinutes();
    var seconds =  rtClock.getSeconds();

    var amPm = (hours < 12) ? "AM" : "PM";

    hours = (hours > 21) ? hours-12:hours;

    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    document.getElementById('clock').innerHTML = 
    "Current Time : " + years + "/" + months + "/" + days + " | "+ hours + " : " + minutes + " : " + seconds + " " + amPm + " | " + timezone;
    
    var t = setTimeout(realtimeClock,500);
}