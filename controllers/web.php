<?php

// These 3 routes below are the main $route
// Please don't change these three routes
// Feel free to make custom ones
Route::get("home", "IndexController@show");
Route::get("/", "IndexController@show");
Route::get("add", "IndexController@add");



//Here you can define all of your routes
Route::get("test", "IndexController@test");



?>
