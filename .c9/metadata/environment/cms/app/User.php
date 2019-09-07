{"filter":false,"title":"User.php","tooltip":"/cms/app/User.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":9,"column":19},"action":"remove","lines":["<?php","","namespace App;","","use Illuminate\\Notifications\\Notifiable;","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","","class User extends Authenticatable","{","    use Notifiable;"],"id":6},{"start":{"row":0,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["<?php","namespace App;","use Illuminate\\Notifications\\Notifiable;","use Illuminate\\Contracts\\Auth\\MustVerifyEmail;","use Illuminate\\Foundation\\Auth\\User as Authenticatable;","class User extends Authenticatable","{","    use Notifiable;",""]}],[{"start":{"row":10,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name', 'email', 'password',","    ];","","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","}",""],"id":16},{"start":{"row":10,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["    /**","     * The attributes that are mass assignable.","     *","     * @var array","     */","    protected $fillable = [","        'name', 'email', 'password', 'profile_image'","    ];","    /**","     * The attributes that should be hidden for arrays.","     *","     * @var array","     */","    protected $hidden = [","        'password', 'remember_token',","    ];","    /**","     * The attributes that should be cast to native types.","     *","     * @var array","     */","    protected $casts = [","        'email_verified_at' => 'datetime',","    ];","}"]}]]},"ace":{"folds":[],"scrolltop":107.671875,"scrollleft":0,"selection":{"start":{"row":34,"column":1},"end":{"row":34,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":6,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1566479536655,"hash":"b1337fa216a78ce84d96e082352f67c4d003e599"}