<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function getAccount()
    {

        return view('backend.account')->with('admin', User::where('rule','admin')->first());
    }

    public function editAccount(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if ($validator->fails())
            return redirect()->back()->with('fail', $validator->errors()->first());
        $admin = User::where('rule','admin')->first();
        $oldPassword = $request->old_password;
        $matchNewPass = Hash::check($oldPassword, $admin->password);

        if ($matchNewPass) {

             $admin->update([
                'notifyMail' => $request->notifyEmail,
                'email' => $request->email,
                'phone' => $request->phone,
                'from_email' => $request->from_email,
            ]);



            return redirect()->back()->with('success', 'Admin Credentials have been Edited successfully');
        }
        return redirect()->back()->with('fail', 'old password is not correct');


    }

    public function editAdminPassword(Request $request)
    {

        $admin = User::first();
        $oldPassword = $request->old_password;
        $matchNewPass = Hash::check($oldPassword, $admin->password);
        $confirmedPasswords = ($request->newPassword === $request->confirm_new_password ? true : false);
        if (!$confirmedPasswords)
            return redirect()->back()->with('fail', 'notConfirmed !');
        else if (!$matchNewPass)
            return redirect()->back()->with('fail', 'old password not Matched !');
        elseif ($request->newPassword == null)
            return redirect()->back()->with('fail', 'nullPassword');

        else {
            $admin->update([
                'password' => Hash::make($request->newPassword)
            ]);
            return redirect()->back()->with('success', 'password has been edited');
        }
    }


    protected function rules()
    {
        return [
            'notifyEmail'=>'required' ,
            'email'=>'required|email' ,
            'phone'=>'required|numeric|min:6' ,
            'old_password'=>'required'
        ];

    }

}
