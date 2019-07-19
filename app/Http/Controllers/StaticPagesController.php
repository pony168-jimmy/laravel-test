<?php

namespace App\Http\Controllers;
use App\Vocabulary;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }

    public function test(){
        $q = 'foundation';
        $app_key = '26ed0c5c46587d77';
        $salt = '_key_';
        $key = '2arfjnv1kxbVZKy2QnSUKJ1R2X1C8qkF';
        $time = time();
        $hash_key = "{$app_key}{$q}{$salt}{$time}{$key}";
        $response = Curl::to('https://openapi.youdao.com/api')
        ->withData(array(
            'q'=> $q,
            'from'=> 'auto',
            'to'=> 'auto',
            'appKey'=> $app_key,
            'salt'=> $salt,
            'sign'=> hash('sha256',$hash_key),
            'signType'=> 'v3',
            'curtime'=> $time,
        ))
        ->post();
        return $response;
        // return view('static_pages/test');
    }
}
