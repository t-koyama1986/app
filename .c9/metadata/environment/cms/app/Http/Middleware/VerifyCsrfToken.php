{"filter":false,"title":"VerifyCsrfToken.php","tooltip":"/cms/app/Http/Middleware/VerifyCsrfToken.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":17,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"hash":"8c4c47bbc980eed6ba59de2c6fd8a01e81376773","undoManager":{"mark":-1,"position":-1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":17,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Middleware;","","use Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken as Middleware;","","class VerifyCsrfToken extends Middleware","{","    /**","     * The URIs that should be excluded from CSRF verification.","     *","     * @var array","     */","    protected $except = [","        //","    ];","}",""],"id":3},{"start":{"row":0,"column":0},"end":{"row":19,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Middleware;","use Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken as Middleware;","class VerifyCsrfToken extends Middleware","{","    /**","     * Indicates whether the XSRF-TOKEN cookie should be set on the response.","     *","     * @var bool","     */","    protected $addHttpCookie = true;","    /**","     * The URIs that should be excluded from CSRF verification.","     *","     * @var array","     */","    protected $except = [","        //","    ];","}"]}]]},"timestamp":1566481193739}