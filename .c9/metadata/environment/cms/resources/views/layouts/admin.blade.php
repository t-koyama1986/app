{"filter":false,"title":"admin.blade.php","tooltip":"/cms/resources/views/layouts/admin.blade.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":47},"action":"insert","lines":["<!-- Styles -->","<link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","<style>body{background-color: #26263c;}</style>"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":2,"column":47},"action":"remove","lines":["<!-- Styles -->","<link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","<style>body{background-color: #26263c;}</style>"],"id":4}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""],"id":5},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":13,"column":0},"end":{"row":15,"column":47},"action":"insert","lines":["<!-- Styles -->","<link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","<style>body{background-color: #26263c;}</style>"],"id":6}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":7},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":87,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ app()->getLocale() }}\">","<head>","    <meta charset=\"utf-8\">","    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","    <!-- CSRF Token -->","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","    <title>{{ config('', 'テストアプリ') }}</title>","","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","    <style>body{background-color: #26263c;}</style>","","","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","</head>","<body>","    <div id=\"app\">","        <nav class=\"navbar navbar-default navbar-static-top\">","            <div class=\"container\">","                <div class=\"navbar-header\">","","                    <!-- Collapsed Hamburger -->","                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#app-navbar-collapse\" aria-expanded=\"false\">","                        <span class=\"sr-only\">Toggle Navigation</span>","                        <span class=\"icon-bar\"></span>","                        <span class=\"icon-bar\"></span>","                        <span class=\"icon-bar\"></span>","                    </button>","","                    <!-- Branding Image -->","                    <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                        {{ config('', 'テストアプリ') }}","                    </a>","                </div>","","                <div class=\"collapse navbar-collapse\" id=\"app-navbar-collapse\">","                    <!-- Left Side Of Navbar -->","                    <ul class=\"nav navbar-nav\">","                        &nbsp;","                    </ul>","","                    <!-- Right Side Of Navbar -->","                    <ul class=\"nav navbar-nav navbar-right\">","                        <!-- Authentication Links -->","                        @guest","                            <li><a href=\"{{ route('login') }}\">Login</a></li>","                            <li><a href=\"{{ route('register') }}\">Register</a></li>","                        @else","                            <li class=\"dropdown\">","                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" v-pre>","                                    {{ Auth::user()->name }} <span class=\"caret\"></span>","                                </a>","","                                <ul class=\"dropdown-menu\">","                                    <li>","                                        <a href=\"{{ route('logout') }}\"","                                            onclick=\"event.preventDefault();","                                                     document.getElementById('logout-form').submit();\">","                                            Logout","                                        </a>","","                                        <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" style=\"display: none;\">","                                            {{ csrf_field() }}","                                        </form>","                                    </li>","                                </ul>","                            </li>","                        @endguest","                    </ul>","                </div>","            </div>","        </nav>","","        @yield('content')","    </div>","","    <!-- Scripts -->","    <script src=\"{{ asset('js/app.js') }}\"></script>","</body>","</html>",""],"id":15},{"start":{"row":0,"column":0},"end":{"row":83,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","<head>","    <meta charset=\"utf-8\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","    <!-- CSRF Token -->","    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">","","    <title>{{ config('app.name', 'Laravel') }}</title>","","    <!-- Scripts -->","    <script src=\"{{ asset('js/app.js') }}\" defer></script>","","    <!-- Fonts -->","    <link rel=\"dns-prefetch\" href=\"//fonts.gstatic.com\">","    <link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\">","","    <!-- Styles -->","    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">","    <style>body{background-color: #26263c;}</style>","","</head>","<body>","    <div id=\"app\">","        <nav class=\"navbar navbar-expand-md navbar-light bg-white shadow-sm\">","            <div class=\"container\">","                <a class=\"navbar-brand\" href=\"{{ url('/') }}\">","                    {{ config('app.name', 'Laravel') }}","                </a>","                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ __('Toggle navigation') }}\">","                    <span class=\"navbar-toggler-icon\"></span>","                </button>","","                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">","                    <!-- Left Side Of Navbar -->","                    <ul class=\"navbar-nav mr-auto\">","","                    </ul>","","                    <!-- Right Side Of Navbar -->","                    <ul class=\"navbar-nav ml-auto\">","                        <!-- Authentication Links -->","                        @if(Auth::guard('admin')->check())","    <li class=\"nav-item dropdown\">","        <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>","            {{ Auth::guard('admin')->user()->name }} <span class=\"caret\"></span>","        </a>","","    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">","        <a class=\"dropdown-item\" href=\"{{ route('admin.logout') }}\"","           onclick=\"event.preventDefault();","                         document.getElementById('logout-form').submit();\">","            {{ __('Logout') }}","        </a>","","        <form id=\"logout-form\" action=\"{{ route('admin.logout') }}\" method=\"POST\" style=\"display: none;\">","            @csrf","        </form>","    </div>","</li>","","","@else","    <li class=\"nav-item\">","        <a class=\"nav-link\" href=\"{{ route('admin.login') }}\">ログイン</a>","    </li>","    @if (Route::has('register'))","        <li class=\"nav-item\">","            <a class=\"nav-link\" href=\"{{ route('admin.register') }}\">登録</a>","        </li>","    @endif","@endif","                    </ul>","                </div>","            </div>","        </nav>","","        <main class=\"py-4\">","            @yield('content')","        </main>","    </div>","</body>","</html>"]}]]},"ace":{"folds":[],"scrolltop":782.8125,"scrollleft":0,"selection":{"start":{"row":83,"column":7},"end":{"row":83,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":53,"state":"start","mode":"ace/mode/php"}},"timestamp":1566218510877,"hash":"3ff855560507a33cbecdb6dd65763e8159874152"}