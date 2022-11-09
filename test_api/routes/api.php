<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(["middleware" => "api"] ,function(){
//     Route::post(uri:'get-main-categories', action:[CategoriesController::class, 'index']);

// });

Route::post('/add',function(){
    return Category::create([
        // 'title' => "My Title",
        // 'description' => 'Description is Here'
        'name_en' => 'four',
        'name_ar' => 'اربعه 44'
    ]);
});


Route::get("list",[CategoriesController::class , "show"]);

// Get all employees
Route::get("employees",[EmployeeController::class , "getEmployee"]);

// Get specific employee
Route::get("employee/{id}",[EmployeeController::class , "getEmployeeById"]);

// Add new employee
Route::post("addemployee",[EmployeeController::class , "addEmployee"]);

// Update employee
Route::put("updateemployee/{id}",[EmployeeController::class , "updateEmployee"]);


// Update employee
Route::delete("deleteemployee/{id}",[EmployeeController::class , "deleteEmployee"]);
