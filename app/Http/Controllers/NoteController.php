<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Carbon\Carbon;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255', // Validating the title
            'note' => 'nullable|string',          // Allowing empty note
        ]);

        Note::create([
            'date' => Carbon::now()->toDateString(), // Auto-fill the current date
            'title' => $request->input('title'),
            'note' => $request->input('note'),
        ]);

        return redirect()->route('welcome')->with('success', 'Note added!'); // Redirect back to welcome page
    }


    public function index()
    {
        $notes = Note::all(); // fetch all notes from DB
        return view('welcome', compact('notes'));
    }

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('welcome')->with('success', 'Note deleted!');
    }

}
