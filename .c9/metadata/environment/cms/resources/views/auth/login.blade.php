{"filter":false,"title":"login.blade.php","tooltip":"/cms/resources/views/auth/login.blade.php","undoManager":{"mark":46,"position":46,"stack":[[{"start":{"row":0,"column":0},"end":{"row":72,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">管理者ログイン</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('login') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">email</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\" autofocus>","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">パスワード</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"current-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <div class=\"col-md-6 offset-md-4\">","                                <div class=\"form-check\">","                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" id=\"remember\" {{ old('remember') ? 'checked' : '' }}>","","                                    <label class=\"form-check-label\" for=\"remember\">","                                        忘れたら","                                    </label>","                                </div>","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-8 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Login') }}","                                </button>","","                                @if (Route::has('password.request'))","                                    <a class=\"btn btn-link\" href=\"{{ route('password.request') }}\">","                                        {{ __('Forgot Your Password?') }}","                                    </a>","                                @endif","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"],"id":4},{"start":{"row":0,"column":0},"end":{"row":72,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">管理者ログイン</div>","","                <div class=\"card-body\">","                    <form method=\"POST\" action=\"{{ route('login') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">email</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\" autofocus>","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <label for=\"password\" class=\"col-md-4 col-form-label text-md-right\">パスワード</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control @error('password') is-invalid @enderror\" name=\"password\" required autocomplete=\"current-password\">","","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row\">","                            <div class=\"col-md-6 offset-md-4\">","                                <div class=\"form-check\">","                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"remember\" id=\"remember\" {{ old('remember') ? 'checked' : '' }}>","","                                    <label class=\"form-check-label\" for=\"remember\">","                                        忘れたら","                                    </label>","                                </div>","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-8 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Login') }}","                                </button>","","                                @if (Route::has('password.request'))","                                    <a class=\"btn btn-link\" href=\"{{ route('password.request') }}\">","                                        {{ __('Forgot Your Password?') }}","                                    </a>","                                @endif","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"]}],[{"start":{"row":19,"column":47},"end":{"row":19,"column":50},"action":"insert","lines":["-->"],"id":10},{"start":{"row":19,"column":32},"end":{"row":19,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":20,"column":80},"end":{"row":20,"column":83},"action":"insert","lines":["-->"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":21,"column":71},"end":{"row":21,"column":74},"action":"insert","lines":["-->"]},{"start":{"row":21,"column":32},"end":{"row":21,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":22,"column":43},"end":{"row":22,"column":46},"action":"insert","lines":["-->"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":23,"column":41},"end":{"row":23,"column":44},"action":"insert","lines":["-->"]},{"start":{"row":23,"column":32},"end":{"row":23,"column":36},"action":"insert","lines":["<!--"]}],[{"start":{"row":23,"column":48},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":24,"column":0},"end":{"row":24,"column":32},"action":"insert","lines":["                                "]},{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["="]}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["="],"id":12},{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"insert","lines":["="]}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"insert","lines":[" "],"id":13}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":[" "],"id":14}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"insert","lines":["="],"id":15},{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"insert","lines":["="]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"insert","lines":["="]},{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"insert","lines":["="]},{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"insert","lines":["="]},{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"insert","lines":["="]},{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"insert","lines":["="]},{"start":{"row":24,"column":42},"end":{"row":24,"column":43},"action":"insert","lines":["="]},{"start":{"row":24,"column":43},"end":{"row":24,"column":44},"action":"insert","lines":["="]},{"start":{"row":24,"column":44},"end":{"row":24,"column":45},"action":"insert","lines":["="]},{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"insert","lines":["="]},{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"insert","lines":["="]},{"start":{"row":24,"column":47},"end":{"row":24,"column":48},"action":"insert","lines":["="]},{"start":{"row":24,"column":48},"end":{"row":24,"column":49},"action":"insert","lines":["="]},{"start":{"row":24,"column":49},"end":{"row":24,"column":50},"action":"insert","lines":["="]},{"start":{"row":24,"column":50},"end":{"row":24,"column":51},"action":"insert","lines":["="]},{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"insert","lines":["="]},{"start":{"row":24,"column":52},"end":{"row":24,"column":53},"action":"insert","lines":["="]},{"start":{"row":24,"column":53},"end":{"row":24,"column":54},"action":"insert","lines":["="]},{"start":{"row":24,"column":54},"end":{"row":24,"column":55},"action":"insert","lines":["="]},{"start":{"row":24,"column":55},"end":{"row":24,"column":56},"action":"insert","lines":["="]},{"start":{"row":24,"column":56},"end":{"row":24,"column":57},"action":"insert","lines":["="]},{"start":{"row":24,"column":57},"end":{"row":24,"column":58},"action":"insert","lines":["="]},{"start":{"row":24,"column":58},"end":{"row":24,"column":59},"action":"insert","lines":["="]},{"start":{"row":24,"column":59},"end":{"row":24,"column":60},"action":"insert","lines":["="]},{"start":{"row":24,"column":60},"end":{"row":24,"column":61},"action":"insert","lines":["="]},{"start":{"row":24,"column":61},"end":{"row":24,"column":62},"action":"insert","lines":["="]},{"start":{"row":24,"column":62},"end":{"row":24,"column":63},"action":"insert","lines":["="]},{"start":{"row":24,"column":63},"end":{"row":24,"column":64},"action":"insert","lines":["="]},{"start":{"row":24,"column":64},"end":{"row":24,"column":65},"action":"insert","lines":["="]},{"start":{"row":24,"column":65},"end":{"row":24,"column":66},"action":"insert","lines":["="]},{"start":{"row":24,"column":66},"end":{"row":24,"column":67},"action":"insert","lines":["="]},{"start":{"row":24,"column":67},"end":{"row":24,"column":68},"action":"insert","lines":["="]},{"start":{"row":24,"column":68},"end":{"row":24,"column":69},"action":"insert","lines":["="]},{"start":{"row":24,"column":69},"end":{"row":24,"column":70},"action":"insert","lines":["="]}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":70},"action":"insert","lines":["                                ======================================"],"id":17}],[{"start":{"row":21,"column":70},"end":{"row":21,"column":73},"action":"insert","lines":["-->"],"id":18},{"start":{"row":21,"column":32},"end":{"row":21,"column":36},"action":"insert","lines":["<!--"]}],[{"start":{"row":27,"column":70},"end":{"row":27,"column":73},"action":"insert","lines":["-->"],"id":19},{"start":{"row":27,"column":32},"end":{"row":27,"column":36},"action":"insert","lines":["<!--"]}],[{"start":{"row":21,"column":76},"end":{"row":21,"column":77},"action":"insert","lines":[" "],"id":20},{"start":{"row":21,"column":77},"end":{"row":21,"column":78},"action":"insert","lines":["k"]},{"start":{"row":21,"column":78},"end":{"row":21,"column":79},"action":"insert","lines":["o"]},{"start":{"row":21,"column":79},"end":{"row":21,"column":80},"action":"insert","lines":["k"]}],[{"start":{"row":21,"column":79},"end":{"row":21,"column":80},"action":"remove","lines":["k"],"id":21},{"start":{"row":21,"column":78},"end":{"row":21,"column":79},"action":"remove","lines":["o"]},{"start":{"row":21,"column":77},"end":{"row":21,"column":78},"action":"remove","lines":["k"]}],[{"start":{"row":21,"column":77},"end":{"row":21,"column":79},"action":"insert","lines":["ここ"],"id":22},{"start":{"row":21,"column":79},"end":{"row":21,"column":81},"action":"insert","lines":["バ�����"]}],[{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["                                <!--======================================-->",""],"id":23},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["                                <!--======================================-- ここバグ>",""]}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":24}],[{"start":{"row":37,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["                                <!--======================================-- ここバグ>",""],"id":25}],[{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":26}],[{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["                                <!--======================================-- ここバグ>",""],"id":27}],[{"start":{"row":39,"column":50},"end":{"row":39,"column":53},"action":"insert","lines":["-->"],"id":28},{"start":{"row":39,"column":32},"end":{"row":39,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":40,"column":80},"end":{"row":40,"column":83},"action":"insert","lines":["-->"]},{"start":{"row":40,"column":32},"end":{"row":40,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":41,"column":71},"end":{"row":41,"column":74},"action":"insert","lines":["-->"]},{"start":{"row":41,"column":32},"end":{"row":41,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":42,"column":43},"end":{"row":42,"column":46},"action":"insert","lines":["-->"]},{"start":{"row":42,"column":32},"end":{"row":42,"column":36},"action":"insert","lines":["<!--"]},{"start":{"row":43,"column":41},"end":{"row":43,"column":44},"action":"insert","lines":["-->"]},{"start":{"row":43,"column":32},"end":{"row":43,"column":36},"action":"insert","lines":["<!--"]}],[{"start":{"row":41,"column":0},"end":{"row":42,"column":0},"action":"remove","lines":["                                <!--        <strong>{{ $message }}</strong>-->",""],"id":29}],[{"start":{"row":24,"column":54},"end":{"row":24,"column":64},"action":"remove","lines":[" $message "],"id":31}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"remove","lines":["                                <!--        <strong>{{}}</strong>-->",""],"id":32}],[{"start":{"row":21,"column":81},"end":{"row":21,"column":82},"action":"insert","lines":["　"],"id":33},{"start":{"row":21,"column":82},"end":{"row":21,"column":83},"action":"insert","lines":["m"]},{"start":{"row":21,"column":83},"end":{"row":21,"column":84},"action":"insert","lines":["e"]},{"start":{"row":21,"column":84},"end":{"row":21,"column":85},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":84},"end":{"row":21,"column":85},"action":"remove","lines":["s"],"id":34},{"start":{"row":21,"column":83},"end":{"row":21,"column":84},"action":"remove","lines":["e"]},{"start":{"row":21,"column":82},"end":{"row":21,"column":83},"action":"remove","lines":["m"]}],[{"start":{"row":21,"column":82},"end":{"row":21,"column":87},"action":"insert","lines":["メッセージ"],"id":35},{"start":{"row":21,"column":87},"end":{"row":21,"column":89},"action":"insert","lines":["消去"]}],[{"start":{"row":36,"column":0},"end":{"row":37,"column":0},"action":"remove","lines":["                                <!--======================================-- ここバグ>",""],"id":37},{"start":{"row":36,"column":0},"end":{"row":36,"column":90},"action":"insert","lines":["                                <!--======================================-- ここバグ　メッセージ消去>"]}],[{"start":{"row":28,"column":30},"end":{"row":28,"column":33},"action":"insert","lines":["-->"],"id":38},{"start":{"row":28,"column":24},"end":{"row":28,"column":28},"action":"insert","lines":["<!--"]},{"start":{"row":30,"column":52},"end":{"row":30,"column":55},"action":"insert","lines":["-->"]},{"start":{"row":30,"column":24},"end":{"row":30,"column":28},"action":"insert","lines":["<!--"]},{"start":{"row":31,"column":109},"end":{"row":31,"column":112},"action":"insert","lines":["-->"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":28},"action":"insert","lines":["<!--"]},{"start":{"row":33,"column":50},"end":{"row":33,"column":53},"action":"insert","lines":["-->"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":28},"action":"insert","lines":["<!--"]}],[{"start":{"row":28,"column":34},"end":{"row":28,"column":37},"action":"remove","lines":["-->"],"id":39},{"start":{"row":28,"column":24},"end":{"row":28,"column":28},"action":"remove","lines":["<!--"]},{"start":{"row":30,"column":56},"end":{"row":30,"column":59},"action":"remove","lines":["-->"]},{"start":{"row":30,"column":24},"end":{"row":30,"column":28},"action":"remove","lines":["<!--"]},{"start":{"row":31,"column":113},"end":{"row":31,"column":116},"action":"remove","lines":["-->"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":28},"action":"remove","lines":["<!--"]},{"start":{"row":33,"column":54},"end":{"row":33,"column":57},"action":"remove","lines":["-->"]},{"start":{"row":33,"column":24},"end":{"row":33,"column":28},"action":"remove","lines":["<!--"]}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"insert","lines":["あ"],"id":40}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"remove","lines":["あ"],"id":41}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":36},"action":"remove","lines":["<!--"],"id":44},{"start":{"row":22,"column":51},"end":{"row":22,"column":54},"action":"remove","lines":["-->"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":23,"column":84},"end":{"row":23,"column":87},"action":"remove","lines":["-->"]},{"start":{"row":23,"column":32},"end":{"row":23,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":24,"column":47},"end":{"row":24,"column":50},"action":"remove","lines":["-->"]},{"start":{"row":24,"column":32},"end":{"row":24,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":25,"column":45},"end":{"row":25,"column":48},"action":"remove","lines":["-->"]},{"start":{"row":25,"column":32},"end":{"row":25,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":26,"column":32},"end":{"row":26,"column":36},"action":"remove","lines":["<!--"]}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":36},"action":"remove","lines":["<!--"],"id":45},{"start":{"row":37,"column":54},"end":{"row":37,"column":57},"action":"remove","lines":["-->"]},{"start":{"row":37,"column":32},"end":{"row":37,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":38,"column":84},"end":{"row":38,"column":87},"action":"remove","lines":["-->"]},{"start":{"row":38,"column":32},"end":{"row":38,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":39,"column":47},"end":{"row":39,"column":50},"action":"remove","lines":["-->"]},{"start":{"row":39,"column":32},"end":{"row":39,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":40,"column":45},"end":{"row":40,"column":48},"action":"remove","lines":["-->"]},{"start":{"row":40,"column":32},"end":{"row":40,"column":36},"action":"remove","lines":["<!--"]},{"start":{"row":41,"column":32},"end":{"row":41,"column":36},"action":"remove","lines":["<!--"]}],[{"start":{"row":36,"column":86},"end":{"row":36,"column":87},"action":"insert","lines":["<"],"id":46},{"start":{"row":36,"column":87},"end":{"row":36,"column":88},"action":"insert","lines":[">"]}],[{"start":{"row":36,"column":87},"end":{"row":36,"column":88},"action":"insert","lines":["b"],"id":47},{"start":{"row":36,"column":88},"end":{"row":36,"column":89},"action":"insert","lines":["r"]}],[{"start":{"row":41,"column":76},"end":{"row":41,"column":77},"action":"remove","lines":["グ"],"id":48},{"start":{"row":41,"column":75},"end":{"row":41,"column":76},"action":"remove","lines":["バ"]}],[{"start":{"row":41,"column":75},"end":{"row":41,"column":77},"action":"insert","lines":["まで"],"id":49}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":78},"action":"remove","lines":["                                ======================================-- ここバグ>"],"id":52},{"start":{"row":26,"column":0},"end":{"row":26,"column":78},"action":"insert","lines":["                                ======================================-- ここまで>"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":86},"action":"remove","lines":["                                ======================================-- ここバグ　メッセージ消去>"],"id":53},{"start":{"row":21,"column":0},"end":{"row":21,"column":90},"action":"insert","lines":["                                ======================================-- ここバグ　メッセージ消去><br>"]}],[{"start":{"row":21,"column":0},"end":{"row":27,"column":0},"action":"remove","lines":["                                ======================================-- ここバグ　メッセージ消去><br>","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                    </span>","                                @enderror","                                ======================================-- ここまで>",""],"id":54}],[{"start":{"row":29,"column":0},"end":{"row":36,"column":0},"action":"remove","lines":["","                                ======================================-- ここバグ　メッセージ消去><br>","                                @error('password')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                    </span>","                                @enderror","                                ======================================-- ここまで>",""],"id":55}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":29},"action":"remove","lines":["                        @csrf"],"id":56},{"start":{"row":11,"column":0},"end":{"row":11,"column":26},"action":"insert","lines":["        {{ csrf_field() }}"]}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":57}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"insert","lines":["    "],"id":58}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":12},"action":"insert","lines":["    "],"id":59}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":16},"action":"insert","lines":["    "],"id":60}],[{"start":{"row":37,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":38,"column":0},"end":{"row":39,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":37,"column":0},"end":{"row":43,"column":0},"action":"insert","lines":["","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror",""],"id":63}]]},"ace":{"folds":[],"scrolltop":115.125,"scrollleft":0,"selection":{"start":{"row":8,"column":0},"end":{"row":8,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566605594479,"hash":"296103d64be523d359a1d84c2dcac2d0cb09d7f8"}