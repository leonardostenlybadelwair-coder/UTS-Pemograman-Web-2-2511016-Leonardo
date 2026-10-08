<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
 
Route::resource('books', BookController::class);

Route::resource('films', FilmController::class)->only(['index', 'show']);

Route::view('/profil-kelas', 'profil-kelas')
    ->name('profil-kelas');

Route::view('/', 'home')->name('home');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
    Route::delete('invitations/{invitation}', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
});

require __DIR__.'/settings.php';
