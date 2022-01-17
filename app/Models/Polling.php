<?php

namespace App\Models;

use App\Models\Tps;
use App\Models\Paslon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Polling extends Model
{
    use HasFactory;

    protected $fillable = ['kode_polling','tps_id','paslon_id','jumlah_suara'];

    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }
    public function paslon(){
        return $this->belongsTo(Paslon::class);
    }
}
