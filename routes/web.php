<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\RequestTransferController;
use App\Http\Controllers\RequestToClassPlanController;
use App\Http\Controllers\RequestToAdvisorController;
use App\Http\Controllers\OfficerWorkController;
use App\Http\Controllers\ManageSubjectController;
use App\Http\Controllers\MenuOfficerController;

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

Route::get('/type-transfer', [RequestTransferController::class, 'showRequestTransfer'])->name('typeTransfer');
Route::post('/type-transfer', [RequestTransferController::class, 'storeTypeTransfer'])->name('storeTypeTransfer');

Route::post('/add-other-courses', [RequestTransferController::class, 'addOtherCourses'])->name('addOtherCourses');

Route::get('/add-subject', [RequestTransferController::class, 'showAddSubject'])->name('addSubject');
Route::post('/store-add-subject', [RequestTransferController::class, 'storeAddSubject'])->name('storeAddSubject');

Route::get('/add--original-subject', [RequestTransferController::class, 'showAddOriginalSubject'])->name('addOriginalSubject');
Route::post('/store-add-original-subject', [RequestTransferController::class, 'storeAddOriginalSubject'])->name('storeAddOriginalSubject');

Route::get('/check-data', [RequestTransferController::class, 'showCheckData'])->name('checkData');

Route::get('/statusRequest', [RequestTransferController::class, 'statusRequest'])->name('statusRequest');
Route::post('/confirmTransfer', [RequestTransferController::class, 'confirmTransfer'])->name('confirmTransfer');

Route::get('/student_request', [RequestToClassPlanController::class, 'showStudentRequest'])->name('student_request');
Route::get('/check_subjects', [RequestToClassPlanController::class, 'showDataRequest'])->name('check_subjects');
Route::get('/result_check', [RequestToClassPlanController::class, 'showResultCheck'])->name('result_check');
Route::get('/data_preview', [RequestToClassPlanController::class, 'showDataPreview'])->name('data_preview');

Route::get('/adv_student_request', [RequestToAdvisorController::class, 'showStudentRequest'])->name('adv_student_request');

Route::get('/receive_docs', [OfficerWorkController::class, 'recieveDocsRequest'])->name('receive_docs');
Route::get('/receive_payment', [OfficerWorkController::class, 'recievePaymentRequest'])->name('receive_payment');
Route::get('/payment_update', [OfficerWorkController::class, 'paymentUpdate'])->name('payment_update');

Route::get('/manage_subjects', [ManageSubjectController::class, 'showSubjects'])->name('manage_subject');

Route::get('/menu', [MenuOfficerController::class, 'selectMenu'])->name('menu.index');

Route::get('/search_requests', function () {
    return view('officer/search_requests');
});
