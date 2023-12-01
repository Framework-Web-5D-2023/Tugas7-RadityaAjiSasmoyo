<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'nama' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'npm' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'prodi' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'minat' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
        'null' => TRUE,
      ],
      'domisili' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
        'null' => TRUE,
      ],
      'jenis_kelamin' => [
        'type'       => 'VARCHAR',
        'constraint' => '1',
        'null' => TRUE,
      ],
      'image' => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
        'null' => TRUE,
      ],
      'created_at' => [
        'type'       => 'date',
        'null' => TRUE,
      ],
      'updated_at' => [
        'type'       => 'date',
        'null' => TRUE,
      ],
      'deleted_at' => [
        'type'       => 'date',
        'null' => TRUE,
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('mahasiswa');
  }

  public function down()
  {
    $this->forge->dropTable('mahasiswa');
  }
}
