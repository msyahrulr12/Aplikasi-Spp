<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Petugas extends CI_Migration {
    
    public function up()
    {
        $this->dbforge->add_field([
            'id_petugas' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '32',
            ],
            'nama_petugas' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'level' => [
                'type' => 'ENUM("admin", "petugas")',
            ],
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('petugas');
    }

    public function down()
    {
        $this->dbforge->drop_table('petugas');
    }
}