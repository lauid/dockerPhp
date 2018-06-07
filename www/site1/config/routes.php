<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
	  echo 'Hello world!';
});
Macaw::get('info', function() {
	phpinfo();
});

Macaw::get('test', function() {
  echo "成功！";
});

Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::get('/home', 'HomeController@home');

Macaw::dispatch();

