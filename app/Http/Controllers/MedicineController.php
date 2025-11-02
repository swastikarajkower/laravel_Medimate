<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prescription;

use App\Models\Test;

use App\Models\Medicine;

use App\Models\Recommend_test;

use App\Models\Patient;

use App\Models\User;

class MedicineController extends Controller
{
    public function index()
    {   
        $patient=patient::all();
         $prescription=prescription::all();
         $user=user::all();

        return view('doctor.view_medicine',compact('patient','prescription','user'));
    
    }


    public function upload_medicine(Request $request)
    {
        $medicine=new Medicine;

        $medicine->Pres_id=$request->Pres_id;
        $medicine->doctor_id=$request->doctor_id;
        $medicine->patient_id=$request->patient_id;
        $medicine->medicine=$request->medicine;

        $medicine->save();
        toastr()->closeButton()->addSuccess('Medicine Saved');
        return redirect()->back();


    }
}
