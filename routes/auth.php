<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/adminevent', [PostController::class, 'event'])->name('event.index');
    Route::post('/admineventstore', [PostController::class, 'eventstore'])->name('event.store');
    Route::get('/admineventedit', [PostController::class, 'eventedit'])->name('event.edit');
    Route::post('/admineventupdate', [PostController::class, 'eventupdate'])->name('event.update');
    Route::post('/admineventdelete', [PostController::class, 'eventdelete'])->name('event.delete');

    Route::get('/admincategory', [PostController::class, 'category'])->name('category.index');
    Route::post('/admincategorystore', [PostController::class, 'categorystore'])->name('category.store');
    Route::get('/admincategoryedit', [PostController::class, 'categoryedit'])->name('category.edit');
    Route::post('/admincategoryupdate', [PostController::class, 'categoryupdate'])->name('category.update');
    Route::post('/admincategorydelete', [PostController::class, 'categorydelete'])->name('category.delete');

    Route::get('/admincelebrity', [PostController::class, 'celebrity'])->name('celebrity.index');
    Route::post('/admincelebritystore', [PostController::class, 'celebritystore'])->name('celebrity.store');
    Route::get('/admincelebrityedit', [PostController::class, 'celebrityedit'])->name('celebrity.edit');
    Route::post('/admincelebrityupdate', [PostController::class, 'celebrityupdate'])->name('celebrity.update');
    Route::post('/admincelebritydelete', [PostController::class, 'celebritydelete'])->name('celebrity.delete');

    Route::get('/adminguest', [PostController::class, 'guest'])->name('guest.index');
    Route::post('/admingueststore', [PostController::class, 'gueststore'])->name('guest.store');
    Route::get('/adminguestedit', [PostController::class, 'guestedit'])->name('guest.edit');
    Route::post('/adminguestupdate', [PostController::class, 'guestupdate'])->name('guest.update');
    Route::post('/adminguestdelete', [PostController::class, 'guestdelete'])->name('guest.delete');

    Route::get('/adminmodal', [PostController::class, 'modal'])->name('modal.index');
    Route::post('/adminmodalstore', [PostController::class, 'modalstore'])->name('modal.store');
    Route::get('/adminmodaledit', [PostController::class, 'modaledit'])->name('modal.edit');
    Route::post('/adminmodalupdate', [PostController::class, 'modalupdate'])->name('modal.update');
    Route::post('/adminmodaldelete', [PostController::class, 'modaldelete'])->name('modal.delete');

    Route::get('/adminpageantsubtitlem', [PostController::class, 'pageantsubtitlem'])->name('pageantsubtitlem.index');
    Route::post('/adminpageantsubtitlemstore', [PostController::class, 'pageantsubtitlemstore'])->name('pageantsubtitlem.store');
    Route::get('/adminpageantsubtitlemedit', [PostController::class, 'pageantsubtitlemedit'])->name('pageantsubtitlem.edit');
    Route::post('/adminpageantsubtitlemupdate', [PostController::class, 'pageantsubtitlemupdate'])->name('pageantsubtitlem.update');
    Route::post('/adminpageantsubtitlemdelete', [PostController::class, 'pageantsubtitlemdelete'])->name('pageantsubtitlem.delete');

    Route::get('/adminpageantsubtitlef', [PostController::class, 'pageantsubtitlef'])->name('pageantsubtitlef.index');
    Route::post('/adminpageantsubtitlefstore', [PostController::class, 'pageantsubtitlefstore'])->name('pageantsubtitlef.store');
    Route::get('/adminpageantsubtitlefedit', [PostController::class, 'pageantsubtitlefedit'])->name('pageantsubtitlef.edit');
    Route::post('/adminpageantsubtitlefupdate', [PostController::class, 'pageantsubtitlefupdate'])->name('pageantsubtitlef.update');
    Route::post('/adminpageantsubtitlefdelete', [PostController::class, 'pageantsubtitlefdelete'])->name('pageantsubtitlef.delete');

    Route::get('/admincontact', [PostController::class, 'contact'])->name('contact.index');

    Route::get('/adminmedia', [PostController::class, 'media'])->name('media.index');
    Route::post('/adminmediastore', [PostController::class, 'mediastore'])->name('media.store');
    Route::get('/adminmediaedit', [PostController::class, 'mediaedit'])->name('media.edit');
    Route::post('/adminmediaupdate', [PostController::class, 'mediaupdate'])->name('media.update');
    Route::post('/adminmediadelete', [PostController::class, 'mediadelete'])->name('media.delete');

    Route::get('/admin/faq', [PostController::class, 'faqs_index'])->name('faq.index');
    Route::get('/admin/faq/create', [PostController::class, 'faqs_create'])->name('faq.create');
    Route::post('/admin/faq', [PostController::class, 'faqs_store'])->name('faq.store');
    Route::get('/admin/faq/edit', [PostController::class, 'faqs_edit'])->name('faq.edit');
    Route::post('/admin/faq/update', [PostController::class, 'faqs_update'])->name('faq.update');
    Route::put('/admin/faq/delete', [PostController::class, 'faqs_delete'])->name('faq.delete');


    Route::get('/admin/values', [PostController::class, 'showIndexForm'])->name('values.index');
    Route::post('/admin/values/update', [PostController::class, 'updateSingleValue'])->name('values.update');


    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
