<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
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
            'Shop_name' =>'required',
            'photo' =>'required',
            'account_holder' =>'required',
            'account_number' =>'required',
            'city' =>'required',
            'Bank_name' =>'required',
            'Branch_name' =>'required',
        ]);
        // $data = $request->except('photo');
        if($request->file('photo')){
            $name = time().'.'. $request->photo->extension();
            $request->photo->move(public_path('/CustomersPhoto/'), $name);
        }
        // $data['photo'] = $name;
        // Employee::create($data);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->gender = $request->gender;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->Shop_name = $request->Shop_name;
        $customer->photo = $name;
        $customer->account_holder = $request->account_holder;
        $customer->account_number = $request->account_number;
        $customer->city = $request->city;
        $customer->Bank_name = $request->Bank_name;
        $customer->Branch_name = $request->Branch_name;
        $customer->save();
        return redirect(route('customer.index'))->with('success','Customer Added Successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer ::find($id);
         if($customer){
         $photoDelete = public_path('/CustomersPhoto/'.$customer->photo);
         if(File::exists($photoDelete)){
            File::delete($photoDelete);
           }
        }
        $customer->delete();
        return redirect(route('customer.index'))->with('warning','employee deleted successfully');

     }
}

