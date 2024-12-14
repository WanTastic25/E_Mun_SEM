<?php

use App\Http\Controllers\ConsultationApplication\ConsultationApplicationController;
use App\Http\Controllers\ConsultationSession\ConsultationSessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagePreMarriageCourse\PreMarriageCourseController;
use App\Http\Controllers\ManageMarriageApplication\MarriageApplicationController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ManageMarriageRegistration\MarriageRegistrationController;
use App\Http\Controllers\ManageMarriageCard\MarriageCardController;
use App\Http\Controllers\MarriageApprovalInfo\MarriageApprovalController;


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
	return redirect('/login');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
	Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin.home');
	Route::put('/admin/{id}/update', [UserController::class, 'admin_update'])->name('admin.update_profile');
	Route::get('/admin/staff_list', [UserController::class, 'readStaff'])->name('admin.staff_list');
	Route::get('/admin/user_list', [UserController::class, 'readUser'])->name('admin.user_list');
	Route::get('/admin/staff_list/staff_form', [UserController::class, 'staffForm'])->name('admin.staff_form');
	Route::post('/admin/staff_list/add_staff', [UserController::class, 'createStaff'])->name('admin.add_staff');
	Route::get('/admin/staff_list/profile/{id}', [UserController::class, 'readStaffProfile'])->name('admin.staff_profile');
	Route::get('/admin/user_list/profile/{id}', [UserController::class, 'readUserProfile'])->name('admin.user_profile');
	Route::put('/admin/staff_list/profile/{id}/update', [UserController::class, 'updateStaff'])->name('admin.update_staff');
	Route::put('/admin/user_list/profile/{id}/update', [UserController::class, 'updateUser'])->name('admin.update_user');
	Route::delete('/admin/staff_list/profile/{id}/delete', [UserController::class, 'deleteStaff'])->name('admin.delete_staff');
	Route::delete('/admin/user_list/profile/{id}/delete', [UserController::class, 'deleteUser'])->name('admin.delete_user');
});

Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
	
	Route::get('/staff', [HomeController::class, 'indexStaff'])->name('staff.home');
	Route::get('/staff/user_list', [UserController::class, 'readUser'])->name('staff.user_list');
	Route::get('/staff/user_list/profile/{id}', [UserController::class, 'readUserProfile'])->name('staff.user_profile');
	Route::put('/staff/user_list/profile/{id}/update', [UserController::class, 'updateUser'])->name('staff.update_user');
	Route::delete('/staff/user_list/profile/{id}/delete', [UserController::class, 'deleteUser'])->name('staff.delete_user');
	Route::put('/staff/{id}/update', [UserController::class, 'staff_update'])->name('staff.update_profile');

	// PreMarriage Course for staff
	Route::post('/addCourse', [PreMarriageCourseController::class, 'addCourse'])->name('staff.addCourse');
	Route::get('/InfoList/{course_id}', [PreMarriageCourseController::class, 'viewInfoList'])->name('staff.InfoList');
	Route::put('/InfoList/{course_id}/update', [PreMarriageCourseController::class, 'updateLocation'])->name('staff.updateLocation');
	Route::delete('/InfoList/{course_id}/delete', [PreMarriageCourseController::class, 'deleteCourse'])->name('staff.deleteCourse');
	Route::get('/LocationList', [PreMarriageCourseController::class, 'viewLocationList'])->name('staff.LocationList');
	Route::get('/ApplicantList', [PreMarriageCourseController::class, 'viewApplicantList'])->name('staff.ApplicantList');
	Route::get('/ApplicantAttendance', [PreMarriageCourseController::class, 'viewApplicantAttendance'])->name('staff.ApplicantAttendance');

	// Marriage Application for staff
	Route::get('/ApplicationList', [MarriageApplicationController::class, 'indexApplicantList'])->name('staff.ApplicationList');
	Route::get('/ApplicationStatus', [MarriageApplicationController::class, 'indexApplicantStatus'])->name('staff.ApplicationStatus');

	// Marriage Approval for staff
	Route::get('/ApprovalMarriage', [MarriageRegistrationController::class, 'indexApproval'])->name('staff.Approval');
	Route::get('/ApprovalInfo', [MarriageRegistrationController::class, 'indexApprovalInfo'])->name('staff.ApprovalInfo');
	Route::get('/ApprovalDocument', [MarriageRegistrationController::class, 'indexApprovalDoc'])->name('staff.ApprovalDoc');
	
	

	// Consultation oF Staff
	Route::get('/ConsultApplicationApproval', [ConsultationApplicationController::class, 'indexConsultApproval'])->name('staff.ConsultationApplicationApproval');

	Route::get('/ConsultSessionAddSchedule', [ConsultationSessionController::class, 'indexConsultSessionAddSchedule'])->name('staff.ConsultationSessionAddSchedule');
	Route::get('/ConsultSessionSchedule', [ConsultationSessionController::class, 'indexConsultSessionSchedule'])->name('staff.ConsultationSessionSchedule');
	Route::get('/ConsultSessionReview', [ConsultationSessionController::class, 'indexConsultSessionReview_s'])->name('staff.ConsultationSessionReview');
	Route::get('/ConsultSessionStatus', [ConsultationSessionController::class, 'indexConsultSessionStatus_s'])->name('staff.ConsultationSessionStatus');

// Marriage card Approval for staff
	Route::get('/CardApprovalList', [MarriageCardController::class, 'indexCardApprovalList'])->name('staff.CardApprovalList');
	Route::get('/CardApprovalInfo', [MarriageCardController::class, 'indexCardApprovalInfo'])->name('staff.CardApprovalInfo');



});

  Route::group(['middleware' => ['auth', 'verified', 'user-role:user']], function () {
	Route::get('/user', [HomeController::class, 'indexUser'])->name('user.home');
	Route::put('/user/{id}/update', [UserController::class, 'user_update'])->name('user.update_profile');

	// PreMarriage Course for user
	Route::get('/Terms&Condition', [PreMarriageCourseController::class, 'indexCourse'])->name('user.terms');
	Route::get('/Organization', [PreMarriageCourseController::class, 'indexOrganization'])->name('user.organization');
	Route::get('/ViewOrganization/{course_id}', [PreMarriageCourseController::class, 'indexViewOrganization'])->name('user.viewOrganization');
	Route::get('/CourseStatus', [PreMarriageCourseController::class, 'indexCourseStatus'])->name('user.courseStatus');
	Route::get('/CourseForm', [PreMarriageCourseController::class, 'indexCourseForm'])->name('user.courseForm');


// Marriage Application for user
	Route::get('/ApplicationPemohon', [MarriageApplicationController::class, 'indexPemohon'])->name('user.ApplicationPemohon');
	Route::get('/ApplicationPasangan', [MarriageApplicationController::class, 'indexPasangan'])->name('user.ApplicationPasangan');
	Route::get('/ApplicationPerkahwinan', [MarriageApplicationController::class, 'indexPerkahwinan'])->name('user.ApplicationPerkahwinan');
	Route::get('/ApplicationConsent', [MarriageApplicationController::class, 'indexConsent'])->name('user.ApplicationConsent');
	Route::get('/ApplicationHiv', [MarriageApplicationController::class, 'indexHiv'])->name('user.ApplicationHiv');
	Route::get('/ApplicationResident', [MarriageApplicationController::class, 'indexResident'])->name('user.ApplicationResident');
	Route::get('/ApplicationPermission', [MarriageApplicationController::class, 'indexPermission'])->name('user.ApplicationPermission');
	Route::get('/ApplicationChecklist', [MarriageApplicationController::class, 'indexChecklist'])->name('user.ApplicationChecklist');

	
// Marriage Registration for user
	Route::get('/MarriageRegistration',[MarriageRegistrationController::class,'indexRegister'])->name('user.Registerform');
	Route::get('/RegistrationList',[MarriageRegistrationController::class,'indexList'])->name('user.RegisterList');
	Route::get('/RegistrationForm',[MarriageRegistrationController::class,'indexForm'])->name('user.RegisterNewForm');
	Route::get('/RegistrationFormPasangan',[MarriageRegistrationController::class,'indexFormPasangan'])->name('user.RegisterFormPasangan');
	Route::get('/RegistrationMaklumat', [MarriageRegistrationController::class, 'indexMaklumat'])->name('user.MaklumatPerkahwinan');
	Route::get('/RegistrationMaklumat2', [MarriageRegistrationController::class, 'indexMaklumat2'])->name('user.MaklumatPerkahwinan2');
	Route::get('/RegistrationMaklumat3', [MarriageRegistrationController::class, 'indexMaklumat3'])->name('user.MaklumatPerkahwinan3');

	

// Marriage card registration for user
	Route::get('/MarriageCertificate&Card', [MarriageCardController::class, 'indexCard'])->name('user.MarriageCard');
	Route::get('/MarriageCertificate&Card2', [MarriageCardController::class, 'indexCard2'])->name('user.MarriageCard2');

	Route::get('/MarriageApproval_', [MarriageApprovalController::class, 'indexApproval'])->name('staf.MarriageApproval');

// Section Consultation of User

	// Consultation Application
	Route::get('/ConsultationApplication', [ConsultationApplicationController::class, 'indexConsultApplication'])->name('user.ConsultationApplication');
	Route::get('/ConsultationApplicationStatus', [ConsultationApplicationController::class, 'indexConsultApplicationStatus'])->name('user.ConsultationApplicationStatus');
	Route::get('/ConsultationComplaint', [ConsultationApplicationController::class, 'indexConsultComplaint'])->name('user.ConsultationComplaint');

	// Consultation Session
	Route::get('/ConsultationSession', [ConsultationSessionController::class, 'indexConsultSession'])->name('user.ConsultationSessionApplication');
	Route::get('/ConsultationSessionReview', [ConsultationSessionController::class, 'indexConsultSessionReview'])->name('user.ConsultationSessionReview');
	Route::get('/ConsultationSessionStatus', [ConsultationSessionController::class, 'indexConsultSessionStatus'])->name('user.ConsultationSessionStatus');
	
});
