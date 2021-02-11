<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Show all notes.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $notes = Note::all();

        return view('notes.index')->with(['notes' => $notes]);
    }

    /**
     * Show single note.
     *
     * @param Note $note
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Note $note) {
        return view('notes.show')->with(['note' => $note]);
    }

    /**
     * Show single note editor.
     *
     * @param Note $note
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Note $note) {
        return view('notes.edit')->with(['note' => $note]);
    }

    /**
     * Store updated changes.
     *
     * @param Note $note
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Note $note, Request $request) {
        $note->heading = $request->heading;
        $note->body = $request->body;

        $note->save();

        return redirect()->to(route('notes.show', ['note' => $note->id]));
    }

    /**
     * Delete stored note.
     *
     * @param Note $note
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function delete(Note $note) {

        $note->delete();

        return redirect()->to(route('notes.index'));
    }


    /**
     * Show create form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create() {
        return view('notes.create');
    }

    /**
     * Store created note.
     *
     * @param Note $note
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request) {

        $note = new Note;

        $note->heading = $request->heading;
        $note->body = $request->body;
        $note->save();

        return redirect()->to(route('notes.show', ['note' => $note]));
    }
}
