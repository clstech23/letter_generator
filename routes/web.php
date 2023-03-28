<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LearningController;

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

Route::get('send-email-pdf', [PDFController::class, 'index']);

Route::group(['middleware' => 'prevent-back-history'],function(){
   
   


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $userId = Auth::id();
    $data['allData'] = DB::table('customers')->where('user_id', $userId)->get();
    return view('clsu.customer_view',$data);
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
 
Route::group(['middleware' => 'auth'],function(){

    Route::get('/chat', function () {
        return view('clsu.chat');
    });
    Route::match(['get', 'post'], '/botman', 'BotManController@handle');

/*Route::prefix('payment')->group(function(){

Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::post ( '/', [CheckoutController::class,'call'] );

});*/
    // Letter Generatto Route
Route::prefix('letter')->group(function(){

Route::get('/view', [LetterController::class, 'LetterView'])->name('letter.view');
Route::get('/add', [LetterController::class, 'AddLetter'])->name('add.letter');
Route::post('/store', [LetterController::class, 'LetterStore'])->name('letter.store');
Route::get('/edit/{id}', [LetterController::class, 'LetterEdit'])->name('letter.edit');
Route::post('/update/{id}', [LetterController::class, 'LetterUpdate'])->name('letter.update');
Route::get('/delete/{id}', [LetterController::class, 'LetterDelete'])->name('letter.delete');

});
// Customer Registration route
Route::prefix('customer')->group(function(){

    Route::get('/view', [CustomerController::class, 'customerView'])->name('customer.view');
    Route::get('/add', [CustomerController::class, 'Addcustomer'])->name('add.customer');
    Route::post('/store', [CustomerController::class, 'customerStore'])->name('customer.store');
    Route::get('/edit/{id}', [CustomerController::class, 'customerEdit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class, 'customerUpdate'])->name('customer.update');
    Route::get('/delete/{id}', [CustomerController::class, 'customerDelete'])->name('customer.delete');
    Route::get('/details/{id}', [CustomerController::class, 'customerDetails'])->name('customer.details');
///
    Route::get('/checkout/{id}', [CustomerController::class, 'checkout'])->name('checkout.view');
    Route::post ( '/addcheck', [CustomerController::class,'call'] )->name("add.check");
    });

    Route::prefix('learning')->group(function(){
        Route::get('/view', [LearningController::class, 'leaningView'])->name('learning.view');
       });
 // User Management All Routes 

Route::prefix('users')->group(function(){

Route::get('/view', [UserController::class, 'UserView'])->name('user.view');

Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');

Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');

Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');

Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');

}); 

/// User Profile and Change Password 
Route::prefix('profile')->group(function(){

Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');

Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');

Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');

Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');

Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');

}); 


}); // End Middleare Auth Route 

});  // Prevent Back Middleare