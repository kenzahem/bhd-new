<?php

use App\Livewire\Welcome;
use App\Livewire\Homepage;
use App\Livewire\Auth\Login;
use App\Livewire\Rooms\View;
use App\Livewire\Rooms\Table;
use App\Livewire\Rooms\Browse;
use App\Livewire\Rooms\Create;
use App\Livewire\Auth\Register;
use App\Livewire\Profile\Dashboard;
use App\Livewire\Rooms\UserPostRoom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Rooms\Table as RoomsTable;
use App\Livewire\Backend\Dashboard as BackendDashboard;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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


Route::get('/', Homepage::class)->name('home');
Route::get('/auth/login', Login::class)->name('login');
Route::get('/auth/register', Register::class);

//AUTHENTICATED USERS
Route::middleware(['auth'])->group( function(){
    Route::get('/profile', Dashboard::class);
    Route::get('/post-room', UserPostRoom::class);
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->to('/');
    });
});

// PUBLIC ACCESS
Route::get('/rooms/{id}/view', View::class);
Route::get('/rooms/browse', Browse::class)->lazy();


//BACKEND
Route::middleware(['CheckIfAdmin', 'auth'])->group( function(){
    Route::get('/admin' , BackendDashboard::class);
    Route::get('/admin/rooms', RoomsTable::class);
    Route::get('/rooms/create', Create::class);
    Route::get('/rooms/table', Table::class);
});


// Route::get('/email/verify', function () {
//     return view('livewire.auth.email-verify');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
