<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ShinServiceProvider extends ServiceProvider
{
    protected $successAdd =  'Berhasil Ditambahkan!';
    protected $successEdit =  'Berhasil Diubah!';
    protected $failedAdd = 'Gagal Ditambahkan!';
    protected $failedEdit = 'Gagal Diubah!';
    protected $successDelete = 'Berhasil Dihapus!';
    protected $failedDelete = 'Gagal Dihapus!';
    protected $notFound = 'Tidak Ditemukan!';

    public function __construct($main = NULL)
    {
        $this->main = $main;
    }

    public function successAdd()
    {
        return  ["success" => "{$this->main} {$this->successAdd}"];
    }

    public function successEdit()
    {
        return  ["success" => "{$this->main} {$this->successEdit}"];
    }
    
    public function successDelete()
    {
        return  ["success" => "{$this->main} {$this->successDelete}"];
    }

    public function failedAdd()
    {
        return ["danger" => "{$this->main}  {$this->failedAdd}"];
    }

    public function failedEdit()
    {
        return ["danger" => "{$this->main} {$this->failedEdit}"];
    }

    public function notFound()
    {
        return ["warning" => "{$this->main} {$this->notFound}"];
    }
}
