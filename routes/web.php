<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
    return '<h1>ListPage</h1>';
});
Route::get('/company/create', function () {
    return view('Company/CompanyForm');
});
Route::get('/invoice', function () {
    return view('Company/InvoicePage');
});
Route::get('/company/show', [CompanyController::class, 'ShowCompany'])->name('company.show');
Route::post('/company/store', [CompanyController::class, 'StoreDetails'])->name('company.store');
Route::post('/invoice', [CompanyController::class, 'AddCompany'])->name('company.create');
Route::get('/company/delete/{company_id}', [CompanyController::class, 'DeleteCompany'])->name('company.delete');
Route::get('/company/edit/{company_id}', [CompanyController::class, 'EditCompany'])->name('company.edit');
Route::put('/company/update/{company_id}', [CompanyController::class, 'UpdateCompany'])->name('company.update');
//Route::resource('companies','CompanyController');
