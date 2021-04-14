<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthenticatedController;
use Illuminate\Support\Facades\Artisan;
use Intervention\Image\Facades\Image;


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
Route::get('/test', function () {
    $img = Image::make('https://www.ngenespanol.com/wp-content/uploads/2018/08/La-primera-imagen-de-la-historia-770x413.jpg')->resize(10, 10);

    return $img->response('jpg');
});

// Main menus
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/tienda-virtual', [LandingController::class, 'store'])->name('store');
Route::get('/blog-verde', [LandingController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [LandingController::class, 'show_blog'])->name('blog.show');
Route::get('/el-huerto', [LandingController::class, 'vegetable_patch'])->name('vegetable.patch');
Route::get('/herbario-virtual', [LandingController::class, 'herbal'])->name('herbal');
Route::get('/insectario-virtual', [LandingController::class, 'insectary'])->name('insectary');
Route::get('/tu-mascota-ideal', [LandingController::class, 'pets'])->name('pets');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth.home');
//Authenticated
Route::get('/colaborador/listar', [AuthenticatedController::class, 'list_publish'])->name('auth.list_publish')->middleware('auth');
Route::get('/colaborador/publicar', [AuthenticatedController::class, 'publish'])->name('auth.publish')->middleware('auth');
Route::post('/colaborador/guardar', [AuthenticatedController::class, 'do_publish'])->name('auth.do_publish')->middleware('auth');
Route::get('/colaborador/editar/{slug}', [AuthenticatedController::class, 'edit_publish'])->name('auth.edit_publish')->middleware('auth');
Route::post('/colaborador/update/', [AuthenticatedController::class, 'update_publish'])->name('auth.update_publish')->middleware('auth');

//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

