<?php
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("livewire.index");
});

// Route::get('/index', Index::class);