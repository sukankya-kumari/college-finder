<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseController;
use App\Models\Category;
use App\Models\Course;
use App\Models\City;
use App\Models\State;
use App\Models\College;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[CategoryController::class,'index'])->name('home');
Route::get('view',[CategoryController::class,'show'])->name('view');
Route::get('filter',[CategoryController::class,'filter'])->name('filter');
Route::get('city_filter',[CategoryController::class,'city_filter'])->name('city_filter');
//Route::get('home',[CategoryController::class,'searchdata'])->name('home');
Route::get('course',[CategoryController::class,'colling_course'])->name('course');
Route::match(['get', 'post'],'insert',[CategoryController::class,'insert'])->name('category.insert');
Route::match(['get', 'post'],'state_insert',[StateController::class,'insert'])->name('state.state_insert');
Route::match(['get', 'post'],'city_insert',[CityController::class,'create'])->name('city.city_insert');
Route::match(['get', 'post'],'college_insert',[CollegeController::class,'create'])->name('college.college_insert');
Route::match(['get', 'post'],'college_insert',[CollegeController::class,'create'])->name('college.college_insert');
Route::match(['get', 'post'],'course_insert',[CourseController::class,'create'])->name('course.course_insert');
