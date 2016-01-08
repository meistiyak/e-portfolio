<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   // return view('welcome');
	return redirect('/auth/login');
});


Route::any('user/store', 'UserController@store');


// Login routes...
get('auth/login', 'SessionsController@login');
post('auth/login', 'SessionsController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::get('auth/logout', 'SessionsController@getLogout');

// Registration routes...
get('register', 'RegistrationController@register');
post('register', 'RegistrationController@postRegister');
get('register/confirm/{token}', 'RegistrationController@confirmEmail');

Route::get('auth/{provider?}', 'Auth\AuthController@login');

//Route::resource('/pages/profile', 'homeController@profile');
Route::resource('/profile_page/index', 'homeController@profile');
Route::resource('/pages/confirmMail', 'homeController@confirmMailAddress');
Route::resource('pages/Terms', 'homeController@terms');


Route::post('/Dashboard/dashboard', 'homeController@dashboard');


Route::resource('project-test', 'homeController@project');
Route::resource('/form/add-project', 'homeController@addproject');
Route::post('/form/add-project', 'homeController@pstore');
//Route::post('pdelete','homeController@pdestroy');

Route::resource('publication', 'homeController@publication');
Route::resource('/form/add-publication', 'homeController@addpublication');
Route::post('/form/add-publication','homeController@publicationstore');

Route::resource('awards', 'homeController@awards');
Route::resource('/form/add-award','homeController@addawards');
Route::post('/form/add-award', 'homeController@awardstore');

Route::resource('certification', 'homeController@certification');
Route::resource('/form/add-certification', 'homeController@addcertification');
Route::post('/form/add-certification','homeController@certificationstore');

Route::resource('/form/add-coding', 'homeController@coding');

Route::resource('scores', 'homeController@scores');
Route::resource('/form/add-score', 'homeController@addscore');
Route::post('/form/add-score','homeController@scorestore');

Route::resource('/Blog/article', 'homeController@blog');

Route::resource('experience','homeController@experience');
Route::resource('/form/add-experience','homeController@addexperience');
Route::post('/form/add-experience','homeController@experiencestore');


Route::resource('courses', 'homeController@courses');
Route::resource('/form/add-courses', 'homeController@addcourse');
Route::post('/form/add-courses', 'homeController@courseStore');

Route::resource('volunteering','homeController@volunteering');
Route::resource('/form/add-volun-expe', 'homeController@addvolun');
Route::post('/form/add-volun-expe', 'homeController@volunstore');



Route::resource('editprofile', 'homeController@editprofile');
Route::post('editprofile', 'homeController@storeprofile');
Route::resource('/profile_page/index', 'homeController@showprofile');



Route::resource('aboutme','homeController@aboutme');
Route::resource('aboutme','homeController@showaboute');
Route::resource('add-aboute','homeController@addaboute');
Route::post('add-aboute','homeController@aboutestore');








Route::controllers([
	'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController',
]);


// Send mail testing router from PHP server 
Route::get('test', function(){
	mail('portfoliohub007@gmail.com','Mail Paiso','Test Message');
});



// Authentication routes...
/*
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
*/

/*
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
*/



/*
// Password reset link request routes...
Route::get('/password/email', 'Auth\PasswordController@getEmail');
Route::post('/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('/password/reset', 'Auth\PasswordController@postReset');


// facebook Sociolite
Route::get('/auth/facebook', 'Auth\SocialAuthController@redirectToProvider');
Route::get('callback_facebook', 'Auth\SocialAuthController@handleProviderCallback');


// Github Sociolite
/*Route::get('/auth/github', 'Auth\SocialAuthController@github_redirect');
Route::get('callback_github', 'Auth\SocialAuthController@github_Callback');

get('callback_github', 'GithubAuthController@Github_login');



// Google Plus Sociolite
Route::get('/auth/google', 'Auth\SocialAuthController@google_plus_redirect');
Route::get('callback_google_plus', 'Auth\SocialAuthController@google_plsu_Callback');


// Google Plus Linkedin
Route::get('/auth/linkedin', 'Auth\SocialAuthController@linkedin_redirect');
Route::get('callback_linkedin', 'Auth\SocialAuthController@linkedin_Callback');

*/


//Route::get('Home', 'homeController@about');


//Route::resource('pages/forget_pass', 'homeController@forget');




