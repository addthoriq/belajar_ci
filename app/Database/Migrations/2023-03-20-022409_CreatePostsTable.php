<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type' => 'INT',
          'constraint' => 5,
          'unsigned' => true,
          'auto_increment' => true
        ],
        'judul' => [
          'type' => 'VARCHAR',
          'constraint' => 30
        ],
        'isi' => [
          'type' => 'TEXT',
          'constraint' => 255
        ],
      ]);
      $this->forge->addKey('id', true, true);
      $this->forge->createTable('posts');
    }

    public function down()
    {
      $this->forge->dropTable('posts');
    }
}
