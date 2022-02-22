<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenerateController extends Controller
{

    public function generate(Request $request)
    {
        if($request->has('generateUsername'))
        {
            if($request->username == '')
            {
                $totalUser = -1;
                $username = [];
                $dataUser = [];
                $totalData = 0;
                
            }
            else {
                $totalUser = 1;
                $username = $request->username;
                $dataUser = $this->getData($username);
                $totalData = count($dataUser);
                if($totalData === 2){
                    $totalUser = -1;
                }
                else{
                    $totalUser = 1;
                }
                
            }
        }
        else
        {
                $username = [];
                $totalUser = 0;
                $dataUser = [];
                $totalData = 0;
        }

        $result = [
            'username' => $username,
            'dataUser' => $dataUser,
            'totalUser' => $totalUser,
            'totaldata' =>$totalData
        ];
        
        return view('generate', [
            'title' => 'Generate',
            'data' => $result
        ]);
    }

    public function getData($username)
    {
        $response = Http::get('https://api.github.com/users/'.$username.'');
        $repo = Http::get('https://api.github.com/users/' . $username . '/repos');
        $datauser = $response->json();
        $datarepo = $repo->json();
        $data = [
            'data' => $datauser,
            'datarepo' => $datarepo,
            'username' => $username
        ];

        return $data;

    }
}
