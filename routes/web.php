<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::domain('www.team.com')->group(function(){

    // 业务员
    Route::prefix('/yewu')->middleware('islogin')->group(function(){
        Route::get('/',"Admin\YewuController@index");   //列表展示
        Route::get('create',"Admin\YewuController@create"); //添加页面
        Route::post('store',"Admin\YewuController@store");  //执行添加
        Route::get('edit/{id}',"Admin\YewuController@edit");   //编辑展示
        Route::post('update/{id}',"Admin\YewuController@update");  //执行编辑
        Route::any('destroy/{id}',"Admin\YewuController@destroy");  //执行删除
    });

	Route::prefix('/login')->group(function(){
		Route::get('/',"LoginController@login");//登录
		Route::post('/logindo',"LoginController@logindo");
		Route::get('/logincreate','LoginController@logincreate');//管理员添加
		Route::post('/loginstroe','LoginController@loginstroe');//管理员执行添加
		//管理员展示
		Route::get('/loginindex','LoginController@loginindex');
		//管理员删除
		Route::get('/logindel/{id}','LoginController@logindel');
		//管理员修改
		Route::get('/loginupd/{id}','LoginController@loginupd');
		Route::post('/loginupdate/{id}','LoginController@loginupdate');

	});

	Route::prefix('/kewu')->middleware('islogin')->group(function(){
	    Route::get('/','Admin\KewuController@index');//列表展示
	    Route::get('create','Admin\KewuController@create');//添加
	    Route::post('store','Admin\KewuController@store');//添加方法
	    Route::get('edit/{id}','Admin\KewuController@edit');//编辑展示
	    Route::post('update/{id}','Admin\KewuController@update');//执行编辑
	    Route::get('destory/{id}','Admin\KewuController@destroy');//删除
	});


	Route::prefix('/meeting')->middleware('islogin')->middleware('islogin')->group(function(){
	    Route::get('create','Admin\MeetingController@create');//添加
	    Route::post('getCustome/{id}','Admin\MeetingController@getCustome');//添加
	    Route::post('store','Admin\MeetingController@store');//执行添加
	    Route::get('/','Admin\MeetingController@index');//展示
	    Route::get('destroy/{id}','Admin\MeetingController@destroy');//删除
	    Route::get('edit/{id}','Admin\MeetingController@edit');//编辑展示
	    Route::post('update/{id}','Admin\MeetingController@update');//执行更新

	});

	Route::prefix('/admin')->middleware('islogin')->group(function(){
		Route::get('/','Admin\IndexController@index');
	});

	Route::prefix('/inquire')->middleware('islogin')->group(function(){
		Route::get('/','Admin\InquireController@index');
		Route::get('/ajax','Admin\InquireController@ajax');
		Route::get('/meeting','Admin\InquireController@meeting');

	});

});