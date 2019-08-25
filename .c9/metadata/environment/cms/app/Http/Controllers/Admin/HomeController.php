{"filter":false,"title":"HomeController.php","tooltip":"/cms/app/Http/Controllers/Admin/HomeController.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class HomeController extends Controller","{","    /**","     * Create a new controller instance.","     *","     * @return void","     */","    public function __construct()","    {","        $this->middleware('auth');","    }","","    /**","     * Show the application dashboard.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        return view('home');","    }","}",""],"id":3},{"start":{"row":0,"column":0},"end":{"row":20,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers\\Admin;  // Adminの追加","","use App\\Http\\Controllers\\Controller;   // 追加","use Illuminate\\Http\\Request;","","class HomeController extends Controller","{","","/**"," * Show the application dashboard."," *"," * @return \\Illuminate\\Http\\Response"," */","public function index()","{","    return view('admin.home');   // 管理者用のテンプレート","}","","","}"]}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["<?php","namespace App\\Http\\Controllers\\Admin;  // Adminの追加","","use App\\Http\\Controllers\\Controller;   // 追加","use Illuminate\\Http\\Request;","","class HomeController extends Controller","{","","/**"," * Show the application dashboard."," *"," * @return \\Illuminate\\Http\\Response"," */","public function index()","{","    return view('admin.home');   // 管理者用のテンプレート","}","","","}"],"id":12},{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers\\Admin;  // Adminの追加","use App\\Http\\Controllers\\Controller;   // 追加","use Illuminate\\Http\\Request;","class HomeController extends Controller","{","/**"," * Show the application dashboard."," *"," * @return \\Illuminate\\Http\\Response"," */","public function index()","{","    return view('admin.home');   // 管理者用のテンプレート","}","}"]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":["<?php","namespace App\\Http\\Controllers\\Admin;  // Adminの追加","use App\\Http\\Controllers\\Controller;   // 追加","use Illuminate\\Http\\Request;","class HomeController extends Controller","{","/**"," * Show the application dashboard."," *"," * @return \\Illuminate\\Http\\Response"," */","public function index()","{","    return view('admin.home');   // 管理者用のテンプレート","}","}"],"id":13},{"start":{"row":0,"column":0},"end":{"row":15,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers\\Admin;  // Adminの追加","use App\\Http\\Controllers\\Controller;   // 追加","use Illuminate\\Http\\Request;","class HomeController extends Controller","{","/**"," * Show the application dashboard."," *"," * @return \\Illuminate\\Http\\Response"," */","public function index()","{","    return view('admin.home');   // 管理者用のテンプレート","}","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":1},"end":{"row":15,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566480313523,"hash":"b7eb2f2064affaa10f433f338014f2518ec0fa2b"}