<?php

// this changes the routes of pages
// returns a specific url pattern

Route::get('/', array(
'as' => 'home',
'uses' => 'HomeController@home'
));
