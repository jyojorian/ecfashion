<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartSession
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
        if (!Session::has('cart')) {
            $cart = Cart::create();
            Session::put('cart', $cart->id);
        }
        return $next($request);
    }
}
