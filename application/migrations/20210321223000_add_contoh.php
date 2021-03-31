<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Contoh extends CI_Migration {
    
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ],
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('contoh');
    }

    public function down()
    {
        $this->dbforge->drop_table('contoh');
    }
}