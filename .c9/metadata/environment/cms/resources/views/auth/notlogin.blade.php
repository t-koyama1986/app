{"filter":false,"title":"notlogin.blade.php","tooltip":"/cms/resources/views/auth/notlogin.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":77,"column":0},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row\">","        <div class=\"col-md-8 col-md-offset-2\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Register</div>","","                <div class=\"panel-body\">","                    <form class=\"form-horizontal\" method=\"POST\" action=\"{{ route('register') }}\">","                        {{ csrf_field() }}","","                        <div class=\"form-group{{ $errors->has('name') ? ' has-error' : '' }}\">","                            <label for=\"name\" class=\"col-md-4 control-label\">Name</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control\" name=\"name\" value=\"{{ old('name') }}\" required autofocus>","","                                @if ($errors->has('name'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('name') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ old('email') }}\" required>","","                                @if ($errors->has('email'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('email') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group{{ $errors->has('password') ? ' has-error' : '' }}\">","                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>","","                                @if ($errors->has('password'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('password') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <label for=\"password-confirm\" class=\"col-md-4 control-label\">Confirm Password</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required>","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <div class=\"col-md-6 col-md-offset-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    Register","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["t"]},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["e"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["s"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":4},"end":{"row":0,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1564489752986,"hash":"a94a8fe5ccb19ba61c4c0873d391e987982fbbd3"}