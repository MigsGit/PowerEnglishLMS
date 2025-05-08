<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AdminTextBookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(CommunityController::class)->group(function () {
    Route::get('get_announcement_table', 'getAnnouncementTable')->name('community.announcement_table');
    Route::get('get_pages_by_id', 'getPagesById')->name('community.get_pages_by_id');
    Route::get('get_bulletin_pages_by_id', 'getBulletinPagesById')->name('community.get_bulletin_pages_by_id');
    Route::get('get_writing_collection_bulletin_table', 'getWritingCollectionBulletin')->name('community.bulletin_table');
});

Route::controller(AdminTextBookController::class)->group(function () {
    Route::get('get_text_books_table', 'getTextBooksTable')->name('admin.text_books.get_text_books_table');
});


