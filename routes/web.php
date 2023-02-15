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

Route::get('/', function () {
    return view('client.home.home');
});
// Route::get('/register-as-a-tutor','TutorController@register')->name('tutor_register');
Route::prefix('giasu')->group(function () {
    Route::get('/dangki', [
        'as'=> 'giasu.dangki',
        'uses' => 'TutorController@register',
            // 'middleware'=> 'can:subject-list'
    ]);
    Route::get('/fect-quanhuyen', [
        'as'=> 'giasu.dangki.fect_qh',
        'uses' => 'TutorController@fectQuanHuyen',
            // 'middleware'=> 'can:subject-list'
    ]);
    Route::get('/fect-xaphuongthitran', [
        'as'=> 'giasu.dangki.fect_xptt',
        'uses' => 'TutorController@fectXaPhuong',
    ]);
    Route::get('/render-lop', [
        'as'=> 'giasu.render_lop',
        'uses' => 'TutorController@renderLop',
    ]);
    Route::get('/render-quan', [
        'as'=> 'giasu.render_quan',
        'uses' => 'TutorController@renderQuanHuyen',
    ]);


});



//Admin
Route::get('/admin','AdminController@loginAdmin')->name('loginAdmin');
Route::post('/admin','AdminController@checkLoginAdmin')->name('checkLoginAdmin');
Route::get('/admin/logout','AdminController@logout')->name('logoutAdmin'); //middleware->checklogin
Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home'); //phân quyền dashboard

Route::prefix('admin')->group(function () {
    Route::prefix('subject')->group(function () {
        Route::get('/', [
            'as'=> 'subject.index',
            'uses' => 'SubjectController@index',
            'middleware'=> 'can:subject-list'
        ]);
        Route::get('/create', [
            'as'=> 'subject.create',
            'uses' => 'SubjectController@create',
            'middleware'=> 'can:subject-add'
        ]);
        Route::post('/store', [
            'as'=> 'subject.store',
            'uses' => 'SubjectController@store'
        ]);
        Route::get('/edit/{id}', [
            'as'=> 'subject.edit',
            'uses' => 'SubjectController@edit',
            'middleware'=> 'can:subject-edit'
        ]);
        Route::post('/update/{id}', [
            'as'=> 'subject.update',
            'uses' => 'SubjectController@update'
        ]);
        Route::get('/delete/{id}', [
            'as'=> 'subject.delete',
            'uses' => 'SubjectController@delete',
            'middleware'=> 'can:subject-delete'
        ]);


    });
    Route::prefix('grade')->group(function () {
        Route::get('/', [
            'as'=> 'grade.index',
            'uses' => 'GradeController@index',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::get('/create', [
            'as'=> 'grade.create',
            'uses' => 'GradeController@create',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::post('/store', [
            'as'=> 'grade.store',
            'uses' => 'GradeController@store',
        ]);
        Route::get('/edit/{id}', [
            'as'=> 'grade.edit',
            'uses' => 'GradeController@edit',
        ]);
        Route::post('/update/{id}', [
            'as'=> 'grade.update',
            'uses' => 'GradeController@update',
        ]);
        Route::get('/delete/{id}', [
            'as'=> 'grade.delete',
            'uses' => 'GradeController@delete',
        ]);

    });

    Route::prefix('user')->group(function () {
        Route::get('/', [
            'as'=> 'user.index',
            'uses' => 'UserController@index',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::get('/create', [
            'as'=> 'user.create',
            'uses' => 'UserController@create',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::post('/store', [
            'as'=> 'user.store',
            'uses' => 'UserController@store',
        ]);
        Route::get('/edit/{id}', [
            'as'=> 'user.edit',
            'uses' => 'UserController@edit',
        ]);
        Route::post('/update/{id}', [
            'as'=> 'user.update',
            'uses' => 'UserController@update',
        ]);
        Route::get('/delete/{id}', [
            'as'=> 'user.delete',
            'uses' => 'UserController@delete',
        ]);

    });

    Route::prefix('role')->group(function () {
        Route::get('/', [
            'as'=> 'role.index',
            'uses' => 'RoleController@index',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::get('/create', [
            'as'=> 'role.create',
            'uses' => 'RoleController@create',
            // 'middleware'=> 'can:category-list'
        ]);
        Route::post('/store', [
            'as'=> 'role.store',
            'uses' => 'RoleController@store',
        ]);
        Route::get('/edit/{id}', [
            'as'=> 'role.edit',
            'uses' => 'RoleController@edit',
        ]);
        Route::post('/update/{id}', [
            'as'=> 'role.update',
            'uses' => 'RoleController@update',
        ]);
        Route::get('/delete/{id}', [
            'as'=> 'role.delete',
            'uses' => 'RoleController@delete',
        ]);

    });

});



