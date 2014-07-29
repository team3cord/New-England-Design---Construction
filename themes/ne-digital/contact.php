<?php /* Template Name: CONTACT  */ get_header(); ?>

    <main class="main-content">

        <div class="page-bar">
            <h2><?php the_title(); ?></h2>
        </div>



        <div class="main-section">
            <article class="main-tout">
                <?php echo get_field('contact_request'); ?>
            </article>
            <article class="mc-contact-form">
                <?php echo get_field('contact_form'); ?>
            </article>
           <div class="getting-here">
               <h3><?php echo get_field('getting_here_header'); ?></h3>
               <span class="thick-line"></span><span class="thin-line"></span></br>
               <?php echo get_field('getting_here_content'); ?>
               <div class="getting-map">
                   <?//php echo get_field('contact_map'); ?>
                   <?php

                   $location = get_field('contact_map');

                   if( !empty($location) ):
                       ?>
                       <div class="acf-map">
                           <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                       </div>
                   <?php endif; ?>
               </div>
           </div>
        </div>
        <!-- /section -->
        <aside class="right-sidebar">
            <div class="right-call-today">
                <h3><?php echo get_field('call_today_consultation', 4); ?></h3>
                <span class="thick-line"></span><span class="thin-line"></span></br>
                <div class="call-tout">
                    <?php echo get_field('call_today_tout', 14); ?>
                </div>
                <a class="orange-phone" href="tel:<?php echo get_field('call_today_phone', 4); ?>"><?php echo get_field('call_today_phone', 4); ?></a></br>
            </div>
            <div class="right-connect-tout">
                <h3><?php echo get_field('sidebar_connect_header'); ?></h3>
                <span class="thick-line"></span><span class="thin-line"></span></br>
                <ul class="contact-social">
                        <li class="mc-fb-c"><a href="http://www.facebook.com/pages/New-England-Design-Construction/109240885763636">facebook.com/nedc</a></li>
                        <li class="mc-in-c"><a href="https://www.linkedin.com/company/new-england-design-&-construction">linkedin.com/nedc</a></li>
                        <li class="mc-twt-c"><a href="https://twitter.com/NEDesignConst">twitter.com/nedc</a></li>
                        <li class="mc-hou-c"><a href="http://www.houzz.com/pro/nedc/new-england-design-construction">houz.com/nedc</a></li>
                </ul>
            </div>
            <div class="right-testimonial">
                <h3><?php echo get_field('sidebar_header', 4); ?></h3>
                <span class="thick-line"></span><span class="thin-line"></span>
                <div class="home-sidebar-content">
                    <?php echo do_shortcode("[testimonial_rotator id='40']"); ?>
                </div>
                <a  href="http://www.guildquality.com/NewEnglandDesignConstruction"><img src="<?php echo get_template_directory_uri(); ?>/img/guild-quality.png"></a>
            </div>

        </aside>
        <div class="weird-line"></div>





    </main>
    <style type="text/css">

        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
        (function($) {

            /*
             *  render_map
             *
             *  This function will render a Google Map onto the selected jQuery element
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$el (jQuery element)
             *  @return	n/a
             */

            function render_map( $el ) {

                // var
                var $markers = $el.find('.marker');

                // vars
                var args = {
                    zoom		: 16,
                    center		: new google.maps.LatLng(0, 0),
                    mapTypeId	: google.maps.MapTypeId.ROADMAP
                };

                // create map
                var map = new google.maps.Map( $el[0], args);

                // add a markers reference
                map.markers = [];

                // add markers
                $markers.each(function(){

                    add_marker( $(this), map );

                });

                // center map
                center_map( map );

            }

            /*
             *  add_marker
             *
             *  This function will add a marker to the selected Google Map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	$marker (jQuery element)
             *  @param	map (Google Map object)
             *  @return	n/a
             */

            function add_marker( $marker, map ) {

                // var
                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

                // create marker
                var marker = new google.maps.Marker({
                    position	: latlng,
                    map			: map
                });

                // add to array
                map.markers.push( marker );

                // if marker contains HTML, add it to an infoWindow
                if( $marker.html() )
                {
                    // create info window
                    var infowindow = new google.maps.InfoWindow({
                        content		: $marker.html()
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {

                        infowindow.open( map, marker );

                    });
                }

            }

            /*
             *  center_map
             *
             *  This function will center the map, showing all markers attached to this map
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	4.3.0
             *
             *  @param	map (Google Map object)
             *  @return	n/a
             */

            function center_map( map ) {

                // vars
                var bounds = new google.maps.LatLngBounds();

                // loop through all markers and create bounds
                $.each( map.markers, function( i, marker ){

                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                    bounds.extend( latlng );

                });

                // only 1 marker?
                if( map.markers.length == 1 )
                {
                    // set center of map
                    map.setCenter( bounds.getCenter() );
                    map.setZoom( 16 );
                }
                else
                {
                    // fit to bounds
                    map.fitBounds( bounds );
                }

            }

            /*
             *  document ready
             *
             *  This function will render each map when the document is ready (page has loaded)
             *
             *  @type	function
             *  @date	8/11/2013
             *  @since	5.0.0
             *
             *  @param	n/a
             *  @return	n/a
             */

            $(document).ready(function(){

                $('.acf-map').each(function(){

                    render_map( $(this) );

                });

            });

        })(jQuery);
    </script>
<?php get_template_part('sub', 'footer'); ?>
<?php get_footer(); ?>