<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentPromptController;
use App\Http\Controllers\CommentCodeController;

Route::get('', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/Register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

Route::get('/Logout', [Logout::class, 'logout']);

Route::middleware(['auth', 'include.username'])->group(function () {
    Route::get('/dashboard', [MainController::class, 'index']);
    Route::get('/dashboard/populer', [MainController::class, 'populer'])->name('view_populer');
    Route::get('/dashboard/newest', [MainController::class, 'newest'])->name('view_newest');
    Route::get('/upload', [MainController::class, 'upload']);
    Route::get('/dashboard/image', [MainController::class, 'image_main']);
    Route::get('/dashboard/prompt', [MainController::class, 'prompt_main']);
    Route::get('/dashboard/Code', [MainController::class, 'Code_main']);
    Route::get('/dashboard/Creator', [MainController::class, 'Creator_main']);
    Route::get('/view', [MainController::class, 'view_Conten']);
    Route::get('/profil/{username}', [MainController::class, 'showProfile'])->name('main.show_profile');
    Route::get('/save/{username}', [MainController::class, 'view_profil_save'])->name('main.show_profile_save');
    Route::get('/view-Conten/{name}/{image_id}', [MainController::class, 'viewContent'])
    ->name('image.view_content');

    // upload Image
    Route::get('/upload/image', [MainController::class, 'upload_image']);
    Route::post('/imageUpload', [uploadController::class, 'uploadImage']);

    // uplod prompt
    Route::get('/upload/prompt', [MainController::class, 'upload_prompt']);
    Route::post('/promptUpload', [uploadController::class, 'uploadprompt']);
    Route::get('/view-Prompt/{name}/{prompt_id}', [MainController::class, 'viewPromptContent'])->name('prompt.view_content');

    // uplod Code
    Route::get('/upload/Code', [MainController::class, 'upload_Code']);
    Route::post('/codeUpload', [uploadController::class, 'uploadcode'])->name('upload.code');
    Route::get('/view-Code/{name}/{code_id}', [MainController::class, 'viewCodetContent'])->name('code.view_content');
    
    //Deleted
    Route::delete('/delete-image/{image_id}/{username}', [MainController::class, 'deleteImage'])->name('image.delete');
    Route::delete('/delete-prompt/{prompt_id}/{username}', [MainController::class, 'deleteprompt'])->name('prompt.delete');
    Route::delete('/delete-code/{code_id}/{username}', [MainController::class, 'deletecode'])->name('code.delete');

    // Download
    Route::get('/image/download/{image_id}', [MainController::class, 'downloadImage'])->name('image.download');
    Route::get('/code/download/{code_id}', [MainController::class, 'downloadcode'])->name('code.download');

    // edit
    Route::get('/image/edit/{image_id}', [MainController::class, 'editImage'])->name('image.edit');
    Route::put('/image/update/{image_id}', [uploadController::class, 'updateImage'])->name('image.update');

    Route::get('/prompt/edit/{prompt_id}', [MainController::class, 'editprompt'])->name('prompt.edit');
    Route::put('/prompt/update/{prompt_id}', [uploadController::class, 'updateprompt'])->name('prompt.update');

    Route::get('/code/edit/{code_id}', [MainController::class, 'editcode'])->name('code.edit');
    Route::put('/code/update/{code_id}', [uploadController::class, 'updatecode'])->name('code.update');

    // edit profil
    Route::get('/edit-profil', [MainController::class, 'view_profil_edit']);
    Route::put('/profile/update', [uploadController::class, 'updateProfile'])->name('profile.update');

    //search
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/error', [MainController::class, 'not_found']);

    // Comment
    Route::post('/comments/{image_id}', [CommentController::class, 'store'])->name('comments.store');
    Route::post('/comments_prompt/{prompt_id}', [CommentPromptController::class, 'store'])->name('commentsPrompt.store');
    Route::post('/comments_code/{code_id}', [CommentCodeController::class, 'store'])->name('commentsCode.store');
});


