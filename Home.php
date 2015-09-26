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

        <div style="width: 100%;height: 400px;background: #666666;">

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
            $('.ha-waypoint').each(function(i) {
                var $el = $(this),
                        animClassDown = $el.data('animateDown'),
                        animClassUp = $el.data('animateUp');

                $el.waypoint(function(direction) {
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
