<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemoveCategoriesVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check if the response is a view response
        if ($response instanceof \Illuminate\View\View) {
            // Get the original view data
            $data = $response->getData();

            // Remove the 'categories' key from the view data
            unset($data['categories']);

            // Set the modified data back to the response
            $response->setData($data);
        }

        return $response;
    }
}
