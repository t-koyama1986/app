{"filter":false,"title":"verify.blade.php","tooltip":"/cms/resources/views/auth/verify.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row justify-content-center\">","        <div class=\"col-md-8\">","            <div class=\"card\">","                <div class=\"card-header\">{{ __('Verify Your Email Address') }}</div>","","                <div class=\"card-body\">","                    @if (session('resent'))","                        <div class=\"alert alert-success\" role=\"alert\">","                            {{ __('A fresh verification link has been sent to your email address.') }}","                        </div>","                    @endif","","                    {{ __('Before proceeding, please check your email for a verification link.') }}","                    {{ __('If you did not receive the email') }}, <a href=\"{{ route('verification.resend') }}\">{{ __('click here to request another') }}</a>.","                </div>","            </div>","        </div>","    </div>","</div>","@endsection"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":11},"end":{"row":23,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566477909411,"hash":"ffa5f9d490582223e42f9d7a4fc946d0435953a7"}