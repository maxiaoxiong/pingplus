<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/charge/pay','OrdersController@handleOrder');
Route::get('/charge/paid','OrdersController@OverOrder');

Route::get('/image',function(){
    $img = Image::canvas(800,600,'#ff0000');
    $response = response()->make($img->encode('png'));
    $response->header('Content-Type','image/png');
    return $response;
});

Route::get('/path',function(){
   return public_path('dish');
});
//
//Route::group(['prefix'=>'image'],function(){
//    Route::get('view',function(){
//       return view('test.image');
//    });
//    Route::post('upload',function(\Illuminate\Http\Request $request){
////        return $request->file('pic');
//        if($request->hasFile('pic')){
////            return 'success';
//            Image::make($request->file('pic'))->resize(300,200)->save('uploads/foo.jpg');
////            $request->hasFile('pic')->save('uploads/');
//        }else{
//            return "failed";
//        }
//    });
//});

Route::get('time',function(){
    return \App\Dish::find(1)->window->canteen->windows;
//    return \App\Order::find(1)->tastes;
//    return \Carbon\Carbon::createFromDate()->startOfWeek();
//    return \App\Order::find(1)->created_at->today();
//    echo \Carbon\Carbon::createFromDate()->isWeekday();
//    echo \App\Order::find(1)->created_at->isYesterday();
//    return \Carbon\Carbon::createFromDate()->toDateString();
});
Route::get('comment','CommentsController@index');