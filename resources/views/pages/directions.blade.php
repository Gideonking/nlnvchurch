@extends('layouts.master')

@section('content')

<div class="col-sm-10 col-sm-offset-1 welcome-map-container">
  <div class="welcome-map"></div>
  <script>
    var geocoder;
    var map;
    var address ="2472 Walnut Ave, Tustin, CA 92780";

    function initMap() {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(33.7179887, -117.8096948,21),
          myOptions = {
            zoom: 14,
            center: latlng,
            mapTypeControl: false,
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };

      map = new google.maps.Map(document.getElementsByClassName("welcome-map")[0], myOptions);

      if (geocoder) {
        geocoder.geocode({ 'address': address }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
              map.setCenter(results[0].geometry.location);

              var infowindow = new google.maps.InfoWindow({
                content: '<div class="welcome-map-direction"><a href="https://www.google.com/maps/dir/New+Life+New+Vision+Church,+2472+Walnut+Ave,+Tustin,+CA+92780" target="_blank">Get Directions</a></div>',
                size: new google.maps.Size(150,50)
              });

              var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map,
                title: 'New Life New Vision Church'
              });

              var styledMapType = new google.maps.StyledMapType(
                [
                  {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#6195a0"
                      }
                    ]
                  },
                  {
                    "featureType": "administrative.province",
                    "elementType": "geometry.stroke",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                      {
                        "lightness": "0"
                      },
                      {
                        "saturation": "0"
                      },
                      {
                        "color": "#f5f5f2"
                      },
                      {
                        "gamma": "1"
                      }
                    ]
                  },
                  {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [
                      {
                        "lightness": "-3"
                      },
                      {
                        "gamma": "1.00"
                      }
                    ]
                  },
                  {
                    "featureType": "landscape.natural.terrain",
                    "elementType": "all",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                      {
                        "color": "#bae5ce"
                      },
                      {
                        "visibility": "on"
                      }
                    ]
                  },
                  {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                      {
                        "saturation": -100
                      },
                      {
                        "lightness": 45
                      },
                      {
                        "visibility": "simplified"
                      }
                    ]
                  },
                  {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                      {
                        "visibility": "simplified"
                      }
                    ]
                  },
                  {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                      {
                        "color": "#fac9a9"
                      },
                      {
                        "visibility": "simplified"
                      }
                    ]
                  },
                  {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [
                      {
                        "color": "#4e4e4e"
                      }
                    ]
                  },
                  {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#787878"
                      }
                    ]
                  },
                  {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                      {
                        "visibility": "off"
                      }
                    ]
                  },
                  {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                      {
                        "visibility": "simplified"
                      }
                    ]
                  },
                  {
                    "featureType": "transit.station.airport",
                    "elementType": "labels.icon",
                    "stylers": [
                      {
                        "hue": "#0a00ff"
                      },
                      {
                        "saturation": "-77"
                      },
                      {
                        "gamma": "0.57"
                      },
                      {
                        "lightness": "0"
                      }
                    ]
                  },
                  {
                    "featureType": "transit.station.rail",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "color": "#43321e"
                      }
                    ]
                  },
                  {
                    "featureType": "transit.station.rail",
                    "elementType": "labels.icon",
                    "stylers": [
                      {
                        "hue": "#ff6c00"
                      },
                      {
                        "lightness": "4"
                      },
                      {
                        "gamma": "0.75"
                      },
                      {
                        "saturation": "-68"
                      }
                    ]
                  },
                  {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                      {
                        "color": "#eaf6f8"
                      },
                      {
                        "visibility": "on"
                      }
                    ]
                  },
                  {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                      {
                        "color": "#c7eced"
                      }
                    ]
                  },
                  {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                      {
                        "lightness": "-49"
                      },
                      {
                        "saturation": "-53"
                      },
                      {
                        "gamma": "0.79"
                      }
                    ]
                  }
              ]
              );

              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
              });

              infowindow.open(map, marker);
              map.mapTypes.set('styled_map', styledMapType);
              map.setMapTypeId('styled_map');
            }
          }
        });
      }
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap" async defer></script>
</div>

@endsection
