function TimeTable(msg) {
  var date = msg[0].RouteDirections[0].Departures.length;
  if (date != 0) {
    var eta = msg[0].RouteDirections[0].Departures[0].ETA;
    var a = new Date(eta * 1000);
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
    console.log(time);
    document.getElementById("timetable").innerHTML = time;
  } else {
    console.log("There are no scheduled departures.");
    document.getElementById("timetable").innerHTML = "There are no scheduled departures.";
  }
}