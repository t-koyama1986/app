{"filter":false,"title":"LoginController.php","tooltip":"/cms/app/Http/Controllers/Auth/LoginController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":39,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers\\Auth;","","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */","","    use AuthenticatesUsers;","","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/home';","","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","}",""],"id":6},{"start":{"row":0,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers\\Auth;","use App\\Http\\Controllers\\Controller;","use Illuminate\\Foundation\\Auth\\AuthenticatesUsers;","class LoginController extends Controller","{","    /*","    |--------------------------------------------------------------------------","    | Login Controller","    |--------------------------------------------------------------------------","    |","    | This controller handles authenticating users for the application and","    | redirecting them to your home screen. The controller uses a trait","    | to conveniently provide its functionality to your applications.","    |","    */","    use AuthenticatesUsers;","    /**","     * Where to redirect users after login.","     *","     * @var string","     */","    protected $redirectTo = '/home';","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('guest')->except('logout');","    }","}"]}]]},"ace":{"folds":[],"scrolltop":269.6953125,"scrollleft":0,"selection":{"start":{"row":32,"column":1},"end":{"row":32,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":48,"mode":"ace/mode/php"}},"timestamp":1566480504909,"hash":"9aad553421a59df516109ca8aa5ffbec3596e62d"}