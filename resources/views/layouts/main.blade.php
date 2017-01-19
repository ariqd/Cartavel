<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
    rel="stylesheet"
    integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1"
    crossorigin="anonymous">
    @yield('css')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body>

      @include('includes.front.header')
      @yield('content')
      @include('includes.front.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
    integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
    crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
    <script src="{{asset('js/parsley.min.js')}}"></script>
    {{-- <script src="{{asset('js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>

    @if (session('success'))
        <script type="text/javascript">
        $(function() {
          noty({
            layout: 'topCenter',
            theme: 'relax',
            type: 'success',
            text: '{{ session("success") }}',
            timeout: 2500,
            animation: {
                open: {height: 'toggle'},
                close: {height: 'toggle'},
                easing: 'swing',
                speed: 500
            }
          });
        });
        </script>
    @endif

    @if (count($errors) > 0)
        <script type="text/javascript">
        $(function() {
          noty({
            layout: 'topCenter',
            theme: 'relax',
            type: 'error',
            text: 'An error occurred',
            timeout: 2500,
            animation: {
                open: {height: 'toggle'},
                close: {height: 'toggle'},
                easing: 'swing',
                speed: 500
            }
          });
        });
        </script>
    @endif

    @if (session('info'))
        <script type="text/javascript">
        $(function() {
          noty({
            layout: 'topCenter',
            theme: 'relax',
            type: 'warning',
            text: '{{ session("info") }}',
            timeout: 2500,
            animation: {
                open: {height: 'toggle'},
                close: {height: 'toggle'},
                easing: 'swing',
                speed: 500
            }
          });
        });
        </script>
    @endif --}}
    @yield('js')
  </body>
</html>
