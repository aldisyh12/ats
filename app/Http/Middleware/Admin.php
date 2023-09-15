<?php

namespace App\Http\Middleware;

use App\Models\RoleUsers;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('id', auth()->user()->id)->first();

        if($user != null){
            if($user->role_id !== 1){
                return redirect()->route('admin.form.login');
            }else{
                return $next($request);
            }
        }else{
            return redirect()->route('admin.form.login');
        }
    }
}
