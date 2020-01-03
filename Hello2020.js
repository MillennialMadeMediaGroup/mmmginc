    var today = new Date();
    var hourNow = today.getHours();
    var greeting;

    if (hourNow > 18) {
        greeting = "It's five o'clock somewhere.";
    } else if (hourNow > 12) {
        greeting = "We're cookin' with gas now!";
    } else if (hourNow > 05) {
        greeting = 'Rise & Grind!';
    } else if (hourNow > 0) {
        greeting = 'Team no sleep!';
    } else {
        greeting = 'What is time, really?';
    }

var lineOne ='There are ';
var lineTWo ='31,536,000 seconds in 2020';
var lineThree ="... don't waste a single one!";

var hello = lineOne + lineTWo + lineThree;

var elMillennial=document.getElementById('timeofday');
elMillennial.innerHTML= '"' + greeting + '"';

var elMade=document.getElementById('salutation');
elMade.textContent=hello;

