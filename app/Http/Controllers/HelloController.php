<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    private $fname;

    function __construct() {
        // config(['sample.message' => '新しいメッセージ！']);
        // $this->fname = 'sample.txt';
        $this->fname = 'hello.txt';
    }

    public function index() {
        // $data = [
        //     'msg'=>$person,
        // ];
        // return view('hello.index', $data);

        // $sample_msg = Storage::disk('public')->url($this->fname);
        // $sample_data = Storage::disk('public')->get($this->fname);

        // $url = Storage::disk('public')->url($this->fname);
        // $size = Storage::disk('public')->size($this->fname);
        // $modified = Storage::disk('public')->lastModified($this->fname);
        // $modified_time = date('Y-m-d H:i:s', $modified);
        // $sample_keys = ['url', 'size', 'modified'];
        // $sample_meta = [$url, $size, $modified_time];
        // $result = '<table><tr><th>' . implode('</th><th>', $sample_keys) . '</th></tr>';
        // $result .= '<tr><td>' . implode('</td><td>', $sample_meta) . '</td></tr></table>';

        // $sample_data = Storage::disk('public')->get($this->fname);

        $dir = '/';
        $all = Storage::disk('mac')->allfiles($dir);

        $data = [
            'msg' => 'DIR: ' . $dir,
            'data' => $all
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request) {
        // $data = [
        //     'msg' =>$req->bye,
        // ];
        // return view('hello.index', $data);
        // return redirect()->to('/sample');

        // $data = Storage::get($this->fname) . PHP_EOL . $msg;
        // Storage::put($this->fname, $data);
        // Storage::disk('public')->append($this->fname, $msg);

        // if (Storage::disk('public')->exists('bk_'.$this->fname)) {
        //     Storage::disk('public')->delete('bk_'.$this->fname);
        // }
        // Storage::disk('public')->copy($this->fname, 'bk_'.$this->fname);

        // if (Storage::disk('local')->delete('bk_'.$this->fname)) {
        //     Storage::disk('local')->delete('bk_'.$this->fname);
        // }
        // Storage::disk('local')->move('public/bk_'.$this->fname, 'bk_'.$this->fname);

        // return redirect()->to('/hello');

        // return Storage::disk('public')->download($this->fname);

        // Storage::disk('local')->putFile('files', $request->file('file'));

        $ext = '.'.$request->file('file')->extension();
        Storage::disk('public')->putFileAs('files', $request->file('file'), 'uploaded'.$ext);

        return redirect()->to('/hello');
    }

    // public function index($id) {
    //     $data = [
    //         'msg' => 'id = ' . $id,
    //     ];
    //     return view('hello.index', $data);
    // }

    public function get_config_value() {

    }
}
