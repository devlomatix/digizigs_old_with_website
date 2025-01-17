<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class MailgunInbound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $nexts
     * @return mixed
     */
    public function handle($request, Closure $next) {

      return $next($request);

      

        if (!$request->isMethod('post')) {
            abort(Response::HTTP_FORBIDDEN, 'Only POST requests are allowed.');
        }

        if ($this->verify($request)) {
            return $next($request);
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    protected function buildSignature($request)
    {
        return hash_hmac(
            'sha256',
            sprintf('%s%s', $request->input('timestamp'), $request->input('token')),
            config('services.mailgun.secret')
        );
    }

    protected function verify($request)
    {
        if (abs(time() - $request->input('timestamp')) > 15) {
            return false;
        }

        return $this->buildSignature($request) === $request->input('signature');
    }
}
