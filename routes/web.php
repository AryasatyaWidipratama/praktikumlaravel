<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\KecController;
use App\Http\Controllers\BController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\ProvController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\UsersController;
use app\Models\bencana;
use app\Models\sosial;

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/about', function () {
    return view  ('about', [
        "title" => "About"
        "nama" => "Kelompok 10",
        "pengantar" => "Welcome to disport"
    ]);
});

//Route::get('/sosial','SosialController@Index');
//Route::get('/sosial',[SosialControllerIndex::class,'index']);
Route::get('/kecamatan',[KecController::class,'index']);

Route::get('/bencana',[BController::class,'bencana']);
Route::get('/kategori',[KategoriController::class,'kategori']);
Route::get('/kota',[KotaController::class,'kota']);
Route::get('/detail',[DetailController::class,'detail']);

Route::get('/pelaporan',[PelaporanController::class,'pelaporan']);

Route::get('/provinsi',[ProvController::class,'prov']);

Route::get('/role',[RoleController::class,'role']);

Route::get('/user_role',[UserRoleController::class,'usrrole']);

Route::get('/users',[UsersController::class,'users']);
