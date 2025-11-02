<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prescription;

use App\Models\Test;

use App\Models\Medicine;

use App\Models\Recommend_test;

use App\Models\Patient;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
       $patient=patient::all();
        return view('doctor.index',compact('patient')); 
    }

    // public function view_prescription()
    // {
    //      $user=user::all();
    //      $patient=patient::all();
    //     return view('doctor.prescription',compact('user,patient'));
    // }

    // public function upload_prescription(Request $request)
    // {
    //     $prescription=new Prescription;

    //     $prescription->Prescription_no=$request->Prescription_no;
    //     $prescription->doctor_id=$request->doctor_id;
    //     $prescription->patient_id=$request->patient_id;
    //     $prescription->remarks=$request->remarks;

    //     $prescription->save();
    //     toastr()->closeButton()->addSuccess('Prescription Saved');
    //     return redirect()->back();

    // }

    // public function recommend()
    // {
    //       $test=test::all();
    //       $patient=patient::all();
    //       $prescription=prescription::all();
    //       $user=user::all();

    //     return view('doctor.recommended_test',compact('test','patient','prescription','user'));
    // }

    // public function upload_recommend(Request $request)
    // {
    //     $rec_test=new Recommend_test;

    //     $rec_test->Pres_id=$request->Pres_id;
    //     $rec_test->doctor_id=$request->doctor_id;
    //     $rec_test->patient_id=$request->patient_id;
    //     $rec_test->recommend_test=$request->recommend_test;

    //     $rec_test->save();
    //     toastr()->closeButton()->addSuccess('Test Saved');
    //     return redirect()->back();

    // }

    public function medicine()
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

    //  public function view_prescription($id)
    //  {
    //      $prescription=prescription::find($id);
    //      $test=test::find($id);
    //      $medicine=medicine::find($id);
    //      return view('doctor/view_prescription',compact('prescription,test,medicine'));
    //  }

}

