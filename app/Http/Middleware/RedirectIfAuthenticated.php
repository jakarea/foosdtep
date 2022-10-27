<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use Session;

class RedirectIfAuthenticated {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards) {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->status == 'active' && Auth::user()->Userrole[0]->id == 1) {
                    $notification = session()->flash("success", "Login Successfull.");
                    return redirect(RouteServiceProvider::HOME)->with($notification);
                }
                else {
                    Auth::logout();
                    $notification = session()->flash("error", "Sorry! You\'re not Admin.");
                    return redirect()->route('customer.loginform')->with($notification);
                }

            }
        }

        return $next($request);
    }
}
