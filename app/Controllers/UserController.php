<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;
    public function __construct() 
    {
        $this->userModel = new UserModel ();
        $this->kelasModel = new KelasModel ();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser(),
        ];
        return view ('list_user', $data);
    }

    public function show($id)   
    {
        $user = $this->userModel->getUser($id);
        $data = [
            'title' => 'profile user',
            'user' => $user,
        ];

        return view('profile',$data);
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
        // $kelasModel = new KelasModel();
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title'=> "Tambah User",
            'kelas' => $kelas,
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
            ],
            'foto' => [
                'rules'         => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',

                'errors'        => [
                    'uploaded'  => '{field} Foto harus dipilih.',
                    'is_image'  => '{field} Yang anda pilih bukan gambar.',
                    'mime_in'   => '{field} Foto harus berekstensi png,jpg,jpeg,gif.'
                ]
            ]
        ])) {
        $validationErrors = $this->validator->getErrors();
            foreach ($validationErrors as $field => $error) {
                session()->setFlashdata('error_' . $field, $error);
            }
            return redirect()->to('/user/create')->withInput();
        }
        $path = 'assets/uplouds/img/';
            $foto = $this->request->getFile('foto');
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto = base_url($path . $name);
            }

        // var_dump($this->request->getVar());
        $userModel = new UserModel();
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto'=> $foto
        ]);

        return redirect()->to('/user');
        // $data = [
        //     'nama' => $this ->request->getVar('nama'),
        //     'npm' => $this ->request->getVar('npm'),
        //     'kelas' =>$this ->request->getVar('kelas'),
            
        // ];
        // return view('profile',$data);
    }
}