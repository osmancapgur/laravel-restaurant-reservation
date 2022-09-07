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

Route::get('/','YemekController@show')->name('Anasayfa');
Route::post('iletisim','IletisimController@ekleme')->name("iletisim");
Route::get('iletisim','IletisimController@show');
Route::get('yemek', function () {
    return view('yemek');
});
Route::post('/','YemekController@ekleme')->name("yemek.ekle");
Route::post('rezervasyon','RezervasyonController@ekleme')->name("rezervasyon");
Auth::routes();
Route::get('admin', 'HomeController@index');
Route::prefix('admin')->middleware('auth','isAdmin')->group( function(){
  Route::get('/dashboard','HomeController@show');
  Route::get('/yemek','YemekController@index')->name('yemekler');
  Route::post('/yemekekle', 'YemekController@ekleme')->name('yemek.ekle');
  Route::get('/yemekler', 'YemekController@goster')->name('admin_yemekler');
  Route::get('/yemeksil/{id}', 'YemekController@sil')->name('admin_yemek_delete');
  Route::get('/rezervasyonlar', 'RezervasyonController@goster')->name('admin_rezervasyon');
  Route::get('/rezervasyonsil/{id}', 'RezervasyonController@sil')->name('admin_rezervasyon_delete');
  Route::get('/etkinlik','EtkinlikController@index')->name('admin_etkinlik');
  Route::post('/etkinlikekle','EtkinlikController@kaydet')->name('admin_etkinlik_ekle');
  Route::get('/rezervasyonekle','RezervasyonController@insert')->name('admin_rezervasyon_ekle');
  Route::get('/etkinlikler','EtkinlikController@insert')->name('admin_etkinlik_goster');
  Route::get('/etkinliksil/{id}', 'EtkinlikController@sil')->name('admin_etkinlik_delete');
  Route::post('/etkinlikguncelle/{id}', 'EtkinlikController@update')->name('etkinlik.update');
  Route::post('/yemekturuekle', 'TurController@ekleme')->name('yemekturu.ekle');
  Route::get('/yemekturusil/{title}', 'TurController@sil')->name('admin_yemekturu_delete');
  Route::post('/yemekturuguncelle/{title}', 'TurController@update')->name('yemekturu.guncelle');
  Route::get('/yemekturuedit/{id}', 'TurController@edit')->name('yemekturu.edit');
  Route::post('/rezervasyonekle','RezervasyonController@add')->name('admin_rezervasyon_add');
  Route::get('/restorant','FirmaController@goster')->name('admin_restorant');
  Route::post('/restorantinfoekle', 'FirmaController@kaydet')->name('firma.ekle');
  Route::post('/restorantinfoguncelle/{id}', 'FirmaController@update')->name('firma.update');
  Route::get('/galeri','GaleryController@goster')->name('admin_galeri');
  Route::get('/galeriekle','GaleryController@eklegoster');
  Route::post('/galeriekleniyor', 'GaleryController@kaydet')->name('admin_galeri_ekle');
  Route::get('/galerisil/{galeri_image}', 'GaleryController@sil')->name('admin_galeri_sil');
  Route::get('/galeriguncelle/{id}', 'GaleryController@update')->name('resim_update');
  Route::get('/mesajsil/{id}', 'IletisimController@sil')->name('admin_mesaj_delete');
  Route::post('/rezervasyonguncelle/{id}', 'RezervasyonController@update')->name('rezervasyon.update');
  Route::get('/rezervasyonedit/{id}', 'RezervasyonController@edit')->name('rezervasyon.edit');
  Route::get('/etkinlikedit/{id}', 'EtkinlikController@edit')->name('etkinlik.edit');
});
//Route::prefix('yemek')->middleware('auth','isAdmin')->group(function () {
    // Route::get('/','YemekController@index')->name('yemekler');
  //   Route::post('yemekekle', 'YemekController@ekleme')->name('yemek.ekle');
  //   Route::get('yemekler', 'YemekController@show')->name('admin_yemekler');
 //});
Route::get('home', 'HomeController@index');
