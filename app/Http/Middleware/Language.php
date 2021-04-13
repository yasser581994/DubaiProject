<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! in_array(request()->segment(1), ['en', 'ar'])) {
            return redirect()->to('/en');
        }

        if ($request->lang <> '') {
            app()->setLocale($request->lang);

        } else {

            app()->setLocale('en');
            return redirect()->to('/en');
        }

        return $next($request);

    }
}
