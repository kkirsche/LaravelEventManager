<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>H-SC Event Manager</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/flat-ui.css') }}">
        <style>
            body {
                padding-top: 80px;
            }
        </style>
        <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/fullcalendar.css') }}">
        <link rel="stylesheet" type="text/css" media="print" href="{{ URL::asset('css/fullcalendar.print.css') }}">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/main.css') }}">

        <script src="{{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{ URL::to('/') }}">H-SC Event Manager</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            @if (Request::segment(1) == 'manager')
                            <li><a href="{{ URL::to('/') }}">Calendar</a></li>
                            <li class="active"><a href="{{ URL::to('manager') }}">Manager</a></li>
                            @elseif (Request::segment(1) == 'login')
                            <li><a href="{{ URL::to('/') }}"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="{{ URL::to('manager') }}">Manager</a></li>
                            @else
                            <li class="active"><a href="{{ URL::to('/') }}"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="{{ URL::to('manager') }}">Manager</a></li>
                            @endif
                        </ul>
                        @if (Auth::guest())
                          {{ Form::open(array('url' => '/login', 'class' => 'navbar-form pull-right')) }}
                            {{ Form::text('username', '', array('class' => 'span2', 'placeholder' => 'Username')) }}
                            <input class="span2" type="password" name="password" placeholder="Password">
                            <button type="submit" class="btn btn-primary">Sign in <i class="icon-signin"></i></button>
                          {{ Form::close() }}
                        @else
                            <a href="{{ URL::to('/logout') }}" class="pull-right" title="Log out"><button class="btn btn-primary">Log Out <i class="icon-signout"></i></button></a>
                        @endif
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        @yield('bodyContent')

        <div class="bottom-menu bottom-menu-large">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h5 class="title">Categories</h5>
                        <ul class="bottom-links">
                            <li><a href="#fakelink">Design</a></li>
                            <li><a href="#fakelink">Freebies</a></li>
                            <li><a href="#fakelink">Tutorials</a></li>
                            <li><a href="#fakelink">Coding</a></li>
                            <li><a href="#fakelink">Inspiration</a></li>
                            <li><a href="#fakelink">WordPress</a></li>
                            <li><a href="#fakelink">Resources</a></li>
                        </ul>
                    </div>

                    <div class="span3">
                        <h5 class="title">Networks</h5>
                        <ul class="bottom-links">
                            <li><a href="#fakelink">Insight</a></li>
                            <li><a href="#fakelink">Promotion</a></li>
                            <li><a href="#fakelink">Production</a></li>
                            <li><a href="#fakelink">Planning</a></li>
                            <li><a href="#fakelink">Journal</a></li>
                            <li><a href="#fakelink">Reader</a></li>
                            <li><a href="#fakelink">Store</a></li>
                        </ul>
                    </div>

                    <div class="span3">
                        <h5 class="title">Mainframe</h5>
                        <ul class="bottom-links">
                            <li><a href="#fakelink">Register / Login</a></li>
                            <li class="active"><a href="#fakelink">Jobs</a></li>
                            <li><a href="#fakelink">Contacts</a></li>
                            <li><a href="#fakelink">Privacy</a></li>
                            <li><a href="#fakelink">Terms of Use</a></li>
                        </ul>
                    </div>

                    <div class="span3">
                        <h5 class="title">Built Using</h5>
                        <h2 class="text-center">
                            <i class="icon-html5"></i>
                            <i class="icon-css3"></i>
                            <i class="icon-github-sign"></i>
                        </h2>
                    </div>
                </div>
            </div>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-1.10.1.min.js') }}"><\/script>')</script>

        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-ui.js') }}"><\/script>')</script>

        <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>

        <script src="{{ URL::asset('js/plugins.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>

        <script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('js/gcal.js') }}"></script>
        @if (Request::segment(2) == 'createEvent' || Request::segment(2) == 'createCalendar')
            <script src="{{ URL::asset('js/flatui-radio.js') }}"></script>
        @endif
        <script>
        $(document).ready(function() {
          var date = new Date();
          var d = date.getDate();
          var m = date.getMonth();
          var y = date.getFullYear();

          $('#calendar').fullCalendar({
            header: {
              left: 'agendaDay,agendaWeek,month',
              center: 'title',
              right: 'prev,next today'
            },
            editable: false,
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ],
            eventClick: function(event) {
                if (event.url) {
                    window.open(event.url);
                    return false;
                }
            }
          });
        });
        </script>


        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
