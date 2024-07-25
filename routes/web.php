<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

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
///



Route::get('/login', [UsersController::class, 'OpenLogin'])->name('login');
Route::post('/login', [UsersController::class, 'Login']);


Route::middleware(['auth'])->group(function () {

    Route::get('/register', [UsersController::class, 'OpenRegister']);
    Route::post('/register', [UsersController::class, 'Register']);
    Route::get('/viewusers', [UsersController::class, 'Viewusers']);
    Route::post('/delete-user', [UsersController::class, 'DeleteUser']);


    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/addmebership', [MembershipController::class, 'OpenAdd']);
    Route::post('/addmebership', [MembershipController::class, 'AddMembership']);
    Route::get('/viewmebership', [MembershipController::class, 'ViewMembership']);
    Route::post('/delete-membership', [MembershipController::class, 'Delete_membership']);
    Route::get('/print/{id}', [MembershipController::class, 'Print'])->name('print.show');
    Route::get('/search', [SearchController::class, 'Search']);
    Route::get('/rp_search', [SearchController::class, 'RpSearch']);



    Route::get('/addproduct', [ProductController::class, 'OpenAddproduct']);
    Route::post('/addproduct', [ProductController::class, 'Addproduct']);
    Route::get('/viewProducts', [ProductController::class, 'ViewProducts']);
    Route::get('/update-product/{id}', [ProductController::class, 'OpenUpdateProduct']);
    Route::post('/update-product', [ProductController::class, 'UpdateProduct']);
    Route::post('/delete-product', [ProductController::class, 'Delete_product']);


    Route::get('/logout', [UsersController::class, 'Logout']);




    // Route::prefix('admin')->group(function () {


    // });
});
