{"filter":false,"title":"api.php","tooltip":"/cms/routes/api.php","undoManager":{"mark":28,"position":28,"stack":[[{"start":{"row":17,"column":3},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":20}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["Route::get('/ajax', 'SampleController@ajax');",""],"id":21}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":17},"action":"remove","lines":["ajax"],"id":22},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["s"]},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["a"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["m"]},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["p"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["l"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"remove","lines":["s"],"id":23}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["S"],"id":24}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":20,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["Route::group([‘middleware’ => [‘api’]], function(){"," Route::resource(‘articles’, ‘Api\\ArticlesController’);","});"],"id":26}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"remove","lines":["‘"],"id":27}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":["'"],"id":28}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["’"],"id":29},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["'"]}],[{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["‘"],"id":30},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["'"]}],[{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"remove","lines":["’"],"id":31},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["'"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":[" "],"id":32}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":33}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"remove","lines":["‘"],"id":34},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["'"]}],[{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"remove","lines":["’"],"id":35},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["'"]}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"remove","lines":["‘"],"id":36},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["'"]}],[{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"remove","lines":["’"],"id":37},{"start":{"row":21,"column":55},"end":{"row":21,"column":56},"action":"insert","lines":["'"]}],[{"start":{"row":21,"column":37},"end":{"row":21,"column":45},"action":"remove","lines":["Articles"],"id":38},{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"insert","lines":["S"]},{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"insert","lines":["a"]},{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"insert","lines":["m"]},{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"insert","lines":["p"]},{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"insert","lines":["l"]},{"start":{"row":21,"column":42},"end":{"row":21,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":29},"action":"remove","lines":["articles"],"id":39},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["A"]}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["A"],"id":40}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["S"],"id":41},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["a"]},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["m"]},{"start":{"row":21,"column":24},"end":{"row":21,"column":25},"action":"insert","lines":["p"]},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":["l"]},{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["s"],"id":42}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["S"],"id":43}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["s"],"id":44}],[{"start":{"row":24,"column":39},"end":{"row":24,"column":44},"action":"remove","lines":["@ajax"],"id":45}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"remove","lines":["Route::get('/Sample', 'SampleController');",""],"id":46}],[{"start":{"row":21,"column":42},"end":{"row":21,"column":43},"action":"insert","lines":["a"],"id":47},{"start":{"row":21,"column":43},"end":{"row":21,"column":44},"action":"insert","lines":["p"]},{"start":{"row":21,"column":44},"end":{"row":21,"column":45},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":0},"end":{"row":23,"column":0},"action":"remove","lines":["Route::group(['middleware' => ['api']], function(){","    Route::resource('samples', 'Api\\SampleapiController');","});",""],"id":48}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":54},"end":{"row":21,"column":54},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566737166590,"hash":"10e6aacd1c1a04f2b6b95869dc0d030b708ca963"}