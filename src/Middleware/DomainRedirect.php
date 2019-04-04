<?php

namespace Devfaysal\LaravelDomainRedirect\Middleware;


use Closure;

class DomainRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(config('laravel-domain-redirect.redirect') == true){

            return redirect(config('laravel-domain-redirect.redirect_to') . '/' .$request->path(),  config('laravel-domain-redirect.redirect_status_code'));

        }
        
        return $next($request);
    }
}
