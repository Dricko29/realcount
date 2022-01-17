<?php

namespace App\Models;

use App\Models\Tps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dpt extends Model
{
    use HasFactory;
    protected $fillable = ['tps_id','dpt_perempuan' ,'dpt_laki'];
    public function tps(){
        
        return $this->belongsTo(Tps::class);
    }
}
