<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException as AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof \Illuminate\Auth\AuthenticationException)
        {
            return redirect('/')->with('flash', 'Debes iniciar sesión primero para poder acceder a nuestro sistema :)');
        }

        if ($exception instanceof MethodNotAllowedHttpException)
        {
            return redirect('/')->with('rwl', 'Si necesitas ayuda adicional contacta a nuestro administrador.');
        }

        if ($exception instanceof HttpException)
        {
            return Redirect::back()->with('denied','No tienes los permisos suficientes para poder acceder a la pagina solicitada.');
        }

        return parent::render($request, $exception);
    }
}
