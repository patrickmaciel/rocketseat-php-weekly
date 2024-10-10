<?php

use App\Livewire\Projects\Index;
use App\Livewire\Projects\Proposals;
use App\Livewire\Projects\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('projects.index');

Route::get('/project/{project}', Show::class)->name('projects.show');
Route::get('/project/{project}/proposals', Proposals::class)->name('projects.proposals');

