<?php
  include('../app/Util.php');
  
  $states = Util::getStates();
  $lga    = Util::getLGA('30');

?>
<!DOCTYPE html>
<html lang="en" class="app">
    <head>  
        <meta charset="utf-8">
        <title>Nigeria Elections | Polling Booths </title>
        <meta name="description" content="Locate polling booths close to you " />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />    
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <!-- <meta name="fragment" content="!"> -->
        <!-- Favicons - Web, Android, iOS & WindowsMobile -->
        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/bootstrap.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/font-awesome.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/bootstrap-select2.css">

        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/style3.css">
        <!--Custom Stuff -->
        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/customStuff.css">
        <!-- SmalliPop Stuff -->
        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/vendors/smalliPop/css/animate.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/jquery.smallipop.min.css">
        <!--Qtip stuff-->
        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/vendors/Qtip/jquery.qtip.min.css">
        <!--Jquery Fancy Box-->
        <link media="all" type="text/css" rel="stylesheet" href="http://nigeriaelections.org/frontend/css/jquery.fancybox.css">

        <!--[if lt IE 9]>
        <script src="http://nigeriaelections.org/assets/js/ie/html5shiv.js"></script>

        <script src="http://nigeriaelections.org/assets/js/ie/respond.min.js"></script>

        <script src="http://nigeriaelections.org/assets/js/ie/excanvas.js"></script>

        <![endif]-->
        <script type="text/javascript"> var base_url = "http://nigeriaelections.org" </script>

    </head>
    <body class="">
    <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3">
                <div class="row">
                    <div class="logo-wrapper">
                        <a href="http://nigeriaelections.org/home"><img src="http://nigeriaelections.org/frontend/img/logo.png"></a>
                    </div>
                </div>
                <!-- <div class="nav-anchor"><a href="#"><i class="fa fa-bars"></i></a></div> -->
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
                <div class="row">
                    <div class="right-wrapper">
                        <div class="col-lg-8 col-md-8 col-sm-12 row">
                            <div class="search-box">
                                <form action="http://nigeriaelections.org/search">
                                    <i class="fa fa-search"></i>
                                    <div class="inputbox">
                                        <input name="currentSearchValue" type="text" autofocus placeholder="Search for Hotels, Bars & Restaurant, Resorts">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 visible-md-block visible-lg-block top-sm-share hidden-sm hidden-xs">
                            <div class="social-share">
                                <div class="fb">
                                    <div class="fb-like" data-href="http://nigeriaelections.org/" data-width="200" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                </div>
                                <div class="tw">
                                    <a href="https://twitter.com/intent/tweet/?url=http%3A%2F%2Fnigeriaelections.org%2Fbooths&via=2015freeandfair" class="twitter-share-button" data-url="http://nigeriaelections.org/">Tweet</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="navigation hidden-sm hidden-xs">
                            <nav>
                                <ul>
                                <li><a href="http://nigeriaelections.org/home">Home</a></li>
                                <li><a href="http://nigeriaelections.org/booths">Polling Units</a></li>
                                <li><a href="http://nigeriaelections.org/result">Election Results</a></li>
                                <li><a href="http://nigeriaelections.org/newsfeed">Election Updates</a></li>
                                <li><a href="http://nigeriaelections.org/events">Events</a></li>
                                <li><a href="http://nigeriaelections.org/blog">Our Blog</a></li>
                                <li><a href="http://nigeriaelections.org/coalition">The Coalition</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="main-container"><section id="themap" class="booths">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-right">
                <div class="row">
                    <div class="_module">
                        <div class="_title">
                            <h3>Locate Your Polling Unit</h3>
                        </div>
                        <div class="_content">
                            <ul class="select-boxes">

                                <span>Select State</span>
                                <li>
                                    <select id="s_state" name="state">
                                        <?php foreach($states['events'] as $state) {?>
                                          <option value="<?php echo $state['latitude'].','.$state['longitude'] ?>"" > <?php echo $state['title'] ?></option>
                                        <?php } ?>
                                    </select>
                                </li> 
                                <span>Select LGA</span>
                                <li>
                                    <select id="s_lga" name="lga">
                                        <?php foreach($lga['events'] as $lg) {?>
                                             <option value="<?php echo $lg['LgaLat'].','.$lg['LgaLong'] ?>"" > <?php echo $lg['title'] ?></option>
                                        <?php } ?>
                                    </select>
                                </li>

                                <span>Select Town \ Village</span>
                                <li>
                                    <select id="s_ward" name="ward">
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="_module results">
                        <div class="_title">
                            <h3>Results</h3>
                        </div>
                        <div class="_content">
                            <ul id="s_booth" class="polling-booths">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8 hidden-xs hidden-sm">
                <div class="row">
                    <div class="_themap">
                        <div>
                            <!-- Include Maps here -->
                            <div id="map" style="width: 100%; height: 650px;">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
</div>

    <footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="social-buttons">
               <ul>
                  <li class="facebook"><a href="https://www.facebook.com/WANGONeT" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="twitter"><a href="https://www.twitter.com/2015freeandfair" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="youtube"><a href="https://www.youtube.com/channel/UCMa9rGPa2ASDdQDeTY45_8Q" target="_blank"><i class="fa fa-youtube"></i></a></li>
               </ul>
            </div>
         </div>
         <!-- Sponsor -->
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <div class="sponsor powered">
                  <span>Powered By</span>
                  <a href="" target="_blank"><img src="http://nigeriaelections.org/frontend/img/wangonet.png"></a>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <div class="sponsor powered">
                  <span>Supported By</span>
                  <a href="" target="_blank"><img src="http://nigeriaelections.org/frontend/img/dfid.jpg"></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-xs-6">
            <div class="sponsor partners">
               <span>Partners</span>
               <a href="" target="_blank"><img src="http://nigeriaelections.org/frontend/img/cchub.png"></a>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="sponsor partners">
               <span></span>
               <a href="" target="_blank"><img src="http://nigeriaelections.org/frontend/img/macgrenor.png"></a>
            </div>
         </div>

      </div>
   </div>
   
   <div class="footer-nav">
      <div class="container">
         <div class="row">
            <ul>
               <li><a href="http://nigeriaelections.org/home">Home</a></li>
               <li><a href="http://nigeriaelections.org/booths">Find Polling Units</a></li>
               <li><a href="http://nigeriaelections.org/result">Election Results</a></li>
               <li><a href="http://nigeriaelections.org/newsfeed">Election Updates</a></li>
               <li><a href="http://nigeriaelections.org/coalition">The Coalition</a></li>
               <li><a href="http://csomap.nigeriaelections.org/" target="_blank">The Coalition Map</a></li>
               <li><a href="http://nigeriaelections.org/blog">Our Blog</a></li>
               <li><a href="http://nigeriaelections.org/events">Events</a></li>
               <li><a href="http://nigeriaelections.org/resource_list">Resources</a></li>
               <li><a href="http://old.nigeriaelections.org/" target="_blank">Old NigeriaElections.org</a></li>
            </ul>
         </div>
      </div>
   </div>

   <div class="_copy">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="copyright">
                  &copy; Nigeria Elections Coalition 2011 - 2016. All rights reserved.
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <!-- <div class="madein">
                  Made in Lagos at <a href="http://www.cchubnigeria.com" target="_blank">CcHub</a>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</footer>
    <script src="http://nigeriaelections.org/frontend/js/jquery.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEc2VfWg-pe0e7CBE4bmdIAF-Fzh8XNtw&sensor=false&libraries=places"></script>

<script type="text/javascript">
  // Osun state longitude and latitude
  var geoaddress = {
    latitude: "7.674229625",
    longitude: "4.548387964",
  };
  var map,places,myLatlng;
  var markers = [];

  function initialize(){
    myLatlng  = new google.maps.LatLng(7.674229625,4.548387964);
    var myOptions = {
      zoom: 6,
      center: new google.maps.LatLng(8.69128,8.5208073),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map    = new google.maps.Map(document.getElementById('map'), myOptions);
    places = new google.maps.places.PlacesService(map);
    // google.maps.event.addListener(map, 'tilesloaded', tilesLoaded);
    search();
  }

  function dropMarker(i) {
    return function() {
      if (markers[i]) {
        markers[i].setMap(map);
      }
    }
  }

  function search(){
    var search = {};
    // search.rankBy   = google.maps.places.RankBy.DISTANCE;
    search.location = myLatlng;
    search.radius = 50000;
    search.types = ['hospital', 'bar', 'museum','church'];
    // search.keyword    = ['hospital','mosque'];

    centerMarker = new google.maps.Marker({
        position: search.location,
        animation: google.maps.Animation.DROP,
        map: map
    });

    places.nearbySearch(search, function(results, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          var icon = 'icons/number_' + (i+1) + '.png';
          markers.push(new google.maps.Marker({
            position: results[i].geometry.location,
            animation: google.maps.Animation.DROP,
            icon: icon
          }));
          // google.maps.event.addListener(markers[i], 'click', getDetails(results[i], i));
          window.setTimeout(dropMarker(i), i * 100);
        }
      }
    });

  }

  google.maps.event.addDomListener(window, 'load', initialize);




</script>
</body>
</html>