<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
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

Route::get('/register', [RegistrationController::class, 'index']);
Route::get('/login', function () {
    return view('login');
});

Route::get('/customer', function () {
$customers= Customer::all();
echo '<pre>';
print_r($customers->toArray());
});