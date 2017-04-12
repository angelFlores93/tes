<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChordZone</title>
    <link rel="shortcut icon" href="{{asset('chords\czico.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <link rel="stylesheet" href="{{asset('css\pianoLayout.css')}}">
    <!-- Piano Layout -->

    <style>
        .panel-heading {
            cursor: pointer;
        }
        .panel-heading a:after {
            font-family: 'Glyphicons Halflings';
            content: "\e114";
            float: right;
            color: white;
        }
        .panel-heading a.collapsed:after {
            content: "\e080";
        }
    </style>
    <script>


        function moveScroller() {
            var $anchor = $("#scroller-anchor");
            var $scroller = $('#scroller');

            var move = function() {
                var st = $(window).scrollTop();
                var ot = $anchor.offset().top;
                if(st > ot) {
                    $scroller.css({
                        position: "fixed",
                        "background-color":"white",
                        top: "0px",
                        "z-index": "100"
                    });
                } else {
                    if(st <= ot) {
                        $scroller.css({
                            position: "relative",
                            top: ""
                        });
                    }
                }
            };
            $(window).scroll(move);
            move();
        }
        $(function() {
            //moveScroller();
            $(window).scroll(sticky_relocate);
            sticky_relocate();

        });
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('#sticky').addClass('stick');
                $('#sticky-anchor').height($('#sticky').outerHeight());
            } else {
                $('#sticky').removeClass('stick');
                $('#sticky-anchor').height(0);
            }
        }



        var dir = 1;
        var MIN_TOP = 200;
        var MAX_TOP = 350;

        function autoscroll() {
            var window_top = $(window).scrollTop() + dir;
            if (window_top >= MAX_TOP) {
                window_top = MAX_TOP;
                dir = -1;
            } else if (window_top <= MIN_TOP) {
                window_top = MIN_TOP;
                dir = 1;
            }
            $(window).scrollTop(window_top);
            window.setTimeout(autoscroll, 100);
        }


    </script>
</head>