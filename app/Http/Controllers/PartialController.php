<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\District;
use App\Models\Exam;
use App\Models\Thana;
use App\Models\University;

class PartialController extends Controller
{
    public function training()
    {
        return view('partials.training');

    }

    public function education()
    {
        $exams = Exam::all();
        $universities = University::all();
        $boards = Board::all();
        return view('partials.education', compact(['exams', 'universities', 'boards']));
    }
    public function district()
    {
        $division_id = \request('division');
        $data = District::where('division_id', $division_id)->get();
        return view('partials.district', compact('data'));
    }
    public function thana()
    {
        $district_id = \request('district');
        $data = Thana::where('district_id', $district_id)->get();
        return view('partials.thana', compact('data'));
    }
}
