<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\SkillController as AdminSkillController;
use App\Http\Controllers\Admin\EducationController as AdminEducationController;
use App\Http\Controllers\Admin\ExperienceController as AdminExperienceController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;


Route::get('/', function () { return view('home', [ 'abouts' => About::all(), 'skills' => Skill::all(), 'educations' => Education::all(), 'experiences' => Experience::all() ]); });


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/home', HomeController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/skill', SkillController::class);  
    Route::resource('/education', EducationController::class);
    Route::resource('/experience', ExperienceController::class);
    Route::resource('/contact', ContactController::class);
});



// Halaman login admin
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// 👤 ADMIN ROUTES
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/home', AdminHomeController::class);
    Route::resource('/about', AdminAboutController::class);
    Route::resource('/skill', AdminSkillController::class);
    Route::resource('/education', AdminEducationController::class);
    Route::resource('/experience', AdminExperienceController::class);
    Route::resource('/contact', AdminContactController::class);
});

// 🌐 PUBLIC ROUTES (untuk guest atau landing page)
Route::get('/', function () {
    return view('home');
});
Route::resource('/home', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/skill', SkillController::class);
Route::resource('/education', EducationController::class);
Route::resource('/experience', ExperienceController::class);
Route::resource('/contact', ContactController::class);

// 🔐 AUTH ROUTES
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
