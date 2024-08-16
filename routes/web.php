<?php

use App\Livewire\Welcome;
use App\Livewire\Homepage;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Profile\Dashboard;
use App\Livewire\Rooms\Browse;
use App\Livewire\Rooms\Create;
use App\Livewire\Rooms\Table;
use App\Livewire\Rooms\UserPostRoom;
use App\Livewire\Rooms\View;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', Homepage::class);

Route::get('/auth/login', Login::class);

Route::get('/auth/register', Register::class);

Route::get('/profile', Dashboard::class);

Route::get('/post-room', UserPostRoom::class);

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->to('/');
});

Route::get('/rooms/create', Create::class);

Route::get('/rooms/table', Table::class);

Route::get('/rooms/{rooms}/view', View::class);

Route::get('/rooms/browse', Browse::class);
