<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Subject;

class StudyController extends Controller
{
    public function index()
    {
        $studies = Study::with('subject')->get();

        return view('studies.index', compact('studies'));
    }

    public function create()
    {
        $subjects = Subject::all();

        return view('studies.create', compact('subjects'));
    }

    public function store(Request $request)
        {
            $request->validate([
                'subject_id' => 'required',
                'title' => 'required',
                'description' => 'required',
                'study_date' => 'required',
                'study_time' => 'required',
                'status' => 'required',
                'minutes_studied' => 'required'
            ]);

            Study::create([
                'subject_id' => $request->subject_id,
                'title' => $request->title,
                'description' => $request->description,
                'study_date' => $request->study_date,
                'study_time' => $request->study_time,
                'status' => $request->status,
                'minutes_studied' => $request->minutes_studied,
            ]);

            return redirect('/studies');
        }

    public function finish($id)
        {
            $study = Study::findOrFail($id);

            $study->update([
                'status' => 'Concluído'
            ]);

            return redirect('/studies');
        }

    public function dashboard()
        {
            $totalStudies = Study::count();

            $completedStudies = Study::where(
                'status',
                'Concluído'
            )->count();

            $pendingStudies = Study::where(
                'status',
                'Pendente'
            )->count();

            $totalMinutes = Study::sum(
                'minutes_studied'
            );

            return view(
                'dashboard',
                compact(
                    'totalStudies',
                    'completedStudies',
                    'pendingStudies',
                    'totalMinutes'
                )
            );
        }

}