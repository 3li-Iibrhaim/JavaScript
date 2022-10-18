

locations = new Array();
var num = 1;
var map;
let status = '';

function UserAction() {
  locations.length = 0;
  num = 1;
  var Twitter_user = document.getElementById('name').value;
  var xhttp = new XMLHttpRequest();
  console.log(Twitter_user);
  xhttp.open("GET", "http://localhost:3000/twitteroauth-master/get-tweets1.1.php?user_name=" + Twitter_user, true);

  // twitteroauth-master\get-tweets1.1.php
  xhttp.send();
  // twitteroauth-master\get-tweets1.1.php?q=see_3li"
  xhttp.onreadystatechange = async function () {

    // 200: "OK"
    // 403: "Forbidden"
    // 404: "Page not found"
    // 0: request not initialized
    // 1: server connection established
    // 2: request received
    // 3: processing request
    // 4: request finished and response is ready

    if (this.readyState == 0 || this.status == 404 || this.status == 403) {
      alert('Can\'t Load , please try again later');
    };

    if (this.readyState == 4 && this.status == 200) {

      // alert(this.response);

      var json_response = this.responseText;
      // get all json in obj
      var obj = JSON.parse(json_response);

      //**json proceessing extract information from file//


      // *** get all information


      // list of followers locations
      var followers_location = [];
      var followers_locations = [];

      // loop throu followers location and extraxt the 19 followers location
      for (let i = 0; i < 18; i++) {
        followers_location[i] = obj.users[i].location;
      }

      // check if locatinon is null
      for (let i = 0; i < 18; i++) {
        // chek if location is null
        if (followers_location[i] === "") {
          continue;
        }
        followers_locations.push(followers_location[i]);
      }

      // get_location(followers_locations[1]);

      for (let i = 0; i < 15; i++) {
        get_location(followers_locations[i]);
      }
      // get_location(followers_locations[1]);
      // get_location(followers_locations[2]);
      // get_location(followers_locations[3]);
      // get_location(followers_locations[4]);
      // get_location(followers_locations[5]);
      // get_location(followers_locations[6]);
      // get_location(followers_locations[7]);
      // get_location(followers_locations[8]);








      // var x = get_location(followers_locations[2]);

      // initMap();


    }
  }
}


/// *** RESPOSNS DATA IN XML FORMAT ****////


function get_location(city) {
  // var followers_location = lists;
  // console.log(followers_location);

  // loop throu the wikipediaSearch and get the sumarry and city and latitude and longitude
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "http://api.geonames.org/wikipediaSearch?q=" + city + "&maxRows=10&username=hisham", true);
  xmlhttp.send();



  xmlhttp.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {

      // alert(this.responseText);
      var xml_response = this.responseText;

      //parsing xml file
      var parser = new DOMParser();
      var xmlDoc = parser.parseFromString(xml_response, "text/xml");
      // city name
      // var city_name = xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue;
      // longitude and latitude
      var latitude = xmlDoc.getElementsByTagName("lat")[0].childNodes[0].nodeValue;
      var longitude = xmlDoc.getElementsByTagName("lng")[0].childNodes[0].nodeValue;
      // city summary
      var summary = xmlDoc.getElementsByTagName("summary")[0].childNodes[0].nodeValue;

      // get on location
      var location = [String(summary), Number(latitude), Number(longitude)];
      // console.log(location)
      locations.push(location);



      if (num == 1) {
        // console.log(num);
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          // center: new google.maps.LatLng(-33.92, 151.25),
          center: new google.maps.LatLng(location[1], location[2]),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        num += 1;
      }
      console.log(num);

      var infowindow = new google.maps.InfoWindow();

      status = location[0]; // set location to status

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(location[1], location[2]),
        animation: google.maps.Animation.BOUNCE,
        map: map
      });
      google.maps.event.addListener(marker, 'click', (function (marker) {
        
        return function () {
          infowindow.setContent(location[0]);
          infowindow.open(map, marker);
          
        }
      })(marker));


    }
  }

}

function share() {


  FB.api(
    '/100860729433308/feed',
    'POST',
    {"message":"number6"},
    function(response) {
        console.log(response);
    }
  );

  // FB.api(
  //   '/100860729433308/feed',
  //   'POST',
  //   {"message":status},


  //   function(response) {
  //       console.log(response);
  //   }
  // );
  
  

  // FB.api('/me', {fields: 'last_name'}, function(response) {
  //   console.log(response);
  // });
  // FB.login(function(response) {
  //     if (response.authResponse) {
  //      console.log('Welcome!  Fetching your information.... ');
  //      FB.api('/me', function(response) {
  //        console.log('Good to see you, ' + response.name + '.');
  //      });
  //     } else {
  //      console.log('User cancelled login or did not fully authorize.');
  //     }
  // });

  // var url = "https://reqbin.com/echo";

  // var xhr = new XMLHttpRequest();
  // xhr.open("GET", url);

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState === 4) {
  //     console.log(xhr.status);
  //     console.log(xhr.responseText);
  //   }
  // };

  // xhr.send();

}







// function initMap() {
//   var marker;

//   function placeMarker() {
//     if (marker == null) {
//       marker = new google.maps.Marker({
//         position: new google.maps.LatLng(-25.363, 131.044),
//         map: map
//       });
//     }
//     else {
//       marker.setPosition(location);
//     }
//   }

//   var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 1,
//     center: new google.maps.LatLng(-33.92, 151.25),
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   });


//   google.maps.event.addListener(map, 'click', function (event) {

//     for (i = 0; i < locations.length; i++) {

//       marker = new google.maps.Marker({
//         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
//         map: map
//       });
//       google.maps.event.addListener(marker, 'click', (function (marker, i) {
//         return function () {
//           infowindow.setContent(locations[i][0]);
//           infowindow.open(map, marker);
//         }
//       })(marker, i));
//     }
//   });

//   var infowindow = new google.maps.InfoWindow();

// }

window.initMap = initMap;