<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
  public function up()
  {
    $fields = [
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'nama' => [
        'type' => 'VARCHAR',
        'constraint' => 100
      ],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true, true);
    $this->forge->createTable('users');
  }

  public function down()
  {
      $this->forge->dropTable('users');
  }
}
