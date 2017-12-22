<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Comdel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        $is = DB::delete('delete from DS_Comtype where id = '.Input::get("id").'' );
        if ($is === false){
            return ['state' =>'error'];
        }
        return ['state' =>'success'];

    }
}


