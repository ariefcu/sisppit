<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function keperluan_izin()
    {
        return $this->hasMany(Izin::class);
    }
}
