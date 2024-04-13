<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'NhanVien';
    protected $primaryKey = 'MaNhanVien';
    protected $guarded = [];
    public function HoaDonBan()
    {
        return $this->hasMany(HoaDonBan::class, 'MaNhanVien', 'MaNhanVien');
    }
    public function HoaDonNhap()
    {
        return $this->hasMany(HoaDonNhap::class, 'MaNhanVien', 'MaNhanVien');
    }
}
