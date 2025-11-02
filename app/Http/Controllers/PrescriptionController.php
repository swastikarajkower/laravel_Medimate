<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prescription;

use App\Models\Patient;

use App\Models\User;

class PrescriptionController extends Controller
{
    public function index()
    {
        $user=user::all();
        $patient=patient::all();
        return view('doctor.prescription',compact('user','patient'));
    }

    public function upload_prescription(Request $request)
    {
        $prescription=new Prescription;

        $prescription->doctor_id=$request->doctor_id;
        $prescription->patient_id=$request->patient_id;
        $prescription->remarks=$request->remarks;

        $prescription->save();
        toastr()->closeButton()->addSuccess('Prescription Saved');
        return redirect()->back();

    }

}
