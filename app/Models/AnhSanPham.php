<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnhSanPham extends Model
{
    protected $table = 'anhsanpham';
    protected $primaryKey = 'MaAnh';
    protected $guarded = [];
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'MaSP', 'MaSP');
    }
}
