<!DOCTYPE html>
<html>

<head>
  <title> TCAT </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>

<body>

  <div id="header">
    <img alt="tcat_logo" src="images/tcat_logo.png">
  </div>

  <nav>
    <ul>
      <li><button><a href="Route30.html">Route 30</a></button></li>
      <li><button><a href="Route72.html">Route 72</a></button></li>
      <li><button>Route 89</button></li>
      <li><button><a href ="GreenSt.html">Green Street</a></button></li>
      <li><button><a href="Buses.html">Buses</a></button></li>
    </ul>
  </nav>

  <div id="api_calls">
    <p>This is an API call.</p>
    <p>This is another API call.</p>
  </div>

  <div id="bus_times">
    <ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type='text/javascript'>
    // $(document).ready(function(){
    //    $.ajax({
    //           url: 'https://gateway.api.cloud.wso2.com:443/t/mystop/tcat/v1/rest/Vehicles/GetAllVehicles',
    //           type: 'GET',
    //           dataType: 'application/json',
    //           success: function() { alert('Worked'); },
    //           error: function() { alert('Did not work'); },
    //           beforeSend: setHeader (xhr)
    //         });
    //       });
    //       function setHeader(xhr) {
    //         xhr.setRequestHeader('Accept', 'application/json')
    //         xhr.setRequestHeader('Authorization', 'Bearer e5159b89-86c1-3cca-8412-59de037c674b')
    //       };
    // };

    $(document).ready(function () {
    var token = 'Bearer e5159b89-86c1-3cca-8412-59de037c674b';
    $.ajax({

      url: 'https://gateway.api.cloud.wso2.com:443/t/mystop/tcat/v1/rest/Vehicles/GetAllVehicles',
      type: 'GET',
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader("Authorization", token);
      },
      //data: 'json=' + escape(JSON.stringify(createRequestObject)),
      success: function(msg) {
        var data = JSON.stringify(msg);
        console.log(msg);
        //alert('success'+data);
        $("#orders").text(data);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert(errorThrown);
      }
    // }).done(function(data) {
    //  alert(data);
    });

    });

    </script>

      <li>The next Route 30 bus will be arriving in y minutes.</li>
    </ul>
  </div>
  <div id='orders'></div>
</body>
</html>