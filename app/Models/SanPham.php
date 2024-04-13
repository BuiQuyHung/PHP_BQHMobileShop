<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'SanPham';
    protected $primaryKey = 'MaSP';
    protected $guarded = [];
    public function AnhSanPham()
    {
        return $this->hasMany(AnhSanPham::class, 'MaSP', 'MaSP');
    }
    public function TheLoaiSanPham()
    {
        return $this->belongsTo(TheLoaiSanPham::class, 'MaTheLoaiSanPham', 'MaTheLoaiSanPham');
    }

    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'MaNhaCungCap', 'MaNhaCungCap');
    }
    public function ChiTietHoaDonBan()
    {
        return $this->hasMany(ChiTietHoaDonBan::class, 'MaSP', 'MaSP');
    }
    public function ChiTietHoaDonNhap()
    {
        return $this->hasMany(ChiTietHoaDonNhap::class, 'MaSP', 'MaSP');
    }
    public function KhuyenMai()
    {
        return $this->hasMany(KhuyenMai::class, 'MaSP', 'MaSP');
    }
}
