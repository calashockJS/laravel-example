<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index(){
        $appURL = env('APP_URL');
        $faceData = [
            'id' =>1,
            'name' => 'Tesat name',
            'emal' => 'emailfake@gmail.com',
            'appURL' => $appURL
        ];
        return response()->json($faceData);
    }
}
