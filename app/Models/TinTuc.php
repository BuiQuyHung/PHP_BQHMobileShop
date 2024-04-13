<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'TinTuc';
    protected $primaryKey = 'MaTinTuc';
    protected $guarded = [];
    public function NguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'UserID', 'UserID');
    }
}
