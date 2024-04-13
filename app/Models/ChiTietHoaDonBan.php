<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBan extends Model
{
    protected $table = 'ChiTietHoaDonBan';
    protected $primaryKey = 'MaCTHoaDonBan';
    protected $guarded = [];
    public function Sach()
    {
        return $this->belongsTo(Sach::class,'MaSach','MaSach');
    }
    public function HoaDonBan()
    {
        return $this->belongsTo(HoaDonBan::class,'MaHoaDonBan','MaHoaDonBan');
    }
}
