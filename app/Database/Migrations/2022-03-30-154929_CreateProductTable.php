<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "name" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "category" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "price" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "stock" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('products', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('products', true); //If Exists drop table products
    }
}