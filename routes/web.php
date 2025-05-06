<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// guest

Route::get('/guest', function () {
    return view('Role.Guest.welcome');
});

Route::get('/guest-lowongankerja', function () {
    return view('Role.Guest.cariLowongan');
});

Route::get('/guest-perusahaan', function () {
    return view('Role.Guest.perusahaan');
});
Route::get('/guest-tentangkami', function () {
    return view('Role.Guest.tentangKami');
});


// Pelamar

Route::get('/pelamar', function () {
    return view('Role.Pelamar.home');
});
Route::get('/pelamar-lowongankerja', function () {
    return view('Role.Pelamar.lowonganKerja');
});
Route::get('/pelamar-perusahaan', function () {
    return view('Role.Pelamar.Perusahaan');
});
Route::get('/pelamar-tentangkami', function () {
    return view('Role.Pelamar.tentangKami');
});
Route::get('/jobDetail', function () {
    return view('Role.Pelamar.jobDetail');
});
Route::get('/kategori', function () {
    return view('Role.Pelamar.kategori');
});
Route::get('/perusahaandetail', function () {
    return view('Role.Pelamar.perusahaanDetail');
});
Route::get('/profilPelamar', function () {
    return view('Role.Pelamar.profilPelamar');
});
Route::get('/editprofil', function () {
    return view('Role.Pelamar.editProfil');
});


Route::get('/perusahaan', function () {
    return view('Role.Perusahaan.home');
});
Route::get('/listlowongan', function () {
    return view('Role.Perusahaan.listLowongan');
});
Route::get('/listperusahaan', function () {
    return view('Role.Perusahaan.perusahaan');
});
Route::get('/perusahaan-tentangkami', function () {
    return view('Role.Perusahaan.tentangkami');
});
Route::get('/editprofil-perusahaan', function () {
    return view('Role.Perusahaan.editprofil-perusahaan');
});
Route::get('/form-about', function () {
    return view('Role.Perusahaan.form-about');
});
Route::get('/post-job', function () {
    return view('Role.Perusahaan.postjob');
});
Route::get('/about-perusahaan', function () {
    return view('Role.Perusahaan.aboutperusahaan');
});
Route::get('/kontak', function () {
    return view('Role.Perusahaan.kontak');
});
Route::get('/job-list', function () {
    return view('Role.Perusahaan.joblist');
});
Route::get('/status-job', function () {
    return view('Role.Perusahaan.statusjob');
});


Route::get('/login', function () {
    return view('auth.pelamar.login');
});
Route::get('/login2', function () {
    return view('auth.perusahaan.login2');
});
Route::get('/register', function () {
    return view('auth.pelamar.register');
});
Route::get('/register2', function () {
    return view('auth.perusahaan.register2');
});
Route::get('/role', function () {
    return view('page.role');
});
Route::get('/email', function () {
    return view('auth.reset.email');
});
Route::get('/verify', function () {
    return view('auth.reset.verify');
});
Route::get('/reset', function () {
    return view('auth.reset.reset');
});