<?php
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;

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
