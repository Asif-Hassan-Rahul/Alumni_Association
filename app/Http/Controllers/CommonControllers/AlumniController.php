<?php

namespace App\Http\Controllers\CommonControllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return view('common_views.alumni.alumni_create')->with('user_id',$user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'buet_id' => 'required',
            'area' => 'required',
            'permanent_address' => 'required',
            'gender'=>'required',
            'dob'=>'required',
            'batch_mate_reference'=>'required',
            'country'=>'required',
            'city'=>'required',

        ]);

//        $batch = Helper::calculate_alumni_batch($request->ssc_passing_year,$request->hsc_passing_year);


        $alumni = new Alumni();
        $alumni->user_id = $request->user_id;
        $alumni->buet_id = $request->buet_id;
        $alumni->name = User::find($request->user_id)->name;
        $alumni->email = User::find($request->user_id)->email;
        $alumni->phone1 = User::find($request->user_id)->phone;
        $alumni->phone2 = $request->phone2;
        $alumni->facebook_id = $request->facebook_id;
        $alumni->linkedin_id = $request->linkedin_id;
        $alumni->batch = $request->batch;
        $alumni->permanent_address = $request->permanent_address;
        $alumni->professional_address = $request->professional_address;
        $alumni->blood_group = $request->blood_group;
        $alumni->marital_status = $request->marital_status;
        $alumni->spouse_name = $request->spouse_name;
        $alumni->spouse_professional_address = $request->spouse_professional_address;
        $alumni->number_of_child = $request->number_of_child;
        //new columns
        $alumni->gender = $request->gender;
        $alumni->dob = $request->dob;
        $alumni->batch_mate_reference = $request->batch_mate_reference;
        $alumni->profession_type = $request->profession_type;
        $alumni->designation = $request->designation;
        $alumni->working_company_name = $request->working_company_name;
        $alumni->area_of_expertise = $request->area_of_expertise;
        $alumni->area_of_interest = $request->area_of_interest;
        $alumni->country = $request->country;
        $alumni->city = $request->city;
        $alumni->area = $request->area;


        $alumni->save();

        //GETS AN INSTANCE OF THE NEW USER
        $newAlumni = User::find($request->user_id);

        $newAlumni->revokePermissionTo('user-can');
        $newAlumni->removeRole('USER');

        //GIVE THE NEW PERSON "alumni-can" PERMISSION
        $newAlumni->givePermissionTo('alumni-can');
        //GIVE THE NEW PERSON "ALUMNI" ROLE
        $newAlumni->assignRole('ALUMNI');

        return redirect()->route('manage_alumni.show',  ['manage_alumnus' => $request->user_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($manage_alumnus)
    {
        $user_id = $manage_alumnus;
        $user_data = User::find($user_id);
        $alumni_data = Alumni::where('user_id', $user_id)->first();
        $user_data = User::where('id', $user_id)->first();


        if(!$alumni_data)
            return redirect()->route('manage_alumni.create_non_resource',['user_id' => $user_id])->with('warning','Please add Your Alumni Information');

        return view('common_views.alumni.alumni_show',compact('alumni_data','user_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($manage_alumnus)
    {
        $alumni_id = $manage_alumnus;
        $alumni = Alumni::find($alumni_id);
        return view('common_views.alumni.alumni_edit',compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'buet_id' => 'required',
            'area' => 'required',
            'permanent_address' => 'required',
            'gender'=>'required',
            'dob'=>'required',
            'batch_mate_reference'=>'required',
            'country'=>'required',
            'city'=>'required',

        ]);

//        $batch = Helper::calculate_alumni_batch($request->ssc_passing_year,$request->hsc_passing_year);


        $alumni_id = $request->alumni_id;
        $alumni = Alumni::find($alumni_id);
        $alumni->user_id = $request->user_id;
        $alumni->buet_id = $request->buet_id;
        $alumni->name = User::find($request->user_id)->name;
        $alumni->email = User::find($request->user_id)->email;
        $alumni->phone1 = User::find($request->user_id)->phone;
        $alumni->phone2 = $request->phone2;
        $alumni->facebook_id = $request->facebook_id;
        $alumni->linkedin_id = $request->linkedin_id;
        $alumni->batch = $request->batch;
        $alumni->permanent_address = $request->permanent_address;
        $alumni->professional_address = $request->professional_address;
        $alumni->blood_group = $request->blood_group;
        $alumni->marital_status = $request->marital_status;
        $alumni->spouse_name = $request->spouse_name;
        $alumni->spouse_professional_address = $request->spouse_professional_address;
        $alumni->number_of_child = $request->number_of_child;
        //new columns
        $alumni->gender = $request->gender;
        $alumni->dob = $request->dob;
        $alumni->batch_mate_reference = $request->batch_mate_reference;
        $alumni->profession_type = $request->profession_type;
        $alumni->designation = $request->designation;
        $alumni->working_company_name = $request->working_company_name;
        $alumni->area_of_expertise = $request->area_of_expertise;
        $alumni->area_of_interest = $request->area_of_interest;
        $alumni->country = $request->country;
        $alumni->city = $request->city;
        $alumni->area = $request->area;


        $alumni->save();

        return back()->with('success','Success : Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAlumniFrontEnd(){
        $alumni_data = Alumni::with('user')->get();
//        $user_data = User::all();

        return view('web.alumni.alumni')->with([
           'alumni_data' => $alumni_data,
//           'user_data' => $user_data,
        ]);
    }

    public function getSingleAlumniFrontEnd($alumni_id){
        $alumni_data = Alumni::find($alumni_id)->first();

        return view('web.alumni.alumni_single')->with([
            'alumni_data'=>$alumni_data,
        ]);
    }
}
