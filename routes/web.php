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
    
    $line = DB::table('link_lines')
            ->get();
    $line = $line[0]->link; 
    Session::put('link', $line);

    return view('welcome'  );
});

Route::get('index', function () {
    $line = DB::table('link_lines')
            ->get();
    $line = $line[0]->link; 
    Session::put('link', $line);

    return view('welcome');
})->name('/');

Route::get('user', function () {
    $line = DB::table('link_lines')
            ->get();
    $line = $line[0]->link; 
    Session::put('link', $line);

    return view('welcome');
})->name('index');

Route::get('set-up', function () {
    $line = DB::table('link_lines')
         ->get();
    $line = $line[0]->link; 
    Session::put('link', $line);
    
    return view('welcome');
})->name('index');


Route::get('registerAdmin', function () {
    return view('/auth/registerAdmin');
});

Auth::routes();


Route::get('/getInvitation', [App\Http\Controllers\InvitationController::class, 'index']);
Route::get('/createCode', [App\Http\Controllers\InvitationController::class, 'create']);
Route::post('/save-code', [App\Http\Controllers\InvitationController::class, 'store']);
Route::get('/edit-inv/{id}', [App\Http\Controllers\InvitationController::class, 'edit']);
Route::resource('/edit-code', App\Http\Controllers\InvitationController::class);
Route::post('/gatAjax', [App\Http\Controllers\InvitationController::class, 'getData']);
Route::get('/gatDestroy/{id}', [App\Http\Controllers\InvitationController::class, 'destroy']);
Route::get('/commission', [App\Http\Controllers\GetPageController::class, 'commission']);
Route::get('/walk-thousand', [App\Http\Controllers\GetPageController::class, 'walkThousand']);
Route::get('/all-tems', [App\Http\Controllers\GetPageController::class, 'allTems']);
Route::get('/my-qrcode', [App\Http\Controllers\GetPageController::class, 'myQrCode']);
Route::get('/member', [App\Http\Controllers\GetPageController::class, 'member']);
Route::get('/group-report', [App\Http\Controllers\GetPageController::class, 'groupReport']);
Route::get('/top-up-money', [App\Http\Controllers\GetPageController::class, 'topUpMoney']);
Route::get('/withdraw-money', [App\Http\Controllers\GetPageController::class, 'withdrawMoney']);
Route::get('/general', [App\Http\Controllers\GetPageController::class, 'general']);
Route::get('/editUser', [App\Http\Controllers\GetPageController::class, 'editUser']);
Route::get('/comment', [App\Http\Controllers\GetPageController::class, 'comment']);
Route::get('/Kyoto', [App\Http\Controllers\GetPageController::class, 'Kyoto']);
Route::get('/newAdmin', [App\Http\Controllers\GetPageController::class, 'newAdmin']);
Route::post('/registerAdmin', [App\Http\Controllers\GetPageController::class, 'registerAdmin']);
Route::post('/new-user', [App\Http\Controllers\GetPageController::class, 'newUser']);
Route::get('/add-money/{id}', [App\Http\Controllers\GetPageController::class, 'addMoney']);
Route::get('/money-user', [App\Http\Controllers\GetPageController::class, 'moneyUser']);
Route::get('/admin', [App\Http\Controllers\GetPageController::class, 'admin']);
Route::post('/money-user', [App\Http\Controllers\GetPageController::class, 'moneyUser']);

Route::get('/outMoney/{id}', [App\Http\Controllers\outMoneyUsersController::class, 'outMoney']);
Route::get('/remove/{id}', [App\Http\Controllers\outMoneyUsersController::class, 'destroy']);
Route::resource('/account', App\Http\Controllers\BankAccountController::class);
Route::resource('/withdraw', App\Http\Controllers\Withdraw_moneyController::class);
Route::post('/reload-money', [App\Http\Controllers\Withdraw_moneyController::class,'reloadMoney']);
Route::post('/buy-shop', [App\Http\Controllers\BuyOutController::class ,'store'] );
/* admin */

Route::group(['middleware'=>'check'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/add-money-user', App\Http\Controllers\addMonetUserController::class);
    Route::resource('/link-line', App\Http\Controllers\LinkLineController::class);
    Route::resource('/add-money-user', App\Http\Controllers\addMonetUserController::class);
    Route::resource('/getOutMonetUser', App\Http\Controllers\outMoneyUsersController::class);
    
});

