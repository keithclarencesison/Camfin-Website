<?php
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view("welcome");
// });

Route::get('/', Index::class);

Route::get('/about', function(){
    return view('pages.about-us-page');
})->name('about');

// Route::get('/branches', function(){
//     return view('pages.branches');
// })->name('branches');

Route::get('/branches/{branch}', [BranchController::class, 'show'])->name('branches.show');

//ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
        return view('admin.dashboard'); // ✅ This will render your Blade view
        })->name('admin.dashboard');
    });
});

//DASHBOARD
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');  

Route::get('/test', function () {
    return 'Laravel is working';
});