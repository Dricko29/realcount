<?php

namespace App\Models;

use App\Models\Dpt;
use App\Models\Suara;
use App\Models\Polling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tps extends Model
{
    use HasFactory;
    protected $fillable =['nama','lokasi'];

    public function polling(){
        return $this->hasMany(Polling::class);
    }
    public function suara()
    {
        return $this->hasMany(Suara::class);
    }
    public function dpt()
    {
        return $this->hasMany(Dpt::class);
    }

}
