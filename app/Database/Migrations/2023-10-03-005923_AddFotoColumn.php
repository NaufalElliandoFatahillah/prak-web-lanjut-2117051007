<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFotoColumn extends Migration
{
    public function up()
    {
        $this->forge->addColumn('user',[
            'foto'=> [
                'type'=> 'VARRCHAR',
                'constraint'=> 255,
                'null'=> true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('user',['foto']);
    }
}
