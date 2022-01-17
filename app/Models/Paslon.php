<?php

namespace App\Models;

use App\Models\Polling;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paslon extends Model
{
    use HasFactory;
    protected $fillable = ['no_urut' ,'nama','alamat','jenis_kelamin','kontak'];

    public function polling(){
        return $this->hasMany(Polling::class);
    }
}
