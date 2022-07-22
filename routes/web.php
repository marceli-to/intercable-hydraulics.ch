<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/dev/copy', 'DevController@copy');


// Auth routes
Auth::routes(['verify' => true, 'register' => false]);
Route::get('/logout', 'Auth\LoginController@logout');

// Home
Route::get('/', 'PageController@index')->name('page.home');
Route::get('/fr', 'PageController@index')->name('page.home');
Route::get('/de', 'PageController@index')->name('page.home');
Route::get('/it', 'PageController@index')->name('page.home');
Route::multilingual('/home', 'PageController@index')->name('page.home');

// Products
Route::multilingual('products', 'ProductController@listing')->name('page.product.listing');
Route::multilingual('product', 'ProductController@show')->name('page.product.show');

// Accessories
Route::multilingual('accessories', 'AccessoryController@listing')->name('page.accessory.listing');
Route::multilingual('accessory', 'AccessoryController@show')->name('page.accessory.show');

// Consumables
Route::multilingual('consumables', 'ConsumableController@listing')->name('page.consumable.listing');
Route::multilingual('consumable', 'ConsumableController@show')->name('page.consumable.show');

// Tools
Route::multilingual('tool', 'ToolController@show')->name('page.tool.show');

// Form - Callback
Route::multilingual('contact-callback', 'FormController@callback')->name('page.forms.callback');
Route::multilingual('contact-callback-submit', 'FormController@callbackSubmit')->name('page.forms.callback.submit')->method('post');

// Form - Training
Route::multilingual('contact-training', 'FormController@training')->name('page.forms.training');
Route::multilingual('contact-training-submit', 'FormController@trainingSubmit')->name('page.forms.training.submit')->method('post');

// Form - Presentation
Route::multilingual('contact-presentation', 'FormController@presentation')->name('page.forms.presentation');
Route::multilingual('contact-presentation-submit', 'FormController@presentationSubmit')->name('page.forms.presentation.submit')->method('post');

// Form - Thank you
Route::multilingual('thank-you', 'FormController@thankYou')->name('page.forms.thankyou');

// Url based images
Route::get('/img/{template}/{filename}', 'ImageController@getResponse');

Route::get('/training-user', function () {
  return new App\Mail\TrainingUser(
    [
      'firstname' => 'Marcel',
      'name' => 'Stadelmann',
      'company' => 'marceli.to',
      'phone' => '078 749 74 09',
      'email' => 'marcel.stadelmann@gmail.com',
      'date' => '19.05.2021',
    ]
  );
});

Route::get('/training-owner', function () {
  return new App\Mail\TrainingOwner(
    [
      'firstname' => 'Marcel',
      'name' => 'Stadelmann',
      'company' => 'marceli.to',
      'phone' => '078 749 74 09',
      'email' => 'marcel.stadelmann@gmail.com',
      'date' => '19.05.2021',
      'headcount' => '15',
    ]
  );
});

/*
|--------------------------------------------------------------------------
| Admin Web routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum', 'verified')->group(function() {

  // CatchAll: Dashboard Administration
  Route::get('administration/{any?}', function () {
    return view('dashboards.administration.app');
  })->where('any', '.*')->middleware('role:admin')->name('dashboard_admin');

});
