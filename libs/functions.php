




    
<?php

function pd_google_map_shortcode() { 


    global $pd_google_map; ?>

        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $pd_google_map['klucz_api']; ?>&callback=initMap">
    </script>

    <script>

        function initMap() {
            var drgflag = true;
            var myLatlng = new google.maps.LatLng(<?php echo $pd_google_map['latitude']; ?>, <?php echo $pd_google_map['longitude']; ?>);
            var mapOptions = {
                zoom: 16,
                gestureHandling: '<?php echo $pd_google_map['gesture_handling']; ?>',
                scrollwheel: <?php if ($pd_google_map['scroll_wheel'] == '1') { echo 'true'; } else { echo 'false'; } ?>,
                zoomControl: <?php if ($pd_google_map['zoom'] == '1') { echo 'true'; } else { echo 'false'; } ?>,
                draggable: <?php if ($pd_google_map['draggable'] == '1') { echo 'true'; } else { echo 'false'; } ?>,
                center: myLatlng,
                disableDefaultUI: <?php if ($pd_google_map['disable_default_UI'] == '1') { echo 'true'; } else { echo 'false'; } ?>,
                styles: [{
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "gamma": 0.8
                    }, {
                        "lightness": 4
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "gamma": 0.8
                    }, {
                        "lightness": 4
                    }, {
                        "visibility": "on"
                    }]
                }, ]
            }
            var map = new google.maps.Map(document.getElementById('pd-google-map'), mapOptions);
            // Example standard marker
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });

        }
        window.onload = initMap;

    </script>

<?php
    
    
    $string = '<div id="pd-google-map" class="pd-google-map"></div>';
    
    return $string;
    
    
}


add_shortcode('pd_google_map', 'pd_google_map_shortcode');