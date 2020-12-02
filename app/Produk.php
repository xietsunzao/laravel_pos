<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    protected $table = 'tb_produk';
    protected $fillable = ['kode_produk', 'nama_produk', 'id_kategori', 'harga'];
    protected $primaryKey = 'id_produk';

    public function getData()
    {
        return $this->leftJoin('tb_kategori', 'tb_kategori.id_kategori', '=', 'tb_produk.id_kategori')
            ->select('*')
            ->get();
    }

}
