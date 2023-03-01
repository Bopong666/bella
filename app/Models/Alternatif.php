<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = 'alternatif';
    protected $guarded = '';
    protected $with = ['subkriteria'];
    public $incrementing = true;

    public function subkriteria()
    {
        return $this->belongsToMany(SubKriteria::class);
    }
}
