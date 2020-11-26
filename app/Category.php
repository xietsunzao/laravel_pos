<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "tb_kategori";
    protected $fillable = ['nama_kategori'];
    protected $primaryKey = 'id_kategori';

    public function getData()
    {
        return $this->all();
    }

    public function insertData($data)
    {
        return $this->create($data);
    }

    public function getRow($id)
    {
        return $this->find($id);
    }
}
