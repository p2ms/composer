<?php

namespace App\Controllers;

use App\Controllers\BaseController;
include 'formLivro.php';

class Livro extends BaseController
{
    public function index()
    {
        echo view('formLivro.php');
    }
}
