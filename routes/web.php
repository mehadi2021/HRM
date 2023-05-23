<?php
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


//Frontend

Route::post('/job/apply/store',[FrontendHomeController::class,'jobApplyStore'])->name('job.apply.store');

//Route::get('/job/apply/($id)')

Route::get('/',[FrontendHomeController::class,'website'])->name('website');
// Route::get('/circular/home',[JobApplyController::class,'Apply_edit'])->name('website.edit');
// Route::put('/circular/home/done/{id}',[JobApplyController::class,'applyDone'])->name('applyForm.job');
Route::get('/circular/home',[FrontendHomeController::class,'websiteCircular'])->name('website.circular');
Route::get('/website/login',[FrontendHomeController::class,'websiteLogin'])->name('website.Login');
Route::post('/login/process',[FrontendHomeController::class,'loginProcess'])->name('Login.process');
Route::get('/website/logout',[FrontendHomeController::class,'logout'])->name('website.Logout');
Route::post('/register/store',[FrontendHomeController::class,'registerStore'])->name('register.store');


Route::get('/website/reg',[FrontendHomeController::class,'reg'])->name('website.reg');

Route::get('/place/job/{id}',[FrontendHomeController::class,'placeJob'])->name('place.job');
Route::put('/place/job/form/{id}',[FrontendHomeController::class,'Apply_update'])->name('applyForm.job');
Route::post('/place/job/store',[FrontendHomeController::class,'applyFormStore'])->name('applyForm.job.store');
 Route::get('/job/circular/list/view',[FrontendHomeController::class,'Applylist'])->name('circular.applylist');
 Route::get('/job/circular/exam/create',[FrontendHomeController::class,'expage'])->name('exampage.expage');
 Route::post('/job/circular/exam/store',[FrontendHomeController::class,'store'])->name('exampage.exstore');
 Route::get('/job/circular/cletter',[FrontendHomeController::class,'cletter'])->name('letter.cletter');


//Backend

Route::group(['middleware'=>'auth'],function(){

Route::get('/admin',[homecontroller::class,'home'])->name('home');







Route::get('/job/circular',[homecontroller::class,'circular'])->name('circular');

Route::get('/job/circular/create',[homecontroller::class, 'jobCircularCreate'])->name('backend.job.circular.create');
Route::get('/job/circular/list',[homecontroller::class,'circularList'])->name('circular.List');

Route::get('/job/circular/list/{file}',[homecontroller::class,'download'])->name('circular.download');
Route::get('/job/circular/list/edit/{id}',[FrontendHomeController::class,'edit'])->name('circular.edit');
Route::put('/job/circular/list/update/{id}',[FrontendHomeController::class,'update'])->name('circular.update');
Route::get('/job/circular/list',[homecontroller::class,'circularList'])->name('circular.apply');


Route::post('/job/store',[homecontroller::class,'jobstore'])->name('job.store');

Route::get('/department',[homecontroller::class,'department'])->name('department');
Route::post('/department',[homecontroller::class,'_department'])->name('_department');

Route::get('/designation',[homecontroller::class,'designation'])->name('designation');
Route::post('/designation',[homecontroller::class,'_designation'])->name('_designation');

Route::get('/notice',[homecontroller::class,'notice'])->name('notice');
Route::post('/notice',[homecontroller::class,'_notice'])->name('_notice');

Route::get('/salary/table',[homecontroller::class,'list'])->name('list.salary');
Route::get('/addsalary',[homecontroller::class,'add'])->name('add.salary');
Route::post('/salary/submit',[homecontroller::class,'submit'])->name('submit.salary');

Route::get('/leave',[homecontroller::class,'leaveForm'])->name('leave');
Route::post('/leave',[homecontroller::class,'leaveFormSubmit'])->name('_leave');
Route::get('/leave-approve/{id}',[homecontroller::class,'leaveApprove'])->name('leave.approve');
Route::get('/leave-reject/{id}',[homecontroller::class,'leaveReject'])->name('leave.reject');
Route::get('/result',[homecontroller::class,'resultpage'])->name('result.resultpage');
Route::get('/result/edit/{id}',[homecontroller::class,'resultedit'])->name('result.resultedit');
Route::put('/result/update/{id}',[homecontroller::class,'resultupdate'])->name('result.resultupdate');

// Route::get('/movement',[homecontroller::class,'movement'])->name('movement');
// Route::post('/movement',[homecontroller::class,'_movement'])->name('_movement');

Route::get('/attendance',[homecontroller::class,'attendance'])->name('attendance');
Route::post('/attendance',[homecontroller::class,'attendance'])->name('_attendance');
Route::get('/attendance/checkin',[homecontroller::class,'checkin'])->name('attendence.checkin');
Route::get('/attendance/checkout',[homecontroller::class,'checkout'])->name('attendence.checkout');

Route::get('/employee',[homecontroller::class,'employee'])->name('employee');
Route::post('/employee',[homecontroller::class,'_employee'])->name('_employee');

Route::get('/payroll',[homecontroller::class,'payroll'])->name('payroll');
Route::get('/payroll/create',[homecontroller::class,'payrollCreate'])->name('payroll.create');

Route::post('/payroll/store',[homecontroller::class,'payrollStore'])->name('payroll.store');
Route::get('/exam/list',[homecontroller::class,'examlist'])->name('exam.list');
Route::get('/exam/list/delete/{id}',[homecontroller::class,'exam_delete'])->name('exam.delete');
Route::get('/exam/create',[homecontroller::class,'page'])->name('exam.create');
Route::post('/exam/store',[homecontroller::class,'store'])->name('exam.store');


// Route::post('/addsalary',[homecontroller::class,'_salary'])->name('salary');

// Route::get('/login',[homecontroller::class,'login'])->name('login');
// Route::post('/login',[homecontroller::class,'_login'])->name('_login');
// Route::post('/logout',[homecontroller::class,'logout'])->name('logout');



// delete button

Route::get('/notice/delete/{id}',[homecontroller::class,'notice_delete'])->name('notice.notice_delete');
Route::get('/employee/delete/{id}',[homecontroller::class,'delete'])->name('employee.delete');
Route::get('/department/delete/{id}',[homecontroller::class,'department_delete'])->name('department.department_delete');
Route::get('/attendance/delete/{id}',[homecontroller::class,'attendance_delete'])->name('attendance.attendance_delete');
Route::get('/salary/delete/{id}',[homecontroller::class,'salary_delete'])->name('_salary.salary_delete');
Route::get('/leave/delete/{id}',[homecontroller::class,'leave_delete'])->name('leave.leave_delete');
Route::get('/movement/delete/{id}',[homecontroller::class,'movement_delete'])->name('movement.movement_delete');
Route::get('/designation/delete/{id}',[homecontroller::class,'designation_delete'])->name('designation.designation_delete');


// Edit
Route::get('/department/edit/{id}',[homecontroller::class,'department_edit'])->name('department.department_edit');
Route::put('/department/update/{id}',[homecontroller::class,'department_update'])->name('department.department_update');
Route::get('/designation/edit/{id}',[homecontroller::class,'designation_edit'])->name('designation.designation_edit');
Route::put('/designation/update/{id}',[homecontroller::class,'designation_update'])->name('designation.designation_update');
Route::get('/notice/edit/{id}',[homecontroller::class,'notice_edit'])->name('notice.notice_edit');
Route::put('/notice/update/{id}',[homecontroller::class,'notice_update'])->name('notice.notice_update');
// Route::get('/salary/edit/{id}',[homecontroller::class,'salary_edit'])->name('_salary.edit');
// Route::put('/salary/update/{id}',[homecontroller::class,'salary_update'])->name('_salary.update');
Route::get('/attendance/edit/{id}',[homecontroller::class,'attendance_edit'])->name('attendance.edit');
Route::put('/attendance/update/{id}',[homecontroller::class,'attendance_update'])->name('attendance.update');
// Route::get('/employee/edit/{id}',[homecontroller::class,'employee_edit'])->name('employee.edit');
// Route::put('/employee/update/{id}',[homecontroller::class,'employee_update'])->name('employee.update');





});

//login
Route::get('/login',[AdminController::class,'adminlogin'])->name('admin.login');
Route::post('/postlogin',[AdminController::class,'postadminlogin'])->name('postadminlogin');
Route::get('/adminlogout',[AdminController::class,'adminlogout'])->name('admin.logout');