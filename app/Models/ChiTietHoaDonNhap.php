<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonNhap extends Model
{
    protected $table = 'ChiTietHoaDonNhap';
    protected $primaryKey = 'MaCTHoaDonNhap';
    protected $guarded = [];
    public function Sach()
    {
        return $this->belongsTo(Sach::class,'MaSach','MaSach');
    }
    public function HoaDonNhap()
    {
        return $this->belongsTo(HoaDonNhap::class,'MaHoaDonNhap','MaHoaDonNhap');
    }
}
