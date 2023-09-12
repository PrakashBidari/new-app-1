<?php

namespace App\Http\Controllers;

use App\Models\DonationForm;
use App\Models\RequestForm;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    public function index(){
        return view('request_blood');
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address'=>'required',
            'blood_type'=>'required',
            'phone' => 'required',
        ]);

        $bloodDonate = RequestForm::create($data);

        return redirect()->back()->with('success','Blood Request Successfully');
    }


    public function adminBloodReq(){
        $bloods = RequestForm::get();
        return view('admin.blood_request',compact('bloods'));
    }
}
