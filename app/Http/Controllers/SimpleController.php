<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index(){
        $faceData = [
            'id' =>1,
            'name' => 'Tesat name',
            'emal' => 'emailfake@gmail.com'
        ];
        return response()->json($faceData);
    }
}
