<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'DonHang';
    protected $primaryKey = 'MaDonHang';
    protected $guarded = [];
    public function ChiTietDonHang()
    {
        return $this->hasMany(ChiTietDonHang::class, 'MaDonHang','MaDonHang');
    }
}
