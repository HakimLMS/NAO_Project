function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12        
        });
        var infoWindow = new google.maps.InfoWindow;
        
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
            setPosition();
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        
                 // Change this depending on the name of your PHP or XML file
          downloadUrl('http://loiseau-rare.e-naumad.fr/build/js/MapHandler.php' ,function(data) {
            var xml = data.responseXML;
            var markers = document.getElementsByTagName('marker');
            var gmarkers =[];
            
            
            
            
            
              Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));
               
                var latElts = document.getElementById('observation_lat'); 
                latElts.value = parseFloat(markerElem.getAttribute('lat'));
                var lngElts = document.getElementById('observation_lng');
                lngElts.value = parseFloat(markerElem.getAttribute('lng'));
                  
              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = 'O';
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label,
                type: type
              });
                
                var type = document.getElementById('selectType');console.log(marker.type);
                if(marker.type ==  type.value || type.value == 'All')
                {
                    marker.setVisible(true);
                }
                else
                {
                    
                    marker.setVisible(false);
                }

              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              }); 
            });     
        });
        
        }
        
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        }



function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };        
        request.open('GET', url, true);
        request.send(null);
      }

window.onload = initMap();     


      function doNothing() {}

   