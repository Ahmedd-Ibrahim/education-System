<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\baseInfoRequest;
use App\models\BasicsInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class basicsInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store settings|edit settings|update settings|delete settings']);
    }

    public function index()
    {
        $baseInfo = BasicsInfo::paginate(10);
        return view('dashboard.basicsInfo.index',compact('baseInfo'));
    }// End of index

    public function update(baseInfoRequest $request,  $basicsInfo)
    {
        $info = BasicsInfo::find($basicsInfo);
        if(!$info){
            return redirect()->back()->with('error','There is no id for this information');
        }
        if($request->hasFile('logo')){
            RemoveImage($info->logo);
            $path  = UploadImage('baseInfo',$request->logo);
        }else{
            $path ='';
        }
        $data = $request->except(['_token','logo']);
        $data['logo'] = $path;
        $info->update($data);
        return redirect()->back()->with('success','Your request updated');
    } // End of update

    public function create()
    {
        //
    } // End of create

    public function store(Request $request)
    {


    } // End of store


    public function show(BasicsInfo $basicsInfo)
    {
        //
    } // End of show

    public function edit(BasicsInfo $basicsInfo)
    {

    } // End of Edit

    public function destroy(BasicsInfo $basicsInfo)
    {

    }// End of destroy
}
