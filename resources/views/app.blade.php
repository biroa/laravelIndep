<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/extra.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300'
          rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type='text/javascript'>var _sf_startpt = (new Date()).getTime()</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="{{ asset('/img/favicon-independent.ico') }}"
          type="image/x-icon"/>
    <link href="{{ asset('/css/screen.minee61.css') }}" media="screen"
          rel="stylesheet">
    <link href="{{ asset('/css/widgets.min3d94.css') }}" media="screen"
          rel="stylesheet">
    <link href="{{ asset('/css/jquery-ui.mine22d.css') }}" media="screen"
          rel="stylesheet">
    <link href="{{ asset('/css/print.minfb8c.css') }}" media="print"
          rel="stylesheet">
    <script type="text/javascript">
        window.publicationUrl = 'http://www.independent.ie/';
        window.publicationTitle = 'Independent.ie';
        window.breadcrumb = 'Independent.ie;Sport';
    </script>
    <script type="text/javascript"
            src="{{ asset('/js/head.mina670.js') }}"></script>
    <script type="text/javascript">
        head.js(
                {jquery: 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'},
                {jqueryui: 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js'},
                {extras: 'http://www.independent.ie/js/extras.min.js?v=a35ac'},
                {global: 'http://www.independent.ie/js/scripts.min.js?v=f877c'},
                {widgets: 'http://www.independent.ie/js/widgets.min.js?v=69510'}
        );
    </script>

    <meta name="keywords" content="independent"/>
    <meta name="description"
          content="Sports news, photos, video and commentary from the Irish Independent."/>
    <title>Sports News - Latest Sport News &amp; Results -
        Independent.ie</title>


</head>


@if (Auth::guest())
    <body class="independent green sport home" data-domain="www.independent.ie"
          data-section-path="sport/" data-article="" style="overflow: hidden">
    @include('menu.partials._menu')
    @else
        <body class="independent green sport home"
              data-domain="www.independent.ie" data-section-path="sport/"
              data-article="">
        @endif
        @yield('content')

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        </body>
</html>
