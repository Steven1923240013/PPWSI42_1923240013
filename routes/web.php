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
    return view('welcome');
});

//mengirim data ke view
Route::get("/hallo", function(){
    $data = ['nama' => 'Steven', 'npm' => '1923240013', 'alamat' => 'Palembang'];
    return view("Hallo", $data);
});

//mengirim data ke view
Route::get("/hallo", function(){
    $data = ['nama' => 'Nur Rachmat', 'npm' => '200925006', 'alamat' => 'Palembang'];
    return view("hallo", $data);
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm){
    $data = ['nama' => $nama, 'npm' => $npm];
    return view("hallo", $data);
});

Route::get('/', function (){
    return view('welcome');
});

Route::get('/dosen', function(){
    return view('dosen');
});

Route::get('/fakultas', function (){
    return view('fakultas.index', ["ilkom"=> "Fakultas Ilmu Komputer dan Rekayasa"]);
});

Route::get('/fakultas', function(){
    // return view('fakultas.index', ["ilkom => "fakultas Ilmu komputer dan Rekayasa]);
    return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
});

Route::get('/fakultas', function () {
    //return view('fakultas.index', ["ilkom => "fakultas Ilmu komputer dan Rekayasa"]);
    //return view('fakultas.index', ["fakultas => "fakultas Ilmu komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);
});

Route::get('/fakultas', function () {
    //return view('fakultas.index', ["ilkom => "fakultas Ilmu komputer dan Rekayasa"]);
    //return view('fakultas.index', ["fakultas => "fakultas Ilmu komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    //return view('fakultas.index')->with("fakultas", [fakultas Ilmu Komputer dan Rekayasa", "fakultas Ilmu Ekonomi"]);
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('Fakultas'));
});

Route::get('/fakultas', function () {
    //return view('fakultas.index', ["ilkom => "fakultas Ilmu komputer dan Rekayasa"]);
    //return view('fakultas.index', ["fakultas => "fakultas Ilmu komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    //return view('fakultas.index')->with("fakultas", [fakultas Ilmu Komputer dan Rekayasa", "fakultas Ilmu Ekonomi"]);
    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('Fakultas'));
});
