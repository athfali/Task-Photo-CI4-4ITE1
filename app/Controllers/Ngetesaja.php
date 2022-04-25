<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Cobain dong li!",
            "name" => "Athfali",
            "umur" => "20 tahun"
        ];

        echo view('index', $data);
    }
}