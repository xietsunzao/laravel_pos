<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ShinServiceProvider extends ServiceProvider
{

    protected $successAdd =  'Berhasil Ditambahkan!';
    protected $successEdit =  'Berhasil Diubah!';

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
}
