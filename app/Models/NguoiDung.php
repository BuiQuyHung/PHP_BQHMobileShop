<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = 'NguoiDung';
    protected $primaryKey = 'UserID';
    protected $guarded = [];
    public function TinTuc()
    {
        return $this->hasMany(TinTuc::class, 'UserID','UserID');
    }
}
