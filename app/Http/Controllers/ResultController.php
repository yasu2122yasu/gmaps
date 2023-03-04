<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function currentLocation(Request $request, Post $spot){
        
        $lat = $request->lat;
        $lng = $request->lng;
        
        //currentLocationで表示
        return view('posts.currentLocation',[
            //現在地緯度latをbladeへ渡す
            'lat' => $lat,
            //現在地経度lngをbladeへ渡す
            'lng' => $lng,
            
            //DBの位置情報をbladeへ渡す
            'spots' => $spot->get(),
        ]);
    }
}
