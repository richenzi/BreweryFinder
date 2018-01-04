<?php

Route::get('/breweries/search', 'Api\v1\BreweryController@searchBreweries');

Route::get('/breweries', 'Api\v1\BreweryController@getBreweries');

Route::get('/breweries/{id}', 'Api\v1\BreweryController@getBrewery');