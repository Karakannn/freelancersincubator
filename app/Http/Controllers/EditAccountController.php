<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EditAccountController extends Controller {

    public function index() {
        return view('edit');
    }
    
    public function edit(Request $request) {
        $user_id = Auth::id();
        DB::table('users')
            ->where('id', $user_id)
            ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone
                    ]);

        return redirect()->back()->with('a_message', 'Profile Data Updated!');
    }
    
    public function editpassword(Request $request) {

        if (strlen($request->password) < 6 || strlen($request->password_confirmation) < 6) {
            return redirect()->back()->with('p_message_error', 'The password must be at least 6 characters.');
        }
        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('p_message_error', 'The password confirmation does not match.');
        }
        $user_id = Auth::id();
        DB::table('users')
            ->where('id', $user_id)
            ->update([
                    'password' => bcrypt($request->password)
                    ]);

        return redirect()->back()->with('p_message', 'Password Updated!');
    }
}
