<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Response;
use Session;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        {
            if (Auth::check()) {
                // Status checking 
                if(Auth::user()->status == 'inactive'){
                    Auth::logout();
                    $notification = array(
                        'message' => 'Uw account uitgeschakeld!',
                        'alert-type' => 'fout'
                    );
                    return redirect()->route('customer.loginform')->with($notification);
                }
    
                if (Auth::user()->status == 'active' && Auth::user()->Userrole[0]->id === 3) {
                    return $next($request);
                }
                else{
                    Auth::logout();
                    $notification = session()->flash("fout", "Sorry! Je bent geen klant.");
                    return redirect()->route('customer.loginform')->with($notification);
                }
            }
            else {
                $notification = session()->flash("error", "Er is iets mis!");
                Auth::logout();
                return redirect()->route('customer.loginform')->with($notification);
            }
            
            //if not user 
            // return back()->with('error', 'You\'re not authenticate user');
            
        }
    }
}
