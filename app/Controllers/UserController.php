<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

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
        'validation' => \Config\Services::validation()

    ];

        return view('create_user', $data);
    }
    
    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.',
                    'is_unique' => '{field} mahasiswa sudah terdaftar.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/user/create'))->withInput()->with('validation', $validation);
        }
        // var_dump($this->request->getVar());
        $userModel = new UserModel();
        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);
        $data = [
            'nama' => $this ->request->getVar('nama'),
            'npm' => $this ->request->getVar('npm'),
            'kelas' => $this ->request->getVar('kelas'),
           
        ];
        return view('profile',$data);
    }
}