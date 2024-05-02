<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (isset($user)) {
            if ($user->role_id == 1 || $user->role_id ==2 ) {
                # code...
                return $next($request);
            } else {
                return redirect(route('office.auth.login'))->withErrors(['msg' => "Vous n'êtes pas autorisés à acceder à cette page"]);
            }
        }
        return redirect(route('office.auth.login'));
    }
}
