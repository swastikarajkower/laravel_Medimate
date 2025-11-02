<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Recommend_test;
use App\Models\Medicine;
use App\Models\Prescription;

class View_prescriptionController extends Controller
{
    public function index($id)
    {
        $patient=patient::find($id);
        // $currentTimestamp = now(); // Get the current timestamp
        $pres=prescription::where('patient_id',$id)->latest('date') 
        ->first();
    ;

        $test = recommend_test::where('patient_id', $id)
    ->latest('Test_date') 
    ->first();


        $med=medicine::where('patient_id',$id)->first();

        
        return view('user.view_prescription',compact('patient','test','med','pres'));
    }
}
