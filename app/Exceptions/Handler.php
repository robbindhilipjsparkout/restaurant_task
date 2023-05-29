<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Exceptions\PostTooLargeException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //sssssssssssssssssssssssssssssss
        });
    }

// /    public function render($request, Exception $exception)
// {
//     if ($exception instanceof PostTooLargeException) {
//         return redirect()->back()->withInput()->withErrors('The uploaded file exceeds the maximum allowed size.');
//     }

//     return parent::render($request, $exception);


// }

// ...

public function render($request, Throwable $exception)
{
    if ($exception instanceof PostTooLargeException) {
        return redirect()->back()->withInput()->with('error', 'The uploaded file exceeds the maximum allowed size.');
    }

    return parent::render($request, $exception);
}


}
