<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', \App\Http\Livewire\Index::class)->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/account', \App\Http\Livewire\Account::class)->name('account');
    Route::get('/channel/create', \App\Http\Livewire\Channel\CreateChannel::class)->name('channel.create');
    Route::get('/upload/video', \App\Http\Livewire\Video\UploadVideo::class)->name('upload.video');
});
Route::get('/channels', \App\Http\Livewire\Channel\Channels::class)->name('channel.index');
Route::get('/channel/{channel}', \App\Http\Livewire\Channel\Channel::class)->name('channel.show');
Route::get('/watch/{video}', \App\Http\Livewire\Video\WatchVideo::class)->name('watch.video');
Route::get('/search', \App\Http\Livewire\SearchVideo::class)->name('search.video');

require __DIR__.'/auth.php';
