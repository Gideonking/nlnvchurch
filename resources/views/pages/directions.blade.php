@extends('layouts.master')

@section('content')

<div class="directions__banner">
  <h1 class="nlnv__heading kor-main">찾아오시는 길</h1>
  <hr class="divider divider--green">
  <p class="directions__banner-info">2472 Walnut Ave, Tustin, CA 92780</p>
  <p class="directions__banner-info">(310) 991-6544</p>

  <div class="col-xs-10 col-sm-6 col-lg-4 directions__banner-input">
    <div class="input-group input-group-lg">
      <input type="text" class="form-control directions__input-from kor-main" placeholder="출발지 주소" aria-label="출발지 주소">
      <span class="input-group-btn">
        <button class="btn btn-secondary directions__find-btn kor-main" type="button">길찾기</button>
      </span>
    </div>
  </div>
</div>

<div class="directions__map-container">
  <div class="directions__map"></div>
  <script>
    var geocoder;
    var map;
    var address = "2472 Walnut Ave, Tustin, CA 92780";

    function initMap() {
      geocoder = new google.maps.Geocoder();
      var marker;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var directionsService = new google.maps.DirectionsService;
      var latlng = new google.maps.LatLng(33.7179887, -117.8096948,21),
          myOptions = {
            zoom: 14,
            center: latlng,
            mapTypeControl: false,
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };

      map = new google.maps.Map(document.getElementsByClassName("directions__map")[0], myOptions);
      center = map.getCenter();

      if (geocoder) {
        geocoder.geocode({ 'address': address }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
              map.setCenter(results[0].geometry.location);

              marker = new google.maps.Marker({
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

              map.mapTypes.set('styled_map', styledMapType);
              map.setMapTypeId('styled_map');
            }
          }
        });
      }

      directionsDisplay.setMap(map);
      directionsDisplay.setPanel(document.getElementsByClassName('directions__list')[0]);
      var onChangeHandler = function() {
        calculateAndDisplayRoute(directionsService, directionsDisplay, marker);
      };

      document.getElementsByClassName('directions__find-btn')[0].addEventListener('click', onChangeHandler);
    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay, currentMarker) {
        var start = document.getElementsByClassName('directions__input-from')[0].value,
            end = "2472 Walnut Ave, Tustin, CA 92780";

        start = (start !== '') ? start : end;

        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            $('.directions__list-container').slideDown();
            currentMarker.setMap(null);
            directionsDisplay.setDirections(response);

            $('html, body').animate({
              scrollTop: $('.directions__map-container').offset().top
            }, 500);
          } else {
            window.alert('Invaid Address :( Please try again!');
          }
        });
      }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap" async defer></script>
</div>

<div class="col-md-6 col-md-offset-3 directions__list-container text-center">
  <h2 class="kor-main">이동 경로</h2>
  <hr class="divider divider--gold">
  <div class="directions__list"></div>
</div>

@endsection
