<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});
Route::get('/systemTransfer', function () {
    return view('student/systemTransfer');
});
Route::get('/typeTransfer', function () {
    return view('student/typeTransfer');
});
Route::get('/checkData', function () {
    return view('student/checkData');
});
Route::get('/statusRequest', function () {
    return view('status/statusRequest');
});
Route::get('/addSubject', function () {
    return view('student/addSubject');
});
Route::get('/addOriginalSubject', function () {
    return view('student/addOriginalSubject');
});
Route::get('/add_subject', function () {
    return view('officer/add_subject');
});
Route::get('/add_subject02', function () {
    return view('officer/add_subject02');
});
Route::get('/manage_subject', function () {
    return view('officer/manage_subjects');
});
Route::get('/payment_update', function () {
    return view('officer/payment_update');
});
Route::get('/recieve_docs', function () {
    return view('officer/recieve_docs');
});
Route::get('/receive_payment', function () {
    return view('officer/receive_payment');
});
Route::get('/submitAll', function () {
    return view('classPlan/submitAll');
});
Route::get('/study_request', function () {
    return view('classPlan/study_request');
});
Route::get('/data_preview', function () {
    return view('classPlan/data_preview');
});
Route::get('/check_subjects', function () {
    return view('classPlan/check_subjects');
});
Route::get('/adv_study_request', function () {
    return view('advisor/adv_study_request');
});
Route::get('/data_preview', function () {
    return view('advisor/data_preview');
});
