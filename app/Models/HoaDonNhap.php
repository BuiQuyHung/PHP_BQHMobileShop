<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    protected $table = 'HoaDonNhap';
    protected $primaryKey = 'MaHoaDonNhap';
    protected $guarded = [];
    public function ChiTietHoaDonNhap()
    {
        return $this->hasMany(ChiTietHoaDonNhap::class, 'MaHoaDonNhap', 'MaHoaDonNhap');
    }
    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKhachHang', 'MaKhachHang');
    }

    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNhanVien', 'MaNhanVien');
    }
}
