<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ShinServiceProvider as Shin;
use App\Category as Category;

class CategoryController extends Controller
{
    public $title = 'Data Kategori';
    protected $add = 'Tambah';
    protected $edit = 'Edit';
    protected $main = 'kategori';
    protected $successAdd = [
        'success' => 'Data Kategori Berhasil Ditambahkan!'
    ];
    protected $successEdit = [
        'success' => 'Data Kategori Berhasil Diubah!'
    ];


    public function __construct()
    {
        $this->kategori = new Category();
        $this->shin = new Shin($this->main);
    }

    public function index()
    {
        $this->shin->successAdd();
        $data = [
            'title' => $this->title,
            'kategori' => $this->kategori->getData()
        ];
        return view('kategori.list', $data);
    }

    public function create()
    {
        $data = [
            'title' => "{$this->add} {$this->title}",
            'main' => $this->main
        ];
        return view('kategori.add', $data);
    }

    public function store(Request $post)
    {
        $data = [
            'nama_kategori' => $post->kategori
        ];
        $this->kategori->insertData($data);
        return redirect(route('kategori'))->with($this->shin->successAdd());
    }

    public function edit($id = NULL)
    {
        $data = [
            'title' => "{$this->edit} {$this->title}",
            'row' => $this->kategori->getRow($id)
        ];
    }
}
