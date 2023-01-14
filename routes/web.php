<?php

use App\Http\Controllers\Admin\LowonganMitraController as AdminLowonganMitraController;
use App\Http\Controllers\Admin\LowongannController as AdminLowongannController;
use App\Http\Controllers\Admin\MitraController as AdminMitraController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\TopupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/mitra');
Route::redirect('/awal', '/kandidat');
Route::redirect('/awal2', '/admin');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/pasang/{nama}', 'JobController@pasang')->name('pasang');
Route::get('/daftarmitra', 'JobController@daftarmitra')->name('daftarmitra');
Route::get('/daftarkandidat', 'JobController@daftarkandidat')->name('daftarkandidat');
Route::get('/daftarmitra', 'MitraController@daftarmitra')->name('daftarmitra');
Route::get('/pilihpaket', 'JobController@pilihpaket')->name('pilihpaket');
Route::get('/pasang2', 'JobController@pasang2')->name('pasang2');
Route::get('/rekomendasi', 'JobController@rekomendasi')->name('rekomendasi');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
// Route::get('/cache', 'CacheController@index')->name('cache');
Route::get('/getuser', 'UserSystemInfoController@getusersysteminfo')->name('getuser');
Route::post('/kontakform', 'HomeController@kirimmail')->name('kontakform');
// Route::get('/cache/{id}', 'CacheController@index')->name('cache');
Route::get('/cache/{id}', 'CacheController@get_client_ip')->name('cache');
Route::get('/riwayat/{slug}', 'CacheController@riwayat')->name('riwayat');
Route::get('/company/{slug}', 'CompaniesController@index')->name('compan');
// Route::resource('artikel', 'ArtikelController')->only(['artikel', 'show']);
Route::get('/artikel', 'ArtikelController@artikel')->name('artikel');
Route::get('/artikel/{slug}', 'ArtikelController@show')->name('artikel.show');
// Route::get('lamarmail/{parameter}', [
//     'as'=> 'lamarmail',
//     'uses'=>'HomeController@lamarmail'
// ]);
Route::get('/lamarmail/{name}/{umur}', 'HomeController@lamarmail')->name('lamarmail');
// Route::post('/formpasang', 'LowonganController@formpasang')->name('formpasang');
Route::post('/formpasang', 'HomeController@formpasang')->name('formpasang');
Route::post('/pembayaran/{id}', 'LowonganController@pembayaran')->name('pembayaran');
// Route::get('/backkontak', 'HomeController@backkontak')->name('backkontak');

Route::post('payments/notification', 'PaymentController@notification');
Route::get('payments/completed', 'PaymentController@completed');
Route::get('payments/failed', 'PaymentController@failed');
Route::get('payments/unfinish', 'PaymentController@unfinish');

Route::post('topup/notification', [TopupController::class, 'notification'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::get('topup/completed', [TopupController::class, 'completed']);
Route::get('topup/failed', [TopupController::class, 'failed']);
Route::get('topup/unfinish', [TopupController::class, 'unfinish']);

// Route::get('/mitra/dashboard', 'AdminCompanyController@index')->name('mitra.dashboard');
Route::get('/mitra/login', 'AdminCompanyController@login')->name('mitra.login');

Route::post('/formMitra', 'MitraController@index')->name('formMitra');

Route::get('search', 'HomeController@search')->name('search');
Route::resource('jobs', 'JobController')->only(['index']);
Route::get('jobs/{slug}', 'JobController@show')->name('jobs.show');
Route::delete('delete/{id}', 'JobController@delete')->name('jobs.delete');
Route::get('category/{slug}', 'CategoryController@show')->name('categories.show');
Route::get('location/{slug}', 'LocationController@show')->name('locations.show');
Route::get('/getid', 'HomeController@addcart')->name('addcart');

Route::get('/get_client_ip', 'CacheController@get_client_ip')->name('get_client_ip');

Route::post('/formkandidat', [KandidatController::class, 'formkandidat'])->name('formkandidat');
Route::post('/formmitra', 'MitraController@index')->name('formmitra');

Route::group(['prefix' => 'mitra', 'as' => 'mitra.', 'namespace' => 'Mitra', 'middleware' => ['CekRole:mitra']], static function () {
    Route::get('/', 'AdminCompanyController@index')->name('home');

    Route::get('/out', 'AdminCompanyController@out')->name('out');

    // ============== Profil ======================
    Route::resource('profil', 'ProfilController');

    // ============== Lowongan ======================
    Route::resource('lowongan', 'DaftarLowonganController');

    // ============== Topup ======================
    Route::get('/topup/{id}/{harga}/{jumlah}', 'TopupController@topup')->name('mitra.topup');
    Route::resource('topup', 'TopupController');

    // ============== Kandidat ======================
    // Route::resource('kandidat', 'KandidatController');
    Route::get('/kandidat', 'KandidatController@index')->name('kandidat.index');
    Route::post('/kandidat/buka', 'KandidatController@open')->name('kandidat.buka');
    Route::get('/kandidat/show/{slug}', 'KandidatController@show')->name('kandidat.show');
    Route::get('/kandidat/hire/{id}', 'KandidatController@hire')->name('kandidat.hire');

    // ============== Hire ======================
    Route::resource('hire', 'HireController');

    // ============== User ======================
    Route::resource('user', 'UserController');

    // ============== Chat ======================
    Route::post('/chat/send', 'ChatController@send')->name('chat.send');
    Route::get('/chat/seger/{id}', 'ChatController@seger')->name('chat.seger');
    Route::resource('chat', 'ChatController');

    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');
    // // Permissions
    // Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    // Route::resource('permissions', 'PermissionsController');

    // // Roles
    // Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    // Route::resource('roles', 'RolesController');

    // // Users
    // Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    // Route::resource('users', 'UsersController');

    // // Categories
    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');
    // // Jobs
    // Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    // Route::resource('jobs', 'JobsController');

    // //Location
    // Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    // Route::resource('locations', 'LocationsController');

    // // Companies
    // Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    // Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    // Route::resource('companies', 'CompaniesController');

    // Route::delete('lowongan/destroy', 'LowongannController@massDestroy')->name('lowongan.massDestroy');
    // // Route::get('/pembayaran/{id}', 'LowongannController@pembayaran')->name('pembayaran');
    // Route::resource('lowongan', 'LowongannController');

    // //Price
    // Route::delete('price/destroy', 'PriceController@massDestroy')->name('price.massDestroy');
    // Route::resource('price', 'PriceController');

    // Route::delete('article/destroy', 'ArticleController@massDestroy')->name('article.massDestroy');
    // Route::resource('article', 'ArticleController');
});

Route::group(['prefix' => 'kandidat', 'as' => 'kandidat.', 'namespace' => 'Kandidat', 'middleware' => ['CekRole:kandidat']], static function () {
    Route::get('/', 'KandidatKController@index')->name('awal');

    // ============== Perusahaan ======================
    Route::get('/lowongan', 'KandidatKController@lowongan')->name('kandidat.lowongan');

    // ============== Kandidat ======================
    Route::resource('kandidat', 'KandidatKController');

    // ============== Chat ======================
    Route::post('/chat/send', 'ChatController@send')->name('chat.send');
    Route::get('/chat/seger/{id}', 'ChatController@seger')->name('chat.seger');
    Route::resource('chat', 'ChatController');

    Route::get('/out', 'KandidatKController@out')->name('out');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['CekRole:admin']], static function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    // Location
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationsController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    // Mitra
    Route::delete('mitra/destroy', 'MitraController@massDestroy')->name('mitra.massDestroy');
    Route::get('mitra/acc={id}', 'MitraController@acc')->name('mitra.acc');
    Route::resource('mitra', 'MitraController');
    Route::get('/addmitra/{id}', [AdminMitraController::class, 'addmitra'])->name('addmitra');
    Route::post('/addmitra/acc/{id}', [AdminMitraController::class, 'acc'])->name('accmitra');

    // Lowongan
    Route::delete('lowongan/destroy', 'LowongannController@massDestroy')->name('lowongan.massDestroy');
    // Route::get('/pembayaran/{id}', 'LowongannController@pembayaran')->name('pembayaran');
    // Route::get('/addjob/{id}', 'LowongannController@addjob')->name('addjob');
    Route::get('/addjob/lowongan/{id}', [AdminLowongannController::class, 'addjob'])->name('addjoblowongan');
    Route::resource('lowongan', 'LowongannController');

    // Calon Kandidat
    Route::resource('calonkandidat', 'CalonController');
    Route::post('/kandidat/acc/{id}', 'KandidatController@acc')->name('kandidat.acc');

    // Kandidat
    Route::resource('kandidat', 'KandidatController');

    // Price
    Route::delete('price/destroy', 'PriceController@massDestroy')->name('price.massDestroy');
    Route::resource('price', 'PriceController');

    Route::delete('article/destroy', 'ArticleController@massDestroy')->name('article.massDestroy');
    Route::resource('article', 'ArticleController');

    Route::resource('lowonganmitra', 'LowonganMitraController');
    Route::get('/addjob/mitra/{id}', [AdminLowonganMitraController::class, 'addjob'])->name('addjobmitra');
    Route::post('/addjob', [AdminLowonganMitraController::class, 'storejob'])->name('lowonganmitra.storejob');
});
