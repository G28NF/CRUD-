<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class AddEnderecoUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addColumn('usuarios',[
            'cep' => [
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => false
            ],
            'logradouro' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'numero' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false
            ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true
            ],
            'bairro' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'uf' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => false
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('usuarios', ['cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'uf']);
    }
}