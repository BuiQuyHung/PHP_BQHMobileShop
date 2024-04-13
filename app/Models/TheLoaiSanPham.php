<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiSanPham extends Model
{
    protected $table = 'DanhMucSanPham';
    protected $primaryKey = 'MaDanhMuc';
    protected $guarded = [];
    public function SanPham()
    {
        return $this->hasMany(SanPham::class, 'MaDanhMuc', 'MaDanhMuc');
    }
}
