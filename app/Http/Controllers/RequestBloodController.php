<?php

namespace App\Http\Controllers;

use App\Models\DonationForm;
use Illuminate\Http\Request;

class RequestBloodController extends Controller
{
    public function index(){
        return view('blood_donate');
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address'=>'required',
            'blood_type'=>'required',
            'phone' => 'required',
        ]);

        $bloodDonate = DonationForm::create($data);

        return redirect()->back()->with('success','Blood Donate Request Successfully');
    }


    public function adminBloodReq(){
        $bloods = DonationForm::get();
        return view('admin.blood_donate',compact('bloods'));
    }
}
