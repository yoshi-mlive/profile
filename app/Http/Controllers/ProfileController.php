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

        $input = $request->all();

        //エラーチェック
        $rules =  [
            //'photo' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_name' => 'required',
            'hobby' => 'required',
            'career' => 'required',
            'sex' => 'required'
        ];

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }


        //リクエストデータをセット

        //データを登録
        
        
        

        return view('profiles.profile', ['status' => true]);
    }
}
