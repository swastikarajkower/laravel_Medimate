<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class View_PatController extends Controller
{
    public function index($id)
    {
        $patient=patient::find($id);
        return view('user.view_pat',compact('patient'));
    }
}
