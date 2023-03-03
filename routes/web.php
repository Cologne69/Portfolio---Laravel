<?php

use App\Http\Livewire\Error;
use App\Http\Livewire\Index;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Project;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Index::class, 'render');
Route::get('/project', Project::class, 'render');
Route::get('/contact', Contact::class, 'render');
Route::get('/project/{id}', Project::class, 'render');

Route::any('{catchall}', Error::class, 'render')->where('catchall', '.*');


