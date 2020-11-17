<?php
namespace App\Http\Controllers\dashboard\roles;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laratrust\Traits\LaratrustUserTrait;

class RolesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:super_admin']);
    }
    public function index()
    {
        $roles = Role::paginate(50);
        return view('dashboard.roles.index',compact('roles'));
    }
    public function create(){
        return view('dashboard.roles.add');
    }
    public function show(){

    }
    public function edit(){

    }
    public function store(Request $request)
    {

     $validator = Validator::make($request->all(),[
         'name' => 'required',
         'description' => 'required'
     ]);
     if($validator->fails()){
         return redirect()->back()->with('error','fill inputs');
     }
        Role::create([
            'name' => $request->name,
            'display_name' => $request->name,
            'description' => $request->description
        ]);
     return redirect()->route('admin.roles.index')->with('success','The role Added Successflly');
    }

    public function destroy(){

    }
}
