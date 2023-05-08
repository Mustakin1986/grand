<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>'required',
            'email' =>'required',
            'gender'=>'required',
            'phone'=>'required',
            'address' =>'required',
            'experience' =>'required',
            'photo' =>'required',
            'salary' =>'required',
            'vacation' =>'required',
            'city' =>'required',
            'nid_no' =>'required'
        ]);
        // $data = $request->except('photo');
        if($request->file('photo')){
            $name = time().'.'. $request->photo->extension();
            $request->photo->move(public_path('/photo/'), $name);
        }
        // $data['photo'] = $name;
        // Employee::create($data);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->experience = $request->experience;
        $employee->photo = $name;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;
        $employee->nid_no = $request->nid_no;
        $employee->DateOfBirth = $request->DateOfBirth;
        $employee->save();
        return redirect(route('employee.index'))->with('success','Employee Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->experience = $request->experience;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;
        $employee->nid_no = $request->nid_no;
        $employee->DateOfBirth = $request->DateOfBirth;
        if(isset($request->photo)){
          if( $employee->photo && file_exists('photo/'.$employee->photo)){
            unlink('photo/'. $employee->photo);
           }
           $updatePhoto = time().'.'.$request->photo->extension();
          $request->photo->move(public_path('/photo/'),$updatePhoto);

            $employee->photo = $updatePhoto;
        }
        $employee->update();
        return redirect(route('employee.index'))->with('success','Employee Added Successfully');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    // $employee = Employee::where('id',$id)->first();
       $employee = Employee::find($id);
       if($employee){
        $photoDelete = public_path('/photo/'.$employee->photo);
        if(File::exists($photoDelete)){
           File::delete($photoDelete);
        }
    }
       $employee->delete();
       return redirect(route('employee.index'))->with('success','employee deleted successfully');

    }
}
