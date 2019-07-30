{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":86,"position":86,"stack":[[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":19,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["<?php","use App\\Book;","use Illuminate\\Http\\Request;","","/**","* 本のダッシュボード表示(books.blade.php)","*/","Route::get('/', function () {","    return view(\"books\"); //←　　　この行は、勝手に追加したない内容　　　　　","    //books.blade.phpを読み込む","});","","/**","* 「本」を追加：処理","*/","Route::post('/books', function (Request $request) {","    //","});","","/**","* 本を削除：処理","*/","Route::delete('/book/{book}', function (Book $book) {","    //","});",""],"id":3}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"remove","lines":["k"],"id":4},{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"remove","lines":["o"]},{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"remove","lines":["o"]},{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"remove","lines":["B"]}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"insert","lines":["A"],"id":5},{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"insert","lines":["d"]},{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"insert","lines":["m"]},{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"insert","lines":["i"]},{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["n"]}],[{"start":{"row":20,"column":14},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":14},"action":"insert","lines":["use App\\Admin;"],"id":7}],[{"start":{"row":21,"column":14},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":14},"action":"insert","lines":["use App\\Admin;"],"id":9}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"remove","lines":["n"],"id":10},{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"remove","lines":["i"]},{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"remove","lines":["m"]},{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"remove","lines":["d"]}],[{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["r"],"id":11},{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["t"]},{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":["i"]},{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["c"]},{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["l"]},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["e"]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"remove","lines":["n"],"id":12},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"remove","lines":["i"]},{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"remove","lines":["m"]},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"remove","lines":["d"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"remove","lines":["A"]}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"insert","lines":["N"],"id":13},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["u"]},{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"insert","lines":["s"]},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"insert","lines":["e"]},{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["r"]}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["-"],"id":14}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":3},"action":"insert","lines":["// "],"id":15},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"insert","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"insert","lines":["// "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":3},"action":"insert","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"insert","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"insert","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"insert","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"insert","lines":["// "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"insert","lines":["// "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":3},"action":"insert","lines":["// "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":3},"action":"insert","lines":["// "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":3},"action":"insert","lines":["// "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""],"id":16},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["b"]},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"remove","lines":["o"],"id":19},{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["b"]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["A"],"id":20},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":["d"]},{"start":{"row":25,"column":2},"end":{"row":25,"column":3},"action":"insert","lines":["m"]},{"start":{"row":25,"column":3},"end":{"row":25,"column":4},"action":"insert","lines":["i"]},{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"remove","lines":["n"],"id":21},{"start":{"row":25,"column":3},"end":{"row":25,"column":4},"action":"remove","lines":["i"]},{"start":{"row":25,"column":2},"end":{"row":25,"column":3},"action":"remove","lines":["m"]},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"remove","lines":["d"]},{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["A"]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["a"],"id":22},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":["d"]},{"start":{"row":25,"column":2},"end":{"row":25,"column":3},"action":"insert","lines":["m"]},{"start":{"row":25,"column":3},"end":{"row":25,"column":4},"action":"insert","lines":["i"]},{"start":{"row":25,"column":4},"end":{"row":25,"column":5},"action":"insert","lines":["n"]},{"start":{"row":25,"column":5},"end":{"row":25,"column":6},"action":"insert","lines":["s"]}],[{"start":{"row":25,"column":6},"end":{"row":25,"column":7},"action":"insert","lines":["."],"id":23},{"start":{"row":25,"column":7},"end":{"row":25,"column":8},"action":"insert","lines":["b"]},{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":["l"]},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["a"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["d"]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["."],"id":24},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["p"]},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["h"]},{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["p"]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":3},"action":"insert","lines":["// "],"id":25}],[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["n"],"id":26},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":25,"column":21},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":27}],[{"start":{"row":25,"column":21},"end":{"row":26,"column":0},"action":"remove","lines":["",""],"id":28},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["o"]},{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"remove","lines":["n"]}],[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["の"],"id":29},{"start":{"row":25,"column":20},"end":{"row":25,"column":24},"action":"insert","lines":["ひょっじ"]}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":["じ"],"id":30},{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"remove","lines":["っ"]},{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":["ょ"]},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["ひ"]}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":22},"action":"insert","lines":["表示"],"id":31}],[{"start":{"row":26,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["/**","* 本のダッシュボード表示(books.blade.php)","*/",""],"id":32}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":21},"action":"remove","lines":["book"],"id":33},{"start":{"row":27,"column":17},"end":{"row":27,"column":22},"action":"insert","lines":["admin"]}],[{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"remove","lines":["い"],"id":34},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"remove","lines":["な"]}],[{"start":{"row":29,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["","    ",""],"id":35}],[{"start":{"row":30,"column":4},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":36},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":52},"action":"remove","lines":[" //←　　　この行は、勝手に追加した内容　　　　　"],"id":37}],[{"start":{"row":28,"column":6},"end":{"row":28,"column":10},"action":"remove","lines":["book"],"id":38},{"start":{"row":28,"column":6},"end":{"row":28,"column":7},"action":"insert","lines":["a"]},{"start":{"row":28,"column":7},"end":{"row":28,"column":8},"action":"insert","lines":["d"]},{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"insert","lines":["m"]},{"start":{"row":28,"column":9},"end":{"row":28,"column":10},"action":"insert","lines":["i"]},{"start":{"row":28,"column":10},"end":{"row":28,"column":11},"action":"insert","lines":["n"]}],[{"start":{"row":34,"column":0},"end":{"row":37,"column":0},"action":"remove","lines":["/**","* 「本」を追加：処理","*/",""],"id":39}],[{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":35,"column":0},"end":{"row":36,"column":0},"action":"insert","lines":["// admins.blade.phpの表示",""],"id":41}],[{"start":{"row":35,"column":22},"end":{"row":36,"column":0},"action":"remove","lines":["",""],"id":42}],[{"start":{"row":35,"column":3},"end":{"row":35,"column":9},"action":"remove","lines":["admins"],"id":43},{"start":{"row":35,"column":3},"end":{"row":35,"column":4},"action":"insert","lines":["a"]},{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["r"]},{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"insert","lines":["t"]},{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"insert","lines":["i"]},{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"insert","lines":["c"]},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"insert","lines":["l"]},{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"insert","lines":["s"],"id":44}],[{"start":{"row":40,"column":0},"end":{"row":43,"column":0},"action":"remove","lines":["/**","* 本を削除：処理","*/",""],"id":45}],[{"start":{"row":40,"column":0},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":46}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":["n"],"id":47},{"start":{"row":40,"column":1},"end":{"row":40,"column":2},"action":"insert","lines":["-"]},{"start":{"row":40,"column":2},"end":{"row":40,"column":3},"action":"insert","lines":["u"]},{"start":{"row":40,"column":3},"end":{"row":40,"column":4},"action":"insert","lines":["s"]},{"start":{"row":40,"column":4},"end":{"row":40,"column":5},"action":"insert","lines":["e"]},{"start":{"row":40,"column":5},"end":{"row":40,"column":6},"action":"insert","lines":["r"]},{"start":{"row":40,"column":6},"end":{"row":40,"column":7},"action":"insert","lines":["s"]}],[{"start":{"row":40,"column":7},"end":{"row":40,"column":8},"action":"insert","lines":["."],"id":48},{"start":{"row":40,"column":8},"end":{"row":40,"column":9},"action":"insert","lines":["b"]},{"start":{"row":40,"column":9},"end":{"row":40,"column":10},"action":"insert","lines":["l"]},{"start":{"row":40,"column":10},"end":{"row":40,"column":11},"action":"insert","lines":["a"]},{"start":{"row":40,"column":11},"end":{"row":40,"column":12},"action":"insert","lines":["d"]},{"start":{"row":40,"column":12},"end":{"row":40,"column":13},"action":"insert","lines":["e"]},{"start":{"row":40,"column":13},"end":{"row":40,"column":14},"action":"insert","lines":["."]},{"start":{"row":40,"column":14},"end":{"row":40,"column":15},"action":"insert","lines":["p"]},{"start":{"row":40,"column":15},"end":{"row":40,"column":16},"action":"insert","lines":["h"]},{"start":{"row":40,"column":16},"end":{"row":40,"column":17},"action":"insert","lines":["p"]}],[{"start":{"row":40,"column":17},"end":{"row":40,"column":18},"action":"insert","lines":["の"],"id":49},{"start":{"row":40,"column":18},"end":{"row":40,"column":20},"action":"insert","lines":["表示"]}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":3},"action":"insert","lines":["// "],"id":50}],[{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"remove","lines":["s"],"id":51},{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"remove","lines":["k"]},{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"remove","lines":["o"]},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"remove","lines":["o"]},{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"remove","lines":["b"]}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["a"],"id":52},{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["r"]},{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":["t"]},{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"insert","lines":["i"]},{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"insert","lines":["c"]},{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"insert","lines":["l"]}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":20},"action":"remove","lines":["articl"],"id":53},{"start":{"row":36,"column":14},"end":{"row":36,"column":22},"action":"insert","lines":["articles"]}],[{"start":{"row":41,"column":7},"end":{"row":41,"column":13},"action":"remove","lines":["delete"],"id":54},{"start":{"row":41,"column":7},"end":{"row":41,"column":8},"action":"insert","lines":["p"]},{"start":{"row":41,"column":8},"end":{"row":41,"column":9},"action":"insert","lines":["o"]},{"start":{"row":41,"column":9},"end":{"row":41,"column":10},"action":"insert","lines":["s"]},{"start":{"row":41,"column":10},"end":{"row":41,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":41,"column":10},"end":{"row":41,"column":11},"action":"remove","lines":["e"],"id":55}],[{"start":{"row":41,"column":10},"end":{"row":41,"column":11},"action":"insert","lines":["t"],"id":56}],[{"start":{"row":41,"column":0},"end":{"row":44,"column":0},"action":"remove","lines":["Route::post('/book/{book}', function (Book $book) {","    //","});",""],"id":57},{"start":{"row":41,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["Route::post('/articles', function (Request $request) {","    //","});",""]}],[{"start":{"row":41,"column":15},"end":{"row":41,"column":22},"action":"remove","lines":["rticles"],"id":58},{"start":{"row":41,"column":14},"end":{"row":41,"column":15},"action":"remove","lines":["a"]}],[{"start":{"row":41,"column":14},"end":{"row":41,"column":15},"action":"insert","lines":["n"],"id":59},{"start":{"row":41,"column":15},"end":{"row":41,"column":16},"action":"insert","lines":["-"]},{"start":{"row":41,"column":16},"end":{"row":41,"column":17},"action":"insert","lines":["u"]},{"start":{"row":41,"column":17},"end":{"row":41,"column":18},"action":"insert","lines":["s"]},{"start":{"row":41,"column":18},"end":{"row":41,"column":19},"action":"insert","lines":["e"]},{"start":{"row":41,"column":19},"end":{"row":41,"column":20},"action":"insert","lines":["r"]},{"start":{"row":41,"column":20},"end":{"row":41,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":40,"column":23},"end":{"row":40,"column":24},"action":"insert","lines":["　"],"id":60}],[{"start":{"row":40,"column":24},"end":{"row":40,"column":28},"action":"insert","lines":["これから"],"id":61}],[{"start":{"row":40,"column":28},"end":{"row":40,"column":30},"action":"insert","lines":["編集"],"id":62}],[{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"insert","lines":["　"],"id":63},{"start":{"row":35,"column":25},"end":{"row":35,"column":29},"action":"insert","lines":["これから"]}],[{"start":{"row":35,"column":29},"end":{"row":35,"column":31},"action":"insert","lines":["編集"],"id":64}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":3},"action":"remove","lines":["// "],"id":65},{"start":{"row":2,"column":0},"end":{"row":2,"column":3},"action":"remove","lines":["// "]},{"start":{"row":3,"column":0},"end":{"row":3,"column":3},"action":"remove","lines":["// "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":3},"action":"remove","lines":["// "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"remove","lines":["// "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":3},"action":"remove","lines":["// "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":3},"action":"remove","lines":["// "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":3},"action":"remove","lines":["// "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":3},"action":"remove","lines":["// "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":3},"action":"remove","lines":["// "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":3},"action":"remove","lines":["// "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":3},"action":"remove","lines":["// "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":3},"action":"remove","lines":["// "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":3},"action":"remove","lines":["// "]}],[{"start":{"row":1,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","Route::get('/', function () {","    return view('welcome');","});","","",""],"id":66}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["<?php",""],"id":67},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["<?php",""]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["<?php",""],"id":68}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"remove","lines":[";"],"id":70},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":[";"]}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"remove","lines":[";"],"id":71},{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":[";"]}],[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"remove","lines":["-"],"id":72}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"remove","lines":["-"],"id":73}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"remove","lines":["-"],"id":74}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["s"],"id":76}],[{"start":{"row":12,"column":4},"end":{"row":13,"column":4},"action":"remove","lines":["","    "],"id":78},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]},{"start":{"row":10,"column":27},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"insert","lines":["\\"],"id":79}],[{"start":{"row":10,"column":27},"end":{"row":10,"column":28},"action":"remove","lines":["\\"],"id":80}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":81},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["// admins.blade.phpの表示","Route::get('/', function () {","    return view(\"admin\");","    //admins.blade.phpを読み込む","});",""],"id":82}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["t"],"id":83},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["e"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["s"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":24},"action":"remove","lines":["return view(\"admin\")"],"id":84},{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["t"]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["e"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["s"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["r"],"id":85},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":["e"]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":["t"]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":["u"]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["-"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"remove","lines":["-"],"id":86}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["r"],"id":87},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":[" "],"id":88},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["\""]}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["\""],"id":89}],[{"start":{"row":14,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["// admins.blade.phpの表示","Route::get('/test', function () {","    return \"test\";","    //admins.blade.phpを読み込む","});",""],"id":91}],[{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["s"],"id":92}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":23},"end":{"row":9,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1564487710045,"hash":"91c7bc0af1854ad0ef61dbebba348ce52221c06f"}