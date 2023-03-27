<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengaduan_id',
        'tanggapan',
    ];

    public function pengaduan(){
        return $this->belongsTo('App\Models\Pengaduan','pengaduan_id');
    }
}
