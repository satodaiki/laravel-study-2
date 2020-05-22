<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $req) {
        $data = [
            'msg'=>$req->hello,
        ];
        return view('hello.index', $data);
    }

    public function other(Request $req) {
        $data = [
            'msg' =>$req->bye,
        ];
        return view('hello.index', $data);
        // return redirect()->route('hello');
    }

    // public function index($id) {
    //     $data = [
    //         'msg' => 'id = ' . $id,
    //     ];
    //     return view('hello.index', $data);
    // }
}
