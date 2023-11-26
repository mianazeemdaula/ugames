<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/page/privacy-policy', function(){
    return view('privacy_policy');
});

Route::get('/page/terms-conditions', function(){
    return view('terms_conditions');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')
    // ->scopes(['publish_to_group', 'groups_access_member_info'])
    ->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
 
    return $user->token;
});