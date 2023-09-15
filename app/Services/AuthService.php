<?php

namespace App\Services;

use App\Models\CvProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function formLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function loginAdmin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where(['email' => $email], ['password' => $password])->first();

        if(Auth::attempt(['email' => $user->email, 'password' => $request->password])){
            if($user->role_id == 1){
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }
            if($user->role_id == 2){
                $request->session()->regenerate();
                return redirect()->route('user.dashboard');
            }
        }else{
            return redirect()->route('admin.form.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('admin.form.login');
    }

    public function formRegisterUser()
    {
        return view('user.auth.register');
    }

    public function registerUser(Request $request)
    {
        $record = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        CvProfile::create([
            "user_id" => $record->id,
            "is_new" => 1,
            "is_updated" => 1
        ]);

        return redirect()->route('admin.form.login')->with(['success' => 'Kategori berhasil ditambahkan']);
    }
}
