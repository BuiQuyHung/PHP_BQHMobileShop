<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
    protected $table = 'HoaDonBan';
    protected $primaryKey = 'MaHoaDonBan';
    protected $guarded = [];
    public function ChiTietHoaDonBan()
    {
        return $this->hasMany(ChiTietHoaDonBan::class, 'MaHoaDonBan', 'MaHoaDonBan');
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
