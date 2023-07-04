<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up(){
      $this->forge->addField([
        'id'        => [
          'type'            => 'INT',
          'constraint'      => 5,
          'unsigned'        => true,
          'auto_increment'  => true,
        ],
        'name'      => [
          'type'            => 'VARCHAR',
          'constraint'      => '255',
        ],
        'email'      => [
          'type'            => 'VARCHAR',
          'constraint'      => '80',
          'unique'          => true,
        ],
        'phone'      => [
          'type'            => 'VARCHAR',
          'constraint'      => '14',
          'null'          => true,
        ],
        'password'   => [
          'type'            => 'VARCHAR',
          'constraint'      => '50',
        ],
        'gender'     => [
          'type'            => 'VARCHAR',
          'constraint'      => '20',
          'null'            => true
        ],
      ]);
      // set id sebagai primary key
      $this->forge->addKey('id', TRUE);
      // create table users
      $this->forge->createTable('users', TRUE);
    }

    public function down(){
      // drop table users
      $this->forge->dropTable('users');
    }
}
