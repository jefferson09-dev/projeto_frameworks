<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('studies')->get();

        return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        Subject::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/subjects');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);

        $subject->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/subjects');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        $subject->delete();

        return redirect('/subjects');
    }
}