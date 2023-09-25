<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    public function profile($nama = "",$kelas = "",$npm ="")
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];
        return view('profile', $data);
    }
    public function create()
    {
        $kelas = [
        [
            'id'=> 1,
            'nama_kelas'=> 'A',
        ],
        [
            'id'=> 2,
            'nama_kelas'=> 'B',
        ],
        [
            'id'=> 3,
            'nama_kelas'=> 'C',
        ],
        [
            'id'=> 4,
            'nama_kelas'=> 'D',
        ],
    ];

    $data = [
        'kelas'=> $kelas,
    ];

        return view('create_user', $data);
    }
    
    public function store()
    {
        // var_dump($this->request->getVar());
        $data = [
            'nama' => $this ->request->getVar('nama'),
            'npm' => $this ->request->getVar('npm'),
            'kelas' => $this ->request->getVar('kelas'),
           
        ];
        return view('profile',$data);
    }
}