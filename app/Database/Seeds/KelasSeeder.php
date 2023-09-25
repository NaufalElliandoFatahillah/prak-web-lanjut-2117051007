<?php

namespace App\Database\Seeds;

use App\Models\KelasModel;
use CodeIgniter\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasModel = new KelasModel();

        $kelas = $kelasModel->save([
            "nama_kelas"=> "A",
        ]);
        $kelas = $kelasModel->save([
            "nama_kelas"=> "B",
        ]);
        $kelas = $kelasModel->save([
            "nama_kelas"=> "C",
        ]);
        $kelas = $kelasModel->save([
            "nama_kelas"=> "D",
        ]);
    }
}
