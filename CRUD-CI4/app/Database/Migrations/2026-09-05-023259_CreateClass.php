<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClass extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ),
            'class_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'class_description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('classes');
    }

    public function down()
    {
        $this->dbforge->drop_table('classes');
    }
}
