<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'KhachHang';
    protected $primaryKey = 'MaKhachHang';
    protected $guarded = [];
 
    public function HoaDonBan()
    {
        return $this->hasMany(HoaDonBan::class, 'MaKhachHang', 'MaKhachHang');
    }
}
