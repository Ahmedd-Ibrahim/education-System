<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\ProofRequest;
use App\models\front\Proof;
use Illuminate\Http\Request;

class ProofController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['permission:show website'])->only(['index']);
        $this->middleware(['permission:store website'])->only(['create','store']);
        $this->middleware(['permission:update website'])->only(['update','edit']);
        $this->middleware(['permission:delete website'])->only(['destroy']);
    }

    public function index()
    {
        $proofs = Proof::paginate(40);
        return view('website.proof.index',compact('proofs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.proof.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProofRequest $request)
    {
        $data = $request->all();

        if(is_file($request->image))
        {
            $data['image'] = UploadImage('proof',$request->image);
        }

        Proof::create($data);

        return redirect()->route('admin.front.proof.index')->with('success','Proof added Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function show(Proof $proof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function edit(Proof $proof)
    {
        return view('website.proof.edit',compact('proof'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\Proof  $proof
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, Proof $proof)
    {
        $data = $request->all();

        if(is_file($request->image))
        {
            if($proof->image)
            {
                DeleteImage('/style/front/image/'.$proof->image);

            }
            $data['image'] = UploadImage('proof',$request->image);
        }

        $proof->update($data);

        return redirect()->route('admin.front.proof.index')->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proof $proof)
    {
        if(!$proof)
        {
            return redirect()->back();
        }
        if($proof->image)
            {
                DeleteImage('/style/front/image/'.$proof->image);

            }
        $proof->delete();
        return redirect()->back()->with('success','Deleted successfully');
    }
}
