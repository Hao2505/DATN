<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonationInfomation;

class DonationInfomationController extends Controller
{
    public function edit(){
        $info = DonationInfomation::where('id', 1)->first();
        return view('backend.donationInfomation.edit', compact('info'));
    }

    public function postedit(Request $request){
        $info = DonationInfomation::where('id', 1)
              ->update([
                  'title' => $request->title,
                  'abbot_phone' => $request->abbot_phone,
                  'office_phone' => $request->office_phone,
                  'secretary_phone' => $request->secretary_phone,
                  'email' => $request->email,
                  'address' => $request->address,
                  'Bank_account' => $request->Bank_account,
                  'Bank_number' => $request->Bank_number,
                  'Bank_nane' => $request->Bank_name,
                ]);

        $info = DonationInfomation::where('id', 1)->first();
        return view('backend.donationInfomation.edit', compact('info'));
    }
}
