<?php
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Models\Blog;
use App\Models\Vehicle;
use App\Models\Loan;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\AssetPageController;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Http\Controllers\LoanController;

// Route::get('/', function () {
//     return view("welcome");
// });

Route::get('/', Index::class);

Route::get('/about', function(){
    return view('pages.about-us-page');
})->name('about');


Route::get('/branches/{branch}', [BranchController::class, 'show'])->name('branches.show');

Route::get('/blog', [BlogPageController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogPageController::class, 'show'])->name('blog.show');

Route::get('/assets', [AssetPageController::class, 'index'])->name('assets.index');
Route::get('/assets/{id}', [AssetPageController::class, 'show'])->name('assets.show');

Route::get('/check-env', function () {
    return [
        'CLOUDINARY_URL' => env('CLOUDINARY_URL'),
        'CLOUDINARY_CLOUD_NAME' => env('CLOUDINARY_CLOUD_NAME'),
        'CLOUDINARY_API_KEY' => env('CLOUDINARY_API_KEY'),
        'CLOUDINARY_API_SECRET' => env('CLOUDINARY_API_SECRET'),
    ];
});

Route::get('/loan/start', [LoanController::class, 'selectClientType'])->name('loan.start');
Route::post('/loan/choose-client-type', [LoanController::class, 'chooseClientType'])->name('loan.chooseType');

Route::get('/loan/apply/{client_type}', [LoanController::class, 'create'])->name('loan.create');
Route::post('/loan/apply', [LoanController::class, 'store'])->name('loan.store');

Route::get('/loan/success', [LoanController::class, 'success'])->name('loan.success');

Route::get('/test-upload', function () {
    $url = Cloudinary::upload(public_path('test.jpg'), [
        'folder' => 'blogs'
    ])->getSecurePath();

    return $url;
});

Route::get('/check-cloudinary', function() {
    dd(config('services.cloudinary'));
});

Route::get('/applications/{id}/export', [App\Http\Controllers\Admin\ApplicationController::class, 'export']);

//ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard/index', function (\Illuminate\Http\Request $request) {

            $blogs = Blog::latest()->paginate(10)->appends(['tab' => 'blog']);

            $vehicles = Vehicle::latest()->paginate(10)->appends(['tab' => 'vehicles']);

            $applications = Loan::latest()->paginate(10)->appends(['tab' => 'application']);

            return view('admin.dashboard.index', compact('blogs', 'vehicles', 'applications')); // ✅ This will render your Blade view    
        })->name('dashboard');

        Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);

        Route::resource('vehicles', App\Http\Controllers\Admin\VehicleController::class);

        Route::resource('application', App\Http\Controllers\Admin\ApplicationController::class);
    });
});

//DASHBOARD
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:admin');  

Route::get('/test', function () {
    return view('admin.test');
})->name('test');

Route::get('/loan-services', function () {
    return view('pages.loan-services');
})->name('loan-services');
