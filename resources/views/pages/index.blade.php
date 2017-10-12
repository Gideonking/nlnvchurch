@extends('layouts.master')

@section('content')
  <div class="nlnv-container--full welcome-container">
    <div class="welcome-text-container">
      <h1 class="welcome-text">
        <span class="welcome-text--top">A church that <span class="welcome-text-accent">plants</span> churches</span>
        <span class="welcome-text--bottom">for the <span class="welcome-text-accent">next</span> generation</span>
        <span class="welcome-text--sub">New Life New Vision Church</span>
      </h1>
    </div>
  </div>

  <div class="welcome-card-container">
    <div class="col-sm-5 col-sm-offset-1 card-container welcome-card--video">
      <div class="card-title">
        <h2>Latest Sermon</h2>
        <a class="card-link" href="#">More</a>
      </div>
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $ytvidid }}?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="col-sm-5 card-container">
      <div class="welcome-card--service">
        <h2>Service Times</h2>
        <hr class="divider">
        <p><b>Sunday Service:</b> 10:00AM &amp; 12:00PM</p>
        <p><b>Wednesday Prayer:</b> 6:30PM</p>
        <p><b>Weekday Prayer:</b> 5:30AM (Tue-Fri) &amp; 6:30AM (Sat)</p>
      </div>
      <div class="welcome-card--join">
        <h2>Come <span class="accent--light">Join</span> Us!</h2>
        <h3 class="welcome-join-time"></h3>
        <p class="welcome-join-label">DAYS HRS MINS SECS</p>
        <p class="welcome-join-for">For Sunday Service</p>
      </div>
    </div>

    <div class="col-sm-10 col-sm-offset-1 card-container welcome-card--events">
      <div class="card-title">
        <h2>Events</h2>
      </div>
      <div class="slider">
        <div>
          <div class="events-section events-section--image col-sm-6" style="background-image: url(/images/events/korean-school.jpg);"></div>
          <div class="events-section events-section--content col-sm-6">
            <h3 class="events-title">NLNV Korean School Begins</h3>
            <hr class="divider divider--darkgreen">
            <div class="events-desc">
              <p>9.23.2017</p>
              <p>Every Saturday 9:30AM - 11:30AM</p>
            </div>
            <a class="events-btn" href="#">LEARN MORE</a>
          </div>
        </div>
        <div>
          <div class="events-section events-section--image col-sm-6" style="background-image: url(/images/events/korean-school.jpg);"></div>
          <div class="events-section events-section--content col-sm-6">
            <h3 class="events-title">NLNV Korean School Begins</h3>
            <hr class="divider divider--darkgreen">
            <div class="events-desc">
              <p>9.23.2017</p>
              <p>Every Saturday 9:30AM - 11:30AM</p>
            </div>
            <a class="events-btn" href="#">LEARN MORE</a>
          </div>
        </div>
      </div>
    </div>

    <!--
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
    -->
  </div>

  <div class="connect-container">
    <div class="connect-wrapper">
      <h2 class="connect-title">Connect with us</h2>
      <hr class="divider divider--darkgreen">
      <div class="connect-icon-wrapper">
        <a class="connect-icon" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a class="connect-icon" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a class="connect-icon" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="connect-icon" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
@endsection
