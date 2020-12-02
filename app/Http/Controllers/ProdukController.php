<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Providers\ShinServiceProvider as Shin;
use App\Category;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    protected $main = 'Produk';
    protected $add = 'Tambah';
    protected $edit = 'Edit';
    protected $title = ' Data Produk';
    public function __construct()
    {
        $this->produk = new Produk();
        $this->shin = new Shin();
        $this->kategori = new Category();
    }

    public function index()
    {
        $data = [
            'produk' => $this->produk->getData(),
            'title' => $this->title,
        ];
        return view('produk.list', $data);
    }

    public function create()
    {
        $data = [
            'kategori' => $this->kategori->getData(),
            'title' => $this->add . $this->title,
            'main' => $this->main
        ];
        return view('produk.add', $data);
    }

    public function store(Request $post)
    {
    }
}
