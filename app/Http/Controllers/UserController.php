<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\District;
use App\Models\Division;
use App\Models\Exam;
use App\Models\Thana;
use App\Models\University;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Response;
use Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function create()
    {
        $data = Division::all();

        return \view('users.create', compact('data'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'picture' => 'required|mimes:jpeg,bmp,png',
            'address' => 'required',
            'division' => 'required',
            'district' => 'required',
            'thana' => 'required',
            'details' => 'required',
            'language' => 'required',
            'cv' => 'required|mimes:pdf,doc,docx|max:10000',
            'exam' => 'required',
            'university' => 'required',
            'board' => 'required',
            'result' => 'required'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $pic = $request->file('picture');
        $pic_fileName = $pic->hashName() ?? null . '' . time() . '.' . $pic->extension();
        $pic_url = Storage::putFileAs('usersData/' . $request->email . "/picture", $pic, $pic_fileName);
        $user->picture = $pic_url;
        $cv = $request->file('cv');
        $cv_fileName = $cv->hashName() ?? null . '' . time() . '.' . $cv->extension();
        $cv_url = Storage::putFileAs('usersData/' . $request->email . "/cv", $cv, $cv_fileName);
        $user->cv = $cv_url;
        $user->address = $request->address;
        $user->division_id = $request->division;
        $user->district_id = $request->district;
        $user->thana_id = $request->thana;
        $user->details = $request->details;
        $user->language = json_encode($request->language);
        $exam = [];
        $exam[] = [
            "exam" => $request->exam,
            "university" => $request->university,
            "board" => $request->board,
            "result" => $request->result
        ];
        $user->education = json_encode($exam);
        $user->save();
        return redirect()->route('users.index');
    }
    public function show(Request $request,$id){
        $user = User::findOrFail($id);
        $division = Division::find($user->division_id)->name;
        $district = District::find($user->district_id)->name;
        $thana = Thana::find($user->thana_id)->name;
        $education = json_decode($user->education,true);
        $exam = $education[0]['exam'];
        $exam = Exam::find($exam)->name;
        $university = $education[0]['university'];
        $university = University::find($university)->name;
        $board = $education[0]['board'];
        $board = Board::find($board)->name;
        $result = $education[0]['result'];
        $languages = json_decode($user->language,true);
        $user_language = array();
        foreach ($languages as $language){
            $user_language[] = $language;
        };
        $hostname = $request->getHttpHost();
        return view('users.user',compact('hostname','user','division','district','thana','exam','university','board','result','user_language'));
    }
    public function getUserCV($id)
    {
        $user = User::find($id);
        $CvUrl = $user->cv;
        return Response::make(file_get_contents($CvUrl),200,[
            'content-type'=>'application/pdf',
        ]);

    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
