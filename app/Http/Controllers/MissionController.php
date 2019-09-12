<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Student;
use App\StudentMission;
use App\Record;
use DB;
class MissionController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index($student_id)
    {

    	$studentMission = StudentMission::where('student_id',$student_id)->get();

        $missions1 = Mission::where('in_juz',1)->get();
        $missions2 = Mission::where('in_juz',2)->get();
        $missions3 = Mission::where('in_juz',3)->get();
        $missions4 = Mission::where('in_juz',4)->get();
        $missions5 = Mission::where('in_juz',5)->get();
        $missions6 = Mission::where('in_juz',6)->get();
        $missions7 = Mission::where('in_juz',7)->get();
        $missions8 = Mission::where('in_juz',8)->get();
        $missions9 = Mission::where('in_juz',9)->get();
        $missions10 = Mission::where('in_juz',10)->get();
        $missions11 = Mission::where('in_juz',11)->get();
        $missions12 = Mission::where('in_juz',12)->get();
        $missions13 = Mission::where('in_juz',13)->get();
        $missions14 = Mission::where('in_juz',14)->get();
        $missions15 = Mission::where('in_juz',15)->get();
        $missions16 = Mission::where('in_juz',16)->get();
        $missions17 = Mission::where('in_juz',17)->get();
        $missions18 = Mission::where('in_juz',18)->get();
        $missions19 = Mission::where('in_juz',19)->get();
        $missions20 = Mission::where('in_juz',20)->get();
        $missions21 = Mission::where('in_juz',21)->get();
        $missions22 = Mission::where('in_juz',22)->get();
        $missions23 = Mission::where('in_juz',23)->get();
        $missions24 = Mission::where('in_juz',24)->get();
        $missions25 = Mission::where('in_juz',25)->get();
        $missions26 = Mission::where('in_juz',26)->get();
        $missions27 = Mission::where('in_juz',27)->get();
        $missions28 = Mission::where('in_juz',28)->get();
        $missions29 = Mission::where('in_juz',29)->get();
        $missions30 = Mission::where('in_juz',30)->get();
        return view('mission.index',compact('student_id','studentMission',
        	'missions1',
        	'missions2',
        	'missions3',
        	'missions4',
        	'missions5',
        	'missions6',
        	'missions7',
        	'missions8',
        	'missions9',
        	'missions10',
        	'missions11',
        	'missions12',
        	'missions13',
        	'missions14',
        	'missions15',
        	'missions16',
        	'missions17',
        	'missions18',
        	'missions19',
        	'missions20',
        	'missions21',
        	'missions22',
        	'missions23',
        	'missions24',
        	'missions25',
        	'missions26',
        	'missions27',
        	'missions28',
        	'missions29',
        	'missions30'
        ));
    }

    public function store(Request $request)
    {
        $student_id 	= $request->student_id;
        $mission_number = $request->mission_number;
        $pages 			= $request->pages;
        Student::find($student_id)->studentHasMission()->attach($pages,['mission_number'=>$mission_number]);
        StudentMission::create(['student_id'=>$student_id,'mission_number'=>$mission_number]);
        return redirect()->route('welcome');

    }

    public function save($id)
    {
        $lastRecord = Record::orderBy('id','desc')->first();
        DB::table('student_has_mission')->where('id',$id)
        ->update(['done'=>1,'day'=>$lastRecord->day,'month'=>$lastRecord->month,'year'=>$lastRecord->year]);
        return redirect()->back();

    }

    public function missionlist($student_id)
    {
        $student = Student::find($student_id);
        $studentMissions = StudentMission::where(['student_id'=>$student_id])->get();
        return view('mission.student.missionlist',compact('studentMissions','student'));

    }

    public function juzlist($student_id)
    {
        $student = Student::find($student_id);
        $lastMissions = StudentMission::where(['student_id'=>$student_id])->orderBy('id','desc')->first();
        $studentHasMissions = DB::table('student_has_mission')
        ->where(['student_id'=>$student_id,'mission_number'=>$lastMissions->mission_number])
        ->leftjoin('missions','student_has_mission.mission_id','missions.page')
        ->select('page','descr','done','day','month','year','student_has_mission.id')
        ->get();
        return view('mission.student.juzlist',compact('studentHasMissions','student'));
    }


    public function delete($mission_id)
    {
        $mission = StudentMission::find($mission_id);
        DB::table('student_has_mission')->where('mission_number',$mission->mission_number)->delete();
        $mission->delete();
        return redirect()->route('mission.missionlist',['student_id'=>$mission->student_id]);

    }


}
