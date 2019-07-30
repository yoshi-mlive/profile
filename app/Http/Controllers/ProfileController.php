<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    //
    public function index(){
        return view('profiles.profile');
    }

    public function register(ProfileRequest $request) {
        Log::debug($request->all());

        //リクエストデータをセット
        
        

        return view('profiles.profile', ['status' => true]);
    }
}
