<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ShinServiceProvider as Shin;
use App\Category as Category;
// halo test ini testing saja
class CategoryController extends Controller
{
    public $title = 'Data Kategori';
    protected $add = 'Tambah';
    protected $edit = 'Edit';
    protected $main = 'Kategori';

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
        $getRow = $this->kategori->countData($id);
        if ($getRow > 0) {
            $data = [
                'title' => "{$this->edit} {$this->title}",
                'row' => $this->kategori->getRow($id),
                'main' => $this->main
            ];
            return view('kategori.edit', $data);
        } else {
            return redirect(route('kategori'))->with($this->shin->notFound());
        }
    }

    public function update(Request $post, $id)
    {
        $data = [
            'nama_kategori' => $post->kategori
        ];
        $this->kategori->updateData($id, $data);
        return redirect(route('kategori'))->with($this->shin->successEdit());
    }

    public function destroy($id)
    {
        $getRow = $this->kategori->countData($id);
        if ($getRow > 0) {
            $this->kategori->deleteData($id);
            return redirect(route('kategori'))->with($this->shin->successDelete());
        } else {
            return redirect(route('kategori'))->with($this->shin->notFound());
        }
    }
}
