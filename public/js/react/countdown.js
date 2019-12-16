var id = "countdown";
var datum = document.getElementById(id).getAttribute('name');
var end = new Date(datum+' 00:00 AM');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {

        clearInterval(timer);
        document.getElementById(id).innerHTML = '<strong>UKONČENÉ!</strong>';
        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    switch (days) {
        case 1 :
            document.getElementById(id).innerHTML = days + ' deň, ';
            break;
        case 2:
        case 3:
        case 4:
            document.getElementById(id).innerHTML = days + ' dni, ';
            break;
        default: document.getElementById(id).innerHTML = days + ' dní, ';
            break;
    }

    switch (hours) {
        case 1 :
            document.getElementById(id).innerHTML += hours + ' hodinu, ';
            break;
        case 2:
        case 3:
        case 4:
            document.getElementById(id).innerHTML += hours + ' hodiny, ';
            break;
        default: document.getElementById(id).innerHTML += hours + ' hodín, ';
            break;
    }

    switch (minutes) {
        case 1 :
            document.getElementById(id).innerHTML += minutes + ' minútu a ';
            break;
        case 2:
        case 3:
        case 4:
            document.getElementById(id).innerHTML += minutes + ' minúty a ';
            break;
        default: document.getElementById(id).innerHTML += minutes + ' minút a ';
            break;
    }

    switch (seconds) {
        case 1 :
            document.getElementById(id).innerHTML += seconds + ' sekundu.';
            break;
        case 2:
        case 3:
        case 4:
            document.getElementById(id).innerHTML += seconds + ' sekundy.';
            break;
        default: document.getElementById(id).innerHTML += seconds + ' sekúnd.';
            break;
    }
    document.getElementById("login_vyzva_button").style.visibility = "visible";
}

timer = setInterval(showRemaining, 1000);