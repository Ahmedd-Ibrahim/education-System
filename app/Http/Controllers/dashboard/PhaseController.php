<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Group;
use App\models\Phase;
use App\models\PhaseYear;
use App\models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PhaseController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:show config'])->only(['index']);
        $this->middleware(['permission:store config'])->only(['create','store']);
        $this->middleware(['permission:update config'])->only(['update','edit']);
        $this->middleware(['permission:delete config'])->only(['destroy']);
    }
    public function index()
    {
        $phases = Phase::paginate(40);
        return view('dashboard.phase.index',compact('phases'));
    } // End of Index

    public function create()
    {
        return view('dashboard.phase.add');

    } // End of create

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $valid = Validator::make($request->all(), [
                'name' => 'required|unique:phases|max:255',
                'yearsCount' => 'required'
            ]);

            if ($valid->fails()) {
                return redirect()->back()->with('error', 'Fill All inputs');
            }

            $phase = Phase::create($request->except('yearsCount'));
            $years = explode(',', $request->yearsCount);
            $records = [];
            foreach ($years as $year) {
                $records [] = new PhaseYear(['yearsCount' => $year]);
            }

            $phaseYears = $phase->PhaseYear()->saveMany($records);

            foreach ($phaseYears as $phaseYear)
            {
                $phaseYear->Groups()->save(new Group(['name' =>'A' . $phaseYear->yearsCount, 'student_counter' => 30]));
            }
            DB::commit();
            return redirect()->route('admin.studyPhase.index')->with('success','You have been Added Phase Successfully');
        }catch (\ Exception $ex)
        {
            DB::rollBack();
            return redirect()->route('admin.studyPhase.index')->with('Error','Something Wrong');

        } // End of catch

    } // End of store

    public function show(Phase $Phase)
    {
        //
    } // End of show

    public function edit($id)
    {
        $phase = Phase::findOrFail($id);
        return view('dashboard.phase.edit',compact('phase'));
    }

    public function update(Request $request,  $id)
    {
        try {
            DB::beginTransaction();
            $phase = Phase::findOrFail($id);
            $valid = Validator::make($request->all(),[
                'name'=> 'required|max:255|unique:phases,name,'.$id,
            ]);
            if($valid->fails()){
                return redirect()->back()->with('error','Fill All inputs');
            }
            if($request->has('yearsCount') && $request->yearsCount != null) {

                $years = explode(',', $request->yearsCount);
                $newRecordsCount = count($years);
                $dbCurrentRecordsCount = $phase->PhaseYear->count(); // Counter from Db for this column

                if($dbCurrentRecordsCount > 0){ // make counter over db number
                    $newRecords = [];

                    for($i= 1; $i <= $newRecordsCount; $i++){
                        $newRecords [] = $dbCurrentRecordsCount + $i ;
                    }
                    $recordsPlus = [];
                    foreach ($newRecords as $record) // insert the counter inside array and prepare to inserting to db
                    {
                        $recordsPlus [] =new PhaseYear(['yearsCount'=>$record]);
                    }
                 $newYears = $phase->PhaseYear()->saveMany($recordsPlus);

                    foreach ($newYears as  $newYear)
                    {
                        $newYear->Groups()->save(new Group(['name' =>'A' . $newYear->yearsCount, 'student_counter' => 30]));

                    }
                } // End of if condition
            }// End of if condition
            $phase->update($request->except('yearsCount'));
            DB::commit();
            return redirect()->route('admin.studyPhase.index')->with('success','School years Added Successfully');
        }catch (\Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.studyPhase.index')->with('error','Something Wrong');
        }
    } // End of update


    public function destroy($id)
    {
        $phase = Phase::findOrFail($id);
       $phase->delete();
       return redirect()->back()->with('success','Deleted Successfully');
    } // End of destroy

    public function delete($id){
        $year = PhaseYear::findOrFail($id);
        $year->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    } // End of delete
}
