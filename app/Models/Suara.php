<?php

namespace App\Models;

use App\Models\Tps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suara extends Model
{
    use HasFactory;

    protected $fillable = ['tps_id','suara_tidak_sah','golput'];

    public function tps()
    {
        return $this->belongsTo(Tps::class);
    }
}
