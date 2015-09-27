<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Avicio.com</title>
        <link href="css/component.css" rel="stylesheet"/>
        <link href="css/normalize.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script>
            $(function () {

                // IE detect
                function iedetect(v) {

                    var r = RegExp('msie' + (!isNaN(v) ? ('\\s' + v) : ''), 'i');
                    return r.test(navigator.userAgent);

                }

                // For mobile screens, just show an image called 'poster.jpg'. Mobile
                // screens don't support autoplaying videos, or for IE.
                if (screen.width < 800 || iedetect(8) || iedetect(7) || 'ontouchstart' in window) {

                    (adjSize = function () { // Create function called adjSize

                        $width = $(window).width(); // Width of the screen
                        $height = $(window).height(); // Height of the screen

                        // Resize image accordingly
                        $('#container').css({
                            'background-image': 'url(poster.jpg)',
                            'background-size': 'cover',
                            'width': $width + 'px',
                            'height': $height + 'px'
                        });

                        // Hide video
                        $('video').hide();

                    })(); // Run instantly

                    // Run on resize too
                    $(window).resize(adjSize);
                }
                else {

                    // Wait until the video meta data has loaded
                    $('#container video').on('loadedmetadata', function () {

                        var $width, $height, // Width and height of screen
                                $vidwidth = this.videoWidth, // Width of video (actual width)
                                $vidheight = this.videoHeight, // Height of video (actual height)
                                $aspectRatio = $vidwidth / $vidheight; // The ratio the video's height and width are in

                        (adjSize = function () { // Create function called adjSize

                            $width = $(window).width(); // Width of the screen
                            $height = $(window).height(); // Height of the screen

                            $boxRatio = $width / $height; // The ratio the screen is in

                            $adjRatio = $aspectRatio / $boxRatio; // The ratio of the video divided by the screen size

                            // Set the container to be the width and height of the screen
                            $('#container').css({'width': $width + 'px', 'height': $height + 'px'});

                            if ($boxRatio < $aspectRatio) { // If the screen ratio is less than the aspect ratio..
                                // Set the width of the video to the screen size multiplied by $adjRatio
                                $vid = $('#container video').css({'width': $width * $adjRatio + 'px'});
                            } else {
                                // Else just set the video to the width of the screen/container
                                $vid = $('#container video').css({'width': $width + 'px'});
                            }

                        })(); // Run function immediately

                        // Run function also on window resize.
                        $(window).resize(adjSize);

                    });
                }

            });
        </script>
    </head>
    <body>

        <header id="ha-header" class="ha-header ha-header-large">
            <div class="ha-header-perspective">
                <div class="ha-header-front">
                    <h1>Avicio.com</h1>
                    <nav>
                        <a style="border: none;color: #2d383f;">Home</a>
                        <a>Products</a>
                        <a>About</a>
                        <a>Contact</a>
                    </nav>
                </div>
                <div class="ha-header-bottom" style="background: #fff;">
                    <nav>
                        <a>Dalliance</a>
                        <a>Inglenook</a>
                        <a>Lagniappe</a>
                        <a>Mellifluous</a>
                        <a>Erstwhile</a>
                        <a>Wafture</a>
                        <a>Serendipity</a>
                        <a>Love</a>
                    </nav>
                </div>
            </div>
        </header>

        <div style="width: 100%;height: 100vh;">
            <div id="container">
                <video autoplay loop muted>
                    <source src="videos/video.MP4" type="video/mp4">
                    <source src="video.webm" type="video/webm">
                </video>
                <div class="content">
                    <h3 style="color: #fff">AVICIO</h3>
                </div>
            </div>
        </div>
        <div  style="width: 100%;height: 400px;background: #f3796c;">

        </div >

        <div  class="ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large" style="width: 100%;height: 400px;background: #f3796c;">

        </div >
        <div  style="width: 100%;height: 400px;background: #ff0;">

        </div >
        <div class="ha-waypoint" data-animate-down="ha-header-rotate" data-animate-up="ha-header-small" style="width: 100%;height: 400px;background: #666666;">

        </div>
















        <script src="js/jquery-2.0.0.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script>
            var $head = $('#ha-header');
            $('.ha-waypoint').each(function (i) {
                var $el = $(this),
                        animClassDown = $el.data('animateDown'),
                        animClassUp = $el.data('animateUp');

                $el.waypoint(function (direction) {
                    if (direction === 'down' && animClassDown) {
                        $head.attr('class', 'ha-header ' + animClassDown);
                    }
                    else if (direction === 'up' && animClassUp) {
                        $head.attr('class', 'ha-header ' + animClassUp);
                    }
                }, {offset: '100%'});
            });
        </script>
    </body>
</html>
