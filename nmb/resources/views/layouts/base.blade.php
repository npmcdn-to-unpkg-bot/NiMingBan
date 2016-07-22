<!doctype html>
<html>
    <head>
        <title>@yield("title")-Makoto的匿名板</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ elixir('assets/css/all.css') }}">
        @yield("css")
        @yield("config_js")
    </head>
    <body>
        <div class="uk-grid">
            @include("components.menu")
            <div id="main" class='uk-width-5-6'>
                @yield("content")
            </div>
        </div>
        @include("components.new")
        <script src="{{ elixir('assets/js/vue.min.js') }}"></script>
        <script src="{{ elixir('assets/js/vue-resource.min.js') }}"></script>
        <script src="{{ elixir('assets/js/base.js') }}"></script>
        @yield("js")
    </body>
</html>
