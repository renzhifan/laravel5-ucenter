<?php
	Route::any(Config::get('ucenter.url'), function(){
		return \Renzhifan\Laravel5Ucenter\UcenterApi::execute();
	});
?>
