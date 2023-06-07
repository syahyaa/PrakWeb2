<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';

    protected $primarykey = 'id';

    protected $fillable = [
        'nama',
    ];

    public function produk(){
        return $this->hasMany(Produk::class);
    }

    public function getAllData(){
        $alldata = Produk::table('kategori_produk')
        ->select('kategori_produk.*')
        ->get();
        return $alldata;
    }
}
