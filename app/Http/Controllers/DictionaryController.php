<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function translate(Request $request)
    {
        $word = $request->word;
        $array = array(
            'yellow' => 'vàng',
            'green' => 'xanh lá',
            'red' => 'đỏ'
        );
        $select = $request->select;
        switch ($select) {
            case 'Vie':
                foreach ($array as $key => $value) {
                    if ($word == $key) {
                        $result = $value;
                        break;
                    } else {
                        $result = 'Không có trong từ điển';
                    }
                }
                return view('result', compact('result', 'word'));
            case 'Eng':
                foreach ($array as $key => $value) {
                    if ($word == $value) {
                        $result = $key;
                        break;
                    } else {
                        $result = 'Không có trong từ điển';
                    }
                }
                return view('result', compact('result', 'word'));
        }

    }
}
