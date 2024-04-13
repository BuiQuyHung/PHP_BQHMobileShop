<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = 'KhuyenMai';
    protected $primaryKey = 'MaKhuyenMai';
    protected $guarded = [];
    public function Sach()
    {
        return $this->belongsTo(Sach::class,'MaSach','MaSach');
    }
}
