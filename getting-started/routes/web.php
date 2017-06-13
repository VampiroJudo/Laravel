<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{id}', function() {
	return view();
})