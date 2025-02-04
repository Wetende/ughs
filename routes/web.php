<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\ClassGroupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomTimetableItemController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamRecordController;
use App\Http\Controllers\ExamSlotController;
use App\Http\Controllers\FeeCategoryController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\FeeInvoiceController;
use App\Http\Controllers\FeeInvoiceRecordController;
use App\Http\Controllers\GradeSystemController;
use App\Http\Controllers\MyClassController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TimetableTimeSlotController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Edit: haha we built something great
| Should I add easter eggs?
|
*/

// Public routes
Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // About routes
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/about/history', function () {
        return view('about.history');
    })->name('about.history');

    Route::get('/about/leadership', function () {
        return view('about.leadership');
    })->name('about.leadership');

    // Academics route
    Route::get('/academics', function () {
        return view('academics');
    })->name('academics');

    // Student Life route
    Route::get('/student-life', function () {
        return view('student-life');
    })->name('student-life');

    // Gallery route
    Route::get('/gallery', function () {
        return view('gallery');
    })->name('gallery');

    // Alumni route
    Route::get('/alumni', function () {
        return view('alumni');
    })->name('alumni');

    // Give Back route
    Route::get('/give-back', function () {
        return view('give-back');
    })->name('give-back');

    // Mentorship Program route
    Route::get('/mentorship', function () {
        return view('mentorship');
    })->name('mentorship');

    // Career Network route
    Route::get('/career-network', function () {
        return view('career-network');
    })->name('career-network');

    // Resources route
    Route::get('/resources', function () {
        return view('resources');
    })->name('resources');

    // Notice Board route
    Route::get('/notice-board', function () {
        return view('notice-board');
    })->name('notice-board');

    // Authentication Routes
    Route::middleware(['web'])->group(function () {
        Route::get('auth/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('auth/login', [AuthController::class, 'login'])->name('login.submit');
        Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('auth/register', [AuthController::class, 'register'])->name('register.submit');
        Route::get('auth/password/reset', [AuthController::class, 'showResetForm'])->name('password.request');
        Route::post('auth/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
    });

    // Contact route
    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

    Route::get('/news', function () {
        return view('news');
    })->name('news');

    Route::get('/admissions', function () {
        return view('admissions');
    })->name('admissions');

    Route::middleware(['guest'])->group(function () {
        // Removed duplicate login route
    });

    // Registration routes
    // Removed duplicate registration route
});

//user must be authenticated
Route::middleware([
    'auth:sanctum',
    'App\Http\Middleware\PreventLockAccountAccess',
    'App\Http\Middleware\EnsureDefaultPasswordIsChanged',
    'App\Http\Middleware\PreventGraduatedStudent'
])->prefix('dashboard')->namespace('App\Http\Controllers')->group(function () {
    
    // Default dashboard - handles all roles
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard')->withoutMiddleware(['App\Http\Middleware\PreventGraduatedStudent']);

    // School settings routes
    Route::middleware(['auth', 'can:manage settings'])->group(function () {
        Route::get('/settings', [SchoolController::class, 'settings'])->name('school.settings');
        Route::put('/settings', [SchoolController::class, 'update'])->name('school.update');
    });

    //class routes
    Route::resource('classes', MyClassController::class);

    //class groups routes
    Route::resource('class-groups', ClassGroupController::class);

    //sections routes
    Route::resource('sections', SectionController::class);

    Route::middleware(['App\Http\Middleware\EnsureAcademicYearIsSet', 'App\Http\Middleware\CreateCurrentAcademicYearRecord'])->group(function () {
        Route::get('account-applications/rejected-applications', ['App\Http\Controllers\AccountApplicationController', 'rejectedApplicationsView'])->name('account-applications.rejected-applications');

        //account application routes. We need the applicant instead of the record
        Route::resource('account-applications', AccountApplicationController::class)->parameters([
            'account-applications' => 'applicant',
        ]);

        Route::get('account-applications/change-status/{applicant}', ['App\Http\Controllers\AccountApplicationController', 'changeStatusView'])->name('account-applications.change-status');

        Route::post('account-applications/change-status/{applicant}', ['App\Http\Controllers\AccountApplicationController', 'changeStatus']);

        //promotion routes
        Route::get('students/promotions', ['App\Http\Controllers\PromotionController', 'index'])->name('students.promotions');
        Route::get('students/promote', ['App\Http\Controllers\PromotionController', 'promoteView'])->name('students.promote');
        Route::post('students/promote', ['App\Http\Controllers\PromotionController', 'promote']);
        Route::get('students/promotions/{promotion}', ['App\Http\Controllers\PromotionController', 'show'])->name('students.promotions.show');
        Route::delete('students/promotions/{promotion}/reset', ['App\Http\Controllers\PromotionController', 'resetPromotion'])->name('students.promotions.reset');

        //graduation routes
        Route::get('students/graduations', ['App\Http\Controllers\GraduationController', 'index'])->name('students.graduations');
        Route::get('students/graduate', ['App\Http\Controllers\GraduationController', 'graduateView'])->name('students.graduate');
        Route::post('students/graduate', ['App\Http\Controllers\GraduationController', 'graduate']);
        Route::delete('students/graduations/{student}/reset', ['App\Http\Controllers\GraduationController', 'resetGraduation'])->name('students.graduations.reset');

        //term routes
        Route::resource('terms', TermController::class);
        Route::post('terms/set', ['App\Http\Controllers\TermController', 'setTerm'])->name('terms.set-term');

        Route::middleware(['App\Http\Middleware\EnsureTermIsSet'])->group(function () {
            //fee categories routes
            Route::resource('fees/fee-categories', FeeCategoryController::class);

            //fee invoice record routes
            Route::post('fees/fee-invoices/fee-invoice-records/{fee_invoice_record}/pay', ['App\Http\Controllers\FeeInvoiceRecordController', 'pay'])->name('fee-invoices-records.pay');
            Route::resource('fees/fee-invoices/fee-invoice-records', FeeInvoiceRecordController::class);

            //fee incvoice routes
            Route::get('fees/fee-invoices/{fee_invoice}/pay', ['App\Http\Controllers\FeeInvoiceController', 'payView'])->name('fee-invoices.pay');
            Route::get('fees/fee-invoices/{fee_invoice}/print', ['App\Http\Controllers\FeeInvoiceController', 'print'])->name('fee-invoices.print');
            Route::resource('fees/fee-invoices', FeeInvoiceController::class);

            //fee routes
            Route::resource('fees', FeeController::class);

            //syllabi route
            Route::resource('syllabi', SyllabusController::class);

            //timetable route
            Route::resource('timetables', TimetableController::class);
            Route::resource('custom-timetable-items', CustomTimetableItemController::class);

            //manage timetable
            Route::get('timetables/{timetable}/manage', ['App\Http\Controllers\TimetableController', 'manage'])->name('timetables.manage');
            Route::get('timetables/{timetable}/print', ['App\Http\Controllers\TimetableController', 'print'])->name('timetables.print');

            //timetable-timeslot route
            Route::resource('timetables/manage/time-slots', TimetableTimeSlotController::class);
            Route::post('timetables/manage/time-slots/{time_slot}/record/create', ['App\Http\Controllers\TimetableTimeSlotController', 'addTimetableRecord'])->name('timetables.records.create')->scopeBindings();

            //set exam status
            Route::post('exams/{exam}/set--active-status', ['App\Http\Controllers\ExamController', 'setExamActiveStatus'])->name('exams.set-active-status');

            // set publish result status
            Route::post('exams/{exam}/set-publish-result-status', ['App\Http\Controllers\ExamController', 'setPublishResultStatus'])->name('exams.set-publish-result-status');
            //manage exam record
            Route::resource('exams/exam-records', ExamRecordController::class);

            //exam tabulation sheet
            Route::get('exams/tabulation-sheet', ['App\Http\Controllers\ExamController', 'examTabulation'])->name('exams.tabulation');

            //result tabulation sheet
            Route::get('exams/term-result-tabulation', ['App\Http\Controllers\ExamController', 'termResultTabulation'])->name('exams.term-result-tabulation');
            Route::get('exams/academic-year-result-tabulation', ['App\Http\Controllers\ExamController', 'academicYearResultTabulation'])->name('exams.academic-year-result-tabulation');

            //result checker
            Route::get('exams/result-checker', ['App\Http\Controllers\ExamController', 'resultChecker'])->name('exams.result-checker');

            //exam routes
            Route::resource('exams', ExamController::class);

            //exam slot routes
            Route::scopeBindings()->group(function () {
                Route::resource('exams/{exam}/manage/exam-slots', ExamSlotController::class);
            });

            //grade system routes
            Route::resource('grade-systems', GradeSystemController::class);
        });

        //student routes
        Route::resource('students', StudentController::class);
        Route::get('students/{student}/print', ['App\Http\Controllers\StudentController', 'printProfile'])->name('students.print-profile')->withoutMiddleware(['App\Http\Middleware\PreventGraduatedStudent']);

        //admin routes
        Route::resource('admins', AdminController::class);

        //teacher routes
        Route::resource('teachers', TeacherController::class);

        //parent routes
        Route::resource('parents', ParentController::class);
        Route::get('parents/{parent}/assign-student-to-parent', ['App\Http\Controllers\ParentController', 'assignStudentsView'])->name('parents.assign-student');
        Route::post('parents/{parent}/assign-student-to-parent', ['App\Http\Controllers\ParentController', 'assignStudent']);

        //lock account route
        Route::post('users/lock-account/{user}', 'App\Http\Controllers\LockUserAccountController')->name('user.lock-account');

        //academic year routes
        Route::resource('academic-years', AcademicYearController::class);
        Route::post('academic-years/set', ['App\Http\Controllers\AcademicYearController', 'setAcademicYear'])->name('academic-years.set-academic-year');

        //assign teachers to subject in class
        Route::get('subjects/assign-teacher', ['App\Http\Controllers\SubjectController', 'assignTeacherVIew'])->name('subjects.assign-teacher');
        Route::post('subjects/assign-teacher/{teacher}', ['App\Http\Controllers\SubjectController', 'assignTeacher'])->name('subjects.assign-teacher-to-subject');

        //subject routes
        Route::resource('subjects', SubjectController::class);

        //notice routes
        Route::resource('notices', NoticeController::class);
    });
});
