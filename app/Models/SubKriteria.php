<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    protected $table = 'sub_kriteria';
    protected $guarded = '';
    public $incrementing = true;

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
