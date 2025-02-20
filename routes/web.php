<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestTransferController;

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
    return view('student/systemTransfer');
})->name('systemTransfer');

Route::get('/systemTransfer', [RequestTransferController::class, 'requestTransfer'])->name('systemTransfer');
Route::post('/systemTransfer', [RequestTransferController::class, 'requestTransfer'])->name('systemTransfer');
Route::get('/typeTransfer', [RequestTransferController::class, 'showRequstTransfer'])->name('typeTransfer');


// Route::get('/typeTransfer', function () {
//     return view('student/typeTransfer');
// });

// Route::get('/checkData',[SubjectTransferController::class,'showSubjectTransfer'])->name('checkData');
// Route::get('/checkData', function () {
//     return view('student/checkData');
// });
Route::get('/statusRequest', function () {
    return view('status/statusRequest');
});
Route::get('/statusPayment', function () {
    return view('status/statusPayment');
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
Route::get('/manage_subjects', function () {
    return view('officer/manage_subjects');
});
Route::get('/payment_update', function () {
    return view('officer/payment_update');
});
Route::get('/receive_docs', function () {
    return view('officer/receive_docs');
});
Route::get('/receive_payment', function () {
    return view('officer/receive_payment');
});
Route::get('/result_check', function () {
    return view('classPlan/result_check');
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
Route::get('/adv_data_preview', function () {
    return view('advisor/adv_data_preview');
});
