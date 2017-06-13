<?php

Route::get('/', function () {
    return view('blog.index');
});

Route::get('post/{id}', function() {
	return view();
});