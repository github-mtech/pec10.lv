<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DEV::Pēc10.lv</title>

    <?
       
        if(isset($plugins))
        {
            foreach($plugins as $plugin)
            {
                if(isset($plugin['css']))
                {
                    foreach($plugin['css'] as $file) echo '<link href="'.$file.'" rel="stylesheet">'; 
                }
            }
        }
       
        if(isset($css))
        {
            foreach($css as $file)   echo '<link href="'.$file.'" rel="stylesheet">'; 
        }
    
    
       
    ?>
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>
<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scrl" href="#main-slider"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="scrl"  href="#main-slider"><i class="icon-home"></i></a></li>
                        
                        <li><a class="scrl" href="#add">Pievieno savu vietu</a></li>
                        <li><a class="scrl" href="#pricing">Par projektu</a></li>
                        <li><a class="scrl" href="#about-us">Reklāmas</a></li>
                        <li><a class="scrl" href="#contact">Kontakti</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel" style="">
        <div style=" position:fixed; top:0; width:100%; height:100%;">
            <div id="map" style="width:100%; height:100%;"></div>
        </div>
     
    </section><!--/#main-slider-->


    <?
    
    foreach($content as $section) echo $section;
    
    ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <img class="pull-right" src="/media/img/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
   
    <div id="js">
        <?
        
        
            if(isset($plugins))
            {
                foreach($plugins as $plugin)
                {
                    if(isset($plugin['js']))
                    {
                        foreach($plugin['js'] as $file) echo '<script src="'.$file.'"></script>'; 
                    }
                }
            }
        
            
            if(isset($js))
            {
                foreach($js as $file) echo '<script src="'.$file.'"></script>';   
            }
        
        ?>
    
    <script type="text/javascript">
        var minZoomLevel = 8;
        
        
        var style = [
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                
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
                "visibility": "on"
            },
            {
                "color": "#e3e3e3"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "labels",
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
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "color": "#cccccc"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station.airport",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station.airport",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#FFFFFF"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    }
];

   var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      minZoom: 5,
      center: new google.maps.LatLng(56.97,24.12),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: style,
      disableDefaultUI: true
   });

   // Bounds for North America
   var strictBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(56.29, 20.98),
        new google.maps.LatLng(58.08, 28.23)
    
   );

   // Listen for the dragend event
   google.maps.event.addListener(map, 'dragend', function() {
     if (strictBounds.contains(map.getCenter())) return;

     // We're out of bounds - Move the map back within the bounds

     var c = map.getCenter(),
         x = c.lng(),
         y = c.lat(),
         maxX = strictBounds.getNorthEast().lng(),
         maxY = strictBounds.getNorthEast().lat(),
         minX = strictBounds.getSouthWest().lng(),
         minY = strictBounds.getSouthWest().lat();

     if (x < minX) x = minX;
     if (x > maxX) x = maxX;
     if (y < minY) y = minY;
     if (y > maxY) y = maxY;

     map.setCenter(new google.maps.LatLng(y, x));
   });

   // Limit the zoom level
   google.maps.event.addListener(map, 'zoom_changed', function() {
     if (map.getZoom() < minZoomLevel) map.setZoom(minZoomLevel);
   });

        
        
        
        
        
        /*
        function initialize() {
            var mapOptions = {
              center: { lat: -34.397, lng: 150.644},
                zoom: 8,
               disableDefaultUI: true
            };
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);
        }
      google.maps.event.addDomListener(window, 'load', initialize);
      */ 
    </script>
    </div>
    
    
    
</body>
</html>
