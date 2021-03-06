<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LocationController;

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

//Route::resource('products', ProductController::class);

// public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('products', [ProductController::class, 'index']);
Route::get('/products/search/{name}',[ProductController::class,'search']);
Route::get('products/{slug}', [ProductController::class, 'show']);
Route::get('/products/incategory/{category_slug}',[ProductController::class,'incategory']);
Route::get('/products/recomendedItems/{category_slug}',[ProductController::class,'recomendedItems']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::get('recipes', [RecipeController::class, 'index']);
Route::get('questions', [QuestionController::class, 'index']);
Route::get('reviews', [ReviewController::class, 'index']);
Route::post('reviews', [ReviewController::class, 'store']);
Route::get('/locations', [LocationController::class, 'index']);




// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('recipes/{id}', [RecipeController::class, 'show']);
    Route::post('questions', [QuestionController::class, 'store']);
    Route::post('reviews', [ReviewController::class, 'store']);
});

Route::middleware('auth:api')->group(function () {

});
