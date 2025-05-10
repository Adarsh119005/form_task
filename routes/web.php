<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/notes', [NoteController::class, 'store'])->name('notes-store'); // Storing the note

Route::get('/', [NoteController::class, 'index'])->name('welcome'); // Displaying the notes

Route::delete('/notes/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
