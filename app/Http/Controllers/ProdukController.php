<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Providers\ShinServiceProvider as Shin;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->produk = new Produk();
        $this->shin = new Shin();
    }

    public function index()
    {
    }
}
