{"filter":false,"title":"channels.php","tooltip":"/cms/routes/channels.php","undoManager":{"mark":7,"position":7,"stack":[[{"start":{"row":0,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","|","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});",""],"id":7},{"start":{"row":0,"column":0},"end":{"row":13,"column":3},"action":"insert","lines":["<?php","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","|","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":["|"],"id":8},{"start":{"row":4,"column":75},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":12,"column":3},"action":"remove","lines":["<?php","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});"],"id":15},{"start":{"row":0,"column":0},"end":{"row":13,"column":3},"action":"insert","lines":["<?php","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","|","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});"]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":20}],[{"start":{"row":5,"column":1},"end":{"row":6,"column":0},"action":"remove","lines":["",""],"id":21},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":["|"]},{"start":{"row":4,"column":75},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":75},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":22}],[{"start":{"row":0,"column":0},"end":{"row":12,"column":3},"action":"remove","lines":["<?php","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});"],"id":31},{"start":{"row":0,"column":0},"end":{"row":13,"column":3},"action":"insert","lines":["<?php","/*","|--------------------------------------------------------------------------","| Broadcast Channels","|--------------------------------------------------------------------------","|","| Here you may register all of the event broadcasting channels that your","| application supports. The given channel authorization callbacks are","| used to check if an authenticated user can listen to the channel.","|","*/","Broadcast::channel('App.User.{id}', function ($user, $id) {","    return (int) $user->id === (int) $id;","});"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":3},"end":{"row":13,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1566478227155,"hash":"2da5ad07e3e8273276d95924f090be1746345a22"}