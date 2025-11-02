<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prescription;

use App\Models\Test;

use App\Models\Medicine;

use App\Models\Recommend_test;

use App\Models\Patient;

use App\Models\User;


class Recommend_testController extends Controller
{
    public function index()
    {
          $test=test::all();
          $patient=patient::all();
          $prescription=prescription::all();
          $user=user::all();

        return view('doctor.recommended_test',compact('test','patient','prescription','user'));
    }


    public function upload_recommend(Request $request)
    {
        $rec_test=new Recommend_test;

        $rec_test->Pres_id=$request->Pres_id;
        $rec_test->doctor_id=$request->doctor_id;
        $rec_test->patient_id=$request->patient_id;
        $rec_test->recommend_test=$request->recommend_test;
        $rec_test->test1=$request->test1;
        $rec_test->test2=$request->test2;

        $rec_test->save();
        toastr()->closeButton()->addSuccess('Test Saved');
        return redirect()->back();

    }
}
