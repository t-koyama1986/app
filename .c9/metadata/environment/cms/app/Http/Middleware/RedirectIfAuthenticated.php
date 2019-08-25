{"filter":false,"title":"RedirectIfAuthenticated.php","tooltip":"/cms/app/Http/Middleware/RedirectIfAuthenticated.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Middleware;","","use Closure;","use Illuminate\\Support\\Facades\\Auth;","","class RedirectIfAuthenticated","{","    /**","     * Handle an incoming request.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  \\Closure  $next","     * @param  string|null  $guard","     * @return mixed","     */","    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","","        return $next($request);","    }","}",""],"id":6},{"start":{"row":0,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Middleware;","use Closure;","use Illuminate\\Support\\Facades\\Auth;","class RedirectIfAuthenticated","{","    /**","     * Handle an incoming request.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  \\Closure  $next","     * @param  string|null  $guard","     * @return mixed","     */","    public function handle($request, Closure $next, $guard = null)","    {","        if (Auth::guard($guard)->check()) {","            return redirect('/home');","        }","        return $next($request);","    }","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":1},"end":{"row":21,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566479777889,"hash":"d7694f42ad6473afdc826253abec7c2f23df780c"}