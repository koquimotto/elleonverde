<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthenticatedController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Artisan;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\YoutubeController;


// Main menus
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/blog', [LandingController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::get('/el-huerto', [LandingController::class, 'vegetable_patch'])->name('vegetable.patch');
Route::get('/herbario-virtual', [LandingController::class, 'herbal'])->name('herbal');
Route::get('/insectario-virtual', [LandingController::class, 'insectary'])->name('insectary');
Route::get('/tu-mascota-ideal', [LandingController::class, 'pets'])->name('pets');
Route::post('/subsribete', [LandingController::class, 'subscribe'])->name('subscribe');
Route::post('/comentario/{post}/guardar', [CommentController::class, 'store'])->name('comment');
Route::get('/videos-sugeridos',[YoutubeController::class, 'index'])->name('videos');

// Store
Route::get('/tienda/{continent}', [LandingController::class, 'store'])->name('store');
Route::get('/tienda/{continent}/{category}', [LandingController::class, 'categoryStore'])->name('category.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth.home');



//Authenticated
Route::get('/colaborador/articulos', [AuthenticatedController::class, 'index'])->name('auth.index');
Route::get('/auth/list/{id}',[AuthenticatedController::class, 'list'])->name('auth.list');

Route::get('/colaborador/publicar', [AuthenticatedController::class, 'publish'])->name('auth.publish');
Route::post('/colaborador/guardar', [AuthenticatedController::class, 'do_publish'])->name('auth.do_publish');
Route::get('/colaborador/editar/{slug}', [AuthenticatedController::class, 'edit_publish'])->name('auth.edit_publish');
Route::post('/colaborador/update/', [AuthenticatedController::class, 'update_publish'])->name('auth.update_publish');

Route::post('/colaborador/update-meta/{idPost}', [AuthenticatedController::class, 'updateMeta'])->name('auth.updateMeta');

//upload image in ckeditor
Route::post('/ckeditor/upload', [AuthenticatedController::class, 'ckeditor_upload'])->name('ckeditor.upload');

//Products
Route::get('/colaborador/productos', [AuthenticatedController::class, 'authProductIndex'])->name('auth.ProductIndex');


// Tests
Route::get('/test/uno', [TestController::class, 'uno'])->name('test.uno');
Route::get('/test', [LandingController::class, 'test'])->name('test');
Route::get('/testTwo', [PostController::class, 'index'])->name('post.index');
Route::get('/comments/{post}',[CommentController::class, 'index']);
Route::get('/replies/{comment}',[CommentController::class, 'reply']);



// Mantenice
Route::get('/comments/count/{post}', [CommentController::class, 'count']);
Route::get('/comments', [CommentController::class, 'list']);


// Subscritions
Route::post('/subscribe/store',[SubscriptionController::class, 'store']);

Route::get('/test/postTest',[TestController::class,'postTest']);


// Enviar mensaje
// Route::get('/send-mail/{email}', [SubscriptionController::class, 'sendEmail']);



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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
