<?php

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

Route::get('/', function () {

    $comics = config("comicsdb");
    $header_links = config("header_links_db");
    $footer_links_dccomics = config("footer_links_db.DC COMICS");
    $footer_links_dc = config("footer_links_db.DC");
    $footer_links_sites = config("footer_links_db.SITES");
    $footer_links_shop = config("footer_links_db.SHOP");

    return view('layout.homepage', compact("comics", "header_links", "footer_links_dccomics", "footer_links_dc", "footer_links_sites", "footer_links_shop"));
});