{"filter":false,"title":"email.blade.php","tooltip":"/cms/resources/views/auth/passwords/email.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":47,"column":0},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row\">","        <div class=\"col-md-8 col-md-offset-2\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Reset Password</div>","","                <div class=\"panel-body\">","                    @if (session('status'))","                        <div class=\"alert alert-success\">","                            {{ session('status') }}","                        </div>","                    @endif","","                    <form class=\"form-horizontal\" method=\"POST\" action=\"{{ route('password.email') }}\">","                        {{ csrf_field() }}","","                        <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ old('email') }}\" required>","","                                @if ($errors->has('email'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('email') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <div class=\"col-md-6 col-md-offset-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    Send Password Reset Link","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":4},{"start":{"row":0,"column":0},"end":{"row":46,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Reset Password') }}</div>","","                <div class=\"card-body\">","                    @if (session('status'))","                        <div class=\"alert alert-success\" role=\"alert\">","                            {{ session('status') }}","                        </div>","                    @endif","","                    <form method=\"POST\" action=\"{{ route('password.email') }}\">","                        @csrf","","                        <div class=\"form-group row\">","                            <label for=\"email\" class=\"col-md-4 col-form-label text-md-right\">{{ __('E-Mail Address') }}</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\" autofocus>","","                                @error('email')","                                    <span class=\"invalid-feedback\" role=\"alert\">","                                        <strong>{{ $message }}</strong>","                                    </span>","                                @enderror","                            </div>","                        </div>","","                        <div class=\"form-group row mb-0\">","                            <div class=\"col-md-6 offset-md-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    {{ __('Send Password Reset Link') }}","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":468.1640625,"scrollleft":0,"selection":{"start":{"row":37,"column":41},"end":{"row":37,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"state":"start","mode":"ace/mode/php"}},"timestamp":1566477945681,"hash":"d49535a5a89cefad0f778b117214cd8c0beb95aa"}