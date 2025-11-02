<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Test;
use App\Models\Medicine;
use App\Models\Prescription;

class UserController extends Controller
{
    public function add_patient()
    {
       
        return view('user.add_patient');
    }

    public function upload(Request $request)
    {
        $patient=new Patient;

        $patient->name=$request->name; 
        $patient->lname=$request->lname;
        $patient->sex=$request->sex;
        //$patient->dob=$request->dob;
        $patient->address=$request->address;
        $patient->category=$request->category;
        $patient->phone=$request->phone;
        $patient->age=$request->age;
        
        $patient->save();

        toastr()->closeButton()->addSuccess('Patient added successfully');

        return redirect()->back();

       

    }


    public function add_test()
    {
        return view('user.add_test');


    }


    public function upload_test(Request $request)
    {
        $test=new Test;

        $test->test_name=$request->test_name;

        
        $test->save();

        toastr()->closeButton()->addSuccess('Added successfully');

        return redirect()->back();

    }

    public function view_patient()
    {
        $patient=patient::all();
        return view('user.view_patient',compact('patient'));
    }

    

   
}
