<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Category;

class CategoryController extends Controller
{
    protected $title = 'Data Kategori';
    protected $add = 'Tambah';
    protected $edit = 'Edit';
    public function index()
    {
        $data = [
            'title' => $this->title,
            'kategori' => Category::all()
        ];
        return view('kategori.list', $data);
    }

    public function create()
    {
        $data = [
            'title' => "{$this->add} {$this->title}",
        ];
        return view('kategori.add', $data);
    }

}
