<?php

namespace App\Http\Middleware;
use DB;
use Closure;

class HeaderApi
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
      $app_id      = $request->header('appid');
      $app_devid   = $request->header('appdevid');
      $app_latlon  = $request->header('applatlon');
      $app_token   = $request->header('apptoken');
      // $user_id  = $request->header('user_id');

      if(!isset($app_id, $app_devid, $app_token)){
        return response()->json(array('error'=>'true','error_msg'=>'bad request'));
      }

      $user_id  = DB::table('users')->select('id')->get();
      if($app_id == 'KanZan'){
        return $next($request);
      } else {
        return response()->json(array('error'=>'true', 'error_msg'=>'request unrecognized'));
      }
    }
}
