<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAcademicYearIsSet
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Skip the check for academic-years and notices routes to prevent redirect loops
        if ($request->routeIs('academic-years.*') || $request->routeIs('notices.*')) {
            return $next($request);
        }
        
        if (!$request->user()->school->academicYear) {
            return redirect()->route('academic-years.index')
                ->with('warning', 'Please set an academic year before proceeding.');
        }

        return $next($request);
    }
}
