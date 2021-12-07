<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestLaravel extends Controller
{
    public function index(){
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $data = json_decode(file_get_contents($url));
        // print_r($data[1]->id);die;
        $data2 = array();
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]->id%2==1) {
                $data2[] = $data[$i];
            }
        }
        echo json_encode($data2);die;
    }
    
}
