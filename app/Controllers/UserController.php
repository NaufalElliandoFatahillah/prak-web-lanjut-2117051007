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
        return view('create_user');
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