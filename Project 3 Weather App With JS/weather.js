// function show() {
//   var result = document.getElementById('resultsarea');
//   result.style.height = "450px";
//   result.style.visibility = "visible";
// document.getElementById('shar').style.visibility = 'visible';

// }



function UserAction() {

  var country = document.getElementById("country").value;
  // console.log(country);
  var xhttp = new XMLHttpRequest();

  // https://api.openweathermap.org/data/2.5/weather?q=London&mode=xml&appid=2c8b48021e2f8d1ff6bebedad97a7097
  //http://api.openweathermap.org/geo/1.0/direct?q=omdurman&appid=2c8b48021e2f8d1ff6bebedad97a7097
  // https://api.openweathermap.org/data/2.5/onecall?lat=51.5073219&lon=0.1276474&appid=2c8b48021e2f8d1ff6bebedad97a7097

  /// *** RESPOSNS DATA IN XML FORMAT ****////

  var apiKey = "2c8b48021e2f8d1ff6bebedad97a7097";
  var Url = "https://api.openweathermap.org/data/2.5/weather?q=" + country + "&mode=xml&appid=" + apiKey;

  xhttp.open("GET", Url, true);
  xhttp.send();


  xhttp.onreadystatechange = function () {

    // if any error.
    if (this.readyState == 0 || this.status == 404 || this.status == 403) {
      alert('please insert country that exist 😐');
      var result = document.getElementById('resultsarea');
      result.style.height = "10px";
      result.style.visibility = "hidden";

    };

    if (this.readyState == 4 && this.status == 200) {
      // alert(this.responseText);
      // gett data in xml format
      var xml_response = this.responseText;
      // document.write();
      // alert(typeof xml_response);


      // *** XML FORMAT ///

      //parsing xml file
      parser = new DOMParser();
      xmlDoc = parser.parseFromString(xml_response, "text/xml");
      var city = xmlDoc.getElementsByTagName("city")[0].getAttribute('name');
      // longitude and latitude
      var coord = xmlDoc.getElementsByTagName("coord")[0];
      // console.log(city);

      // *** I will use this lan and lat in json format

      longitude = coord.getAttribute('lon');
      latitude = coord.getAttribute('lat');

      // console.log(longitude);
      // console.log(latitude);

      // ****  END OF XML PROCCESING****/////


      // *** RESPOSNS DATA IN JSON FORMAT ****////
      var URL_JSON = "https://api.openweathermap.org/data/2.5/onecall?lat="
        + latitude + "&lon=" + longitude + "&appid=" + apiKey + "&units=metric";// to get tempur in celsius

      xhttp.open("GET", URL_JSON, true);
      xhttp.send();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var json_response = this.responseText;
          // get all json in obj
          var obj = JSON.parse(json_response);

          //**json proceessing extract information from file//


          // *** get all information

          // get current data
          t_timezone = obj.timezone;
          temperature = obj.current.temp;
          cloudy = obj.current.weather[0].main;
          description = obj.current.weather[0].description;
          humidity = obj.current.humidity;
          wind_speed = obj.current.wind_speed;
          timezone = obj.timezone;
          timezone_offset = obj.timezone_offset;

          //forcast for next day 
          day1 = obj.daily[0].temp.day;
          day2 = obj.daily[1].temp.day;
          day3 = obj.daily[2].temp.day;
          day4 = obj.daily[3].temp.day;
          day5 = obj.daily[4].temp.day;

          // console.log(cloudy,description,humidity,wind_speed,day5);

          // ** put the data in html tag//
          document.getElementById('city').innerHTML = "Weather in " + city;
          document.getElementById('temp').innerHTML = Math.round(temperature) + "°C"; //Math.round(3.2); // 3
          document.getElementById('Cloudy').innerHTML = cloudy;
          document.getElementById('discription').innerHTML = "Discription   :" + description;
          document.getElementById('humidity').innerHTML = "Humidity: " + humidity + "%";
          document.getElementById('wind').innerHTML = "Wind speed: " + wind_speed + " km/h";
          
          document.body.style.backgroundImage =
          "url('https://source.unsplash.com/1600x900/?" + city + "')";

          //days
          document.getElementById('day2').innerHTML = "Thuesday  ☀️" + Math.round(day1) + "°C";
          document.getElementById('day3').innerHTML = "Wednesday ☀️" + Math.round(day2) + "°C";
          document.getElementById('day4').innerHTML = "Thursday  ☀️" + Math.round(day3) + "°C";
          document.getElementById('day5').innerHTML = "Friday   ☀️" + Math.round(day4) + "°C";
          document.getElementById('day6').innerHTML = "Saturday ☀️" + Math.round(day5) + "°C";

          //put time

          var current = new Date().toDateString('en-US',{timeZone: t_timezone});
          var date_time = new Date().toLocaleString('en-US',{timeZone: t_timezone});
          document.getElementById('time').innerHTML = current+date_time;
          
          console.log(current, date_time);

          // show the result
          var result = document.getElementById('resultsarea');

          result.style.height = "470px";
          result.style.visibility = "visible";

        };

      }


    };



  }
}
