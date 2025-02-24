<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestTransferController;
use App\Http\Controllers\RequestToClassPlanController;
use App\Http\Controllers\RequestToAdvisorController;
use App\Http\Controllers\OfficerWorkController;

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
    return view('student.systemTransfer');
});
Route::get('/StuLogin', function () {
    return view('login_student');
});
Route::get('/OffLogin', function () {
    return view('login_officer');
});

Route::get('/request-transfer', [RequestTransferController::class, 'requestTransferForm'])->name('requestTransferForm');
Route::post('/request-transfer', [RequestTransferController::class, 'requestTransfer'])->name('requestTransfer');
Route::get('/type-transfer', [RequestTransferController::class, 'showRequstTransfer'])->name('typeTransfer');
Route::get('/checkData',[RequestTransferController::class,'showAllRequestTransfer'])->name('checkData');

Route::get('/student_request', [RequestToClassPlanController::class, 'showStudentRequest'])->name('student_request');
Route::get('/check_subjects', [RequestToClassPlanController::class, 'showDataRequest'])->name('check_subjects');
Route::get('/result_check', [RequestToClassPlanController::class, 'showResultCheck'])->name('result_check');
Route::get('/data_preview', [RequestToClassPlanController::class, 'showDataPreview'])->name('data_preview');
Route::get('/adv_student_request', [RequestToAdvisorController::class, 'showStudentRequest'])->name('adv_student_request');
Route::get('/receive_docs', [OfficerWorkController::class, 'recieveDocsRequest'])->name('receive_docs');
Route::get('/receive_payment', [OfficerWorkController::class, 'recievePaymentRequest'])->name('receive_payment');
Route::get('/payment_update', [OfficerWorkController::class, 'paymentUpdate'])->name('payment_update');

// Route::get('/typeTransfer', function () {
//     return view('student/typeTransfer');
// });

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
// Route::get('/payment_update', function () {
//     return view('officer/payment_update');
// });
// Route::get('/receive_docs', function () {
//     return view('officer/receive_docs');
// });
// Route::get('/receive_payment', function () {
//     return view('officer/receive_payment');
// });
Route::get('/serch_request', function () {
    return view('officer/serch_request');
});
// Route::get('/result_check', function () {
//     return view('classPlan/result_check');
// });
// Route::get('/student_request', function () {
//     return view('classPlan/student_request');
// })->name('student_request');
// Route::get('/data_preview', function () {
//     return view('classPlan/data_preview');
// });
// Route::get('/check_subjects', function () {
//     return view('classPlan/check_subjects');
// });
// Route::get('/adv_student_request', function () {
//     return view('advisor/adv_student_request');
// });
// Route::get('/adv_data_preview', function () {
//     return view('advisor/adv_data_preview');
// });
