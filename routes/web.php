<?php

return [

		/* 
		*	Declaring all web routes
		*	Make sure there is no slash (/) at the end of the route key string
		*	Each route url key must contain a class and and a method referenced with "@" as value
		*/

		// public pages

	'welcome' => 'HomeController@welcome',

		// Admin Authentication Pages

	'admin/signin' => 'Admin/User/AuthController@signin',

	'admin/captcha' => 'Admin/User/AuthController@checkCaptcha',

	'admin/login' => 'Admin/User/AuthController@login',

	'admin/password/forgot' => 'Admin/User/AuthController@forgotPassword',

	'admin/password/mail' => 'Admin/User/AuthController@sendResetInfo',

	'admin/password/reset' => 'Admin/User/AuthController@resetPassword',

	'admin/password/update' => 'Admin/User/AuthController@updatePassword',

	'admin/signout' => 'Admin/User/AuthController@signout',

	'admin/dashboard' => 'Admin/DashboardController@dashboard',

		// Admin items pages

	'admin/items/all' => 'Admin/ItemController@index',

	'admin/items/create' => 'Admin/ItemController@create',

	'admin/items/store' => 'Admin/ItemController@store',

	'admin/items/show' => 'Admin/ItemController@show',

	'admin/items/edit' => 'Admin/ItemController@edit',

	'admin/items/update' => 'Admin/ItemController@update',

	'admin/items/delete' => 'Admin/ItemController@delete',

		// Admin items pages

	'admin/user/show' => 'Admin/User/UserController@show',

	'admin/user/edit' => 'Admin/User/UserController@edit',

	'admin/user/edit/password' => 'Admin/User/UserController@editPassword',

	'admin/user/update' => 'Admin/User/UserController@update',

	'admin/user/update/password' => 'Admin/User/UserController@updatePassword',

];
