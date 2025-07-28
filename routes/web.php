<?php
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'railway working';
});

Route::get('/index', Index::class);